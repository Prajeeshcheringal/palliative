<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\general\Volunteer;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;

class VolunteerController extends Controller
{
    function index(Request $request)
    {

        if ($request->isMethod('post')) {

            $data = Volunteer::orderBy('name', 'ASC')->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $message = "'Do you want to delete'";
                    $btn = '<a   href="volunteers/view/' . $data->id . '"  class="btn btn-info ajax-link" style="margin:px">  <i class="fa fa-eye"></i></span></a>';
                    $btn .= '<a href="volunteers/create/' . $data->id . '" class="btn btn-success ajax-link" style="margin:1px"><span><i class="fa fa-edit"></i></span></a>';
                    // $btn .= '<a href="medicine/delete/' . $data->id . '" class="btn btn-danger" onclick="return confirm(' . $message . ')" style="margin:1px"><span><i class="fa fa-remove"></i></span></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('volunteer/volunteer_list');
    }



    public function create($id)
    {


        $data['id'] = $id;
        $data['view'] = "create";
        if ($id > 0) {
            $data['volunteer'] = Volunteer::where('id', $id)->first();
            $data['view'] = "update";
        }


        return view('volunteer.volunteer_create', $data);
    }

    function view($id = 0)
    {

        $data['id'] = $id;
        $data['volunteer'] = Volunteer::where('id', $id)->first();
        $data['view'] = "view";

        return view('volunteer.volunteer_create', $data);
    }


    function save(Request $request)
    {
        try {
            if (!$request->id) {

                $id = Volunteer::create($request->all())->id;
                $no = sprintf("%03d", $id);
                Volunteer::find($id)->update(['vol_id' => 'VPC-' . $no]);
            } else {

                $id = $request->id;
                Volunteer::find($id)->update($request->all());
            }

            return redirect('volunteers')->with('Success', 'Saved Successfully');
        } catch (\Exception $e) {

            return redirect('volunteers')->with('Error', 'Oops Something Went Wrong');
        }
    }

    public function dailyVolunteer(Request $request)
    {

        if ($request->isMethod('post')) {

            $data = DB::table('daily_volunteers as a')->join('volunteers as b', 'a.vol_id', 'b.id')->whereDate('a.date', $request->date)->select('a.id as daily_id','b.vol_id','b.name','b.role','b.address','b.phone','b.gender')->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $message = "'Do you want to delete'";

                    $btn = '<a href="daily_volunteers/delete/' . $data->daily_id . '" class="btn btn-danger delete"  style="margin:1px"><span><i class="fa fa-remove"></i></span></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('volunteer/daily_volunteers_list');
    }

    public function  dailyVolunteerCreate($id)
    {


        $data['id'] = $id;
        $data['view'] = "create";

        return view('volunteer.create_daily_volunteers', $data);
    }


    public function getVolunteers(Request $request)
    {

        $search = $request->search;


        $items = Volunteer::orderby('name', 'asc')->select('id', 'name', 'vol_id', 'address', 'role', 'gender', 'phone')->where('name', 'like', '%' . $search . '%')->orWhere('vol_id', 'like', '%' . $search . '%')->limit(5)->get();


        $response = array();
        foreach ($items as $item) {
            $response[] = array(
                "value" => $item->id,
                "label" => $item->name . '  -  ' . $item->vol_id,
                'address' => $item->address,
                'role' => $item->role,
                'gender' => $item->gender,
                'phone' => $item->phone

            );
        }

        return response()->json($response);
    }


    public function dailyVolunteerSave(Request $request)
    {


        $data = [
            'vol_id' => $request->vol_id,
            'date' => $request->date
        ];

        DB::table('daily_volunteers')->insert($data);
        return redirect('daily_volunteers')->with('Success', 'Saved Successfully');
    }


    public function dailyVolunteerDelete($id){

        DB::table('daily_volunteers')->where('id',$id)->delete();
        return redirect('daily_volunteers')->with('Success', 'Deleted Successfully');

    }
}
