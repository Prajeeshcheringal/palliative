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
        if ($request->ajax()) {

            $data = Medicine::latest()->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $message = "'Do you want to delete'";
                    $btn = '<a   href="medicine/view/' . $data->id . '"  class="btn btn-info" style="margin:px">  <i class="fa fa-eye"></i></span></a>';
                    $btn .= '<a href="medicine/create/' . $data->id . '" class="btn btn-success" style="margin:1px"><span><i class="fa fa-edit"></i></span></a>';
                    $btn .= '<a href="medicine/delete/' . $data->id . '" class="btn btn-danger" onclick="return confirm(' . $message . ')" style="margin:1px"><span><i class="fa fa-remove"></i></span></a>';
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
            $response[] = array("value" => $item->id, "stock"=>$item->quantity ,"label" => $item->medicine);
        }

        return response()->json($response);
    }


    public  function Prescription(Request $request)
    {
        if ($request->ajax()) {

            $data = Booking::where('status',1)->whereDate('date', Carbon::today())->with('getPatientRelation')->latest()->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $message = "'Do you want to delete'";
                    $btn = '<a   href="prescription/view/' . $data->id . '/'.$data->pat_id.'"  class="btn btn-info" style="margin:px">  <i class="fa fa-eye"></i></span></a>';
                     return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('general/prescriptions');
    }

    public function viewPrescription($bok_id,$pat_id){

    $data =[
        'pat_id'=>$pat_id,
        'bok_id'=>$bok_id,
        'patient'=>DB::table('patients')->where('id',$pat_id)->first(),
         'prescription'=>DB::table('prescription')->where('bok_id',$bok_id)->get()

    ];

        return view('general/view_prescriptions',$data);

    }

    public function billingSave(Request $request){

        

    }
}
