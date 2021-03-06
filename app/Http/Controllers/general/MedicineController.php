<?php

namespace App\Http\Controllers\general;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\general\Medicine;
use App\Model\home_visit\Booking;
use Yajra\DataTables\DataTables;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class MedicineController extends Controller
{

    function listall(Request $request)
    {
        if ($request->isMethod('post')) {

            $data = Medicine::orderBy('medicine', 'ASC')->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $message = "'Do you want to delete'";
                    $btn = '<a   href="medicine/view/' . $data->id . '"  class="btn btn-info ajax-link" style="margin:px">  <i class="fa fa-eye"></i></span></a>';
                    $btn .= '<a href="medicine/create/' . $data->id . '" class="btn btn-success ajax-link" style="margin:1px"><span><i class="fa fa-edit"></i></span></a>';
                    // $btn .= '<a href="medicine/delete/' . $data->id . '" class="btn btn-danger" onclick="return confirm(' . $message . ')" style="margin:1px"><span><i class="fa fa-remove"></i></span></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('general/list_medicines');
    }


    function create($id = 0)
    {
        $data['id'] = $id;
        $data['view'] = "create";
        if ($id > 0) {
            $data['Medicine'] = Medicine::where('id', $id)->first();
            $data['view'] = "update";
        }

        return view('general.create_medicine', $data);
    }

    function view($id = 0)
    {

        $data['id'] = $id;
        $data['Medicine'] = Medicine::where('id', $id)->first();

        $data['view'] = "view";

        return view('general.create_medicine', $data);
    }

    function save(Request $request)
    {
        try {
            if (!$request->id) {

                $id = Medicine::create($request->all())->id;
            } else {

                $id = $request->id;
                Medicine::find($id)->update($request->all());
            }

            return redirect('medicines')->with('Success', 'Saved Successfully');
        } catch (\Exception $e) {

            return redirect('medicines')->with('Error', 'Oops Something Went Wrong');
        }
    }

    public function delete($id)
    {
        try {
            Medicine::find($id)->delete();
            return redirect('medicines')->with('Success', 'Deleted Successfully');
        } catch (\Exception $e) {
            return redirect('medicines')->with('Error', 'Oops Something Went Wrong');
        }
    }

    public function getMedicine(Request $request)
    {


        $search = $request->search;


        $items = Medicine::orderby('medicine', 'asc')->select('id', 'medicine', 'quantity')->where('medicine', 'like', '%' . $search . '%')->limit(5)->get();


        $response = array();
        foreach ($items as $item) {
            $response[] = array("value" => $item->id, "stock" => $item->quantity, "label" => $item->medicine);
        }

        return response()->json($response);
    }


    public  function Prescription(Request $request)
    {
        if ($request->isMethod('post')) {

            $data = Booking::where('status', 1)->whereDate('date', Carbon::today())->with('getPatientRelation')->latest()->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $message = "'Do you want to delete'";
                    $btn = '<a   href="prescription/view/' . $data->id . '/' . $data->pat_id . '"  class="btn btn-info ajax-link" style="margin:px">  <i class="fa fa-eye"></i></span></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('general/prescriptions');
    }

    public function viewPrescription($bok_id, $pat_id)
    {

        $data = [
            'pat_id' => $pat_id,
            'bok_id' => $bok_id,
            'patient' => DB::table('patients')->where('id', $pat_id)->first(),
            'prescription' => DB::table('prescription')->where('bok_id', $bok_id)->get(),
            'medicines' => DB::table('medicine_bills as a')->join('medicines as b', 'a.medicine_id', '=', 'b.id')->where('bok_id', $bok_id)->get(['a.medicine_id', 'a.quantity', 'b.medicine', 'b.quantity as stock']),
        ];

        return view('general/view_prescriptions', $data);
    }

    public function billingSave(Request $request)
    {


        $pat_id = $request->pat_id;
        $bok_id = $request->bok_id;
        $medicine_count = 0;

        $medicines = DB::table('medicine_bills')->where('bok_id', $bok_id)->get();

        foreach ($medicines as $medicine) {

            Medicine::where('id', $medicine->medicine_id)->increment('quantity', $medicine->quantity);
        }

        DB::table('medicine_bills')->where('bok_id', $bok_id)->delete();

        if (isset($request->medicine_id)) {

            $medicine_count = count($request->medicine_id);


            for ($i = 0; $i < $medicine_count; $i++) {

                Medicine::where('id', $request->medicine_id[$i])->decrement('quantity', $request->quantity[$i]);

                $data = [

                    'bok_id' => $bok_id,
                    'pat_id' => $pat_id,
                    'medicine_id' => $request->medicine_id[$i],
                    'quantity' => $request->quantity[$i],

                ];

                DB::table('medicine_bills')->insert($data);
            }
        }
        return redirect('prescriptions')->with('Success', 'Saved Successfully');

    }  
}
