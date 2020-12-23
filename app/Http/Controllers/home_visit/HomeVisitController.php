<?php

namespace App\Http\Controllers\home_visit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\patients\Patient;
use App\Model\home_visit\Booking;
use Yajra\DataTables\DataTables;

class HomeVisitController extends Controller
{
    function listall(Request $request)
    {
        if ($request->ajax()) {

            $data = Patient::latest()->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $patid = $data->id;
                    $name = "'" . $data->name . "'";
                    $care_of = "'" . $data->care_of . "'";
                    $reg_no = "'" . $data->reg_no . "'";

                    $btn = '<a  onclick="showModal(' . $patid . ',' . $name . ',' . $care_of . ',' . $reg_no . ')" class="btn btn-success" style="margin-left:20px">  <i class="fa fa-book"></i></span></a>';
                    // $btn .= '<a href="patient/create/' . $data->id . '" class="btn btn-success" style="margin:1px"><span><i class="fa fa-edit"></i></span></a>';
                    // $btn .= '<a href="patient/delete/' . $data->id . ' "class="btn btn-danger" style="margin:1px" onclick="';
                    // $btn .= "return confirm('Do You Want to Delete') ";
                    // $btn .= ' "><span><i class="fa  fa-remove"></i></a></span>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('home_visit.addvisit');
    }
    function save(Request $request)
    {
        try {

            Booking::create($request->all());
            return redirect('addvisit')->with('Success', 'Created Successfully');
        } catch (\Exception $e) {
            return redirect('addvisit')->with('Error', 'Oops Something Went Wrong');
        }
    }
    function bookings(Request $request)
    {
        if ($request->ajax()) {

            $data = Booking::with('getPatientRelation')->latest()->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    
                    $btn = '<a href="bookings/add_data/'.$data->id.'/'.$data->pat_id.'" class="btn btn-success" style="margin-left:20px">  <i class="fa fa-edit"></i></span></a>';
                    // $btn .= '<a href="patient/create/' . $data->id . '" class="btn btn-success" style="margin:1px"><span><i class="fa fa-edit"></i></span></a>';
                    // $btn .= '<a href="patient/delete/' . $data->id . ' "class="btn btn-danger" style="margin:1px" onclick="';
                    // $btn .= "return confirm('Do You Want to Delete') ";
                    // $btn .= ' "><span><i class="fa  fa-remove"></i></a></span>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('home_visit.bookinglist');
    } 

    function bookingsAddData($bok_id,$pat_id){
        $data =[
            'bok_id'=>$bok_id,
            'pat_id' =>$pat_id,
            'patient'=>Patient::where('id',$pat_id)->first()
        ];
        return view('home_visit.booking_add_data', $data);

    }
}
