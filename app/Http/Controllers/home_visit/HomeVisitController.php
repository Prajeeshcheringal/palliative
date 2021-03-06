<?php

namespace App\Http\Controllers\home_visit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\patients\Patient;
use App\Model\home_visit\Booking;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeVisitController extends Controller
{
    function listall(Request $request)
    {
        if ($request->isMethod('post')) {

            $data = Patient::where('current_status', 'Active')->latest()->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $patid = $data->id;
                    $name = "'" . $data->name . "'";
                    $care_of = "'" . $data->care_of . "'";
                    $reg_no = "'" . $data->reg_no . "'";

                    $btn = '<a  onclick="showModal(' . $patid . ',' . $name . ',' . $care_of . ',' . $reg_no . ')" class="btn btn-success" style="margin-left:20px">  <i class="fa fa-book"></i></span></a>';

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
        if ($request->isMethod('post')) {

            $data = Booking::where('bok_type', 'home')->whereDate('date', $request->book_date)->with('getPatientRelation')->latest()->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {

                    $btn = '<a href="bookings/add_data/' . $data->id . '/' . $data->pat_id . '" class="btn btn-success ajax-link" style="margin-left:20px">  <i class="fa fa-edit"></i></span></a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        $data['two_days_ago'] = date('Y-m-d', strtotime('-2 days'));
        return view('home_visit.bookinglist', $data);
    }

    function bookingsAddData($bok_id, $pat_id)
    {
        $data = [
            //current bokking data

            'bok_id' => $bok_id,
            'pat_id' => $pat_id,
            'patient' => Patient::where('id', $pat_id)->first(),
            'booking' => Booking::where('id', $bok_id)->first(),
            'prescription' => DB::table('prescription')->where('bok_id', $bok_id)->get(),
            'team_members' => DB::table('team_members')->where('bok_id', $bok_id)->get(),

            //previous data

            'prev_bookings' => Booking::where('pat_id', $pat_id)->where('status', 1)->orderBy('date', 'desc')->get(),
            'prev_prescriptions' => DB::table('prescription')->where('pat_id', $pat_id)->get(),
            'prev_team_members' => DB::table('team_members')->where('pat_id', $pat_id)->get(),



        ];
        return view('home_visit.booking_add_data', $data);
    }

    function addDatasave(Request $request)
    {
        $teamcount = 0;
        $prescount = 0;
        // try {




        $bok_id = $request->bok_id;
        Booking::find($bok_id)->update($request->all());
        DB::table('prescription')->where('bok_id', $bok_id)->delete();
        DB::table('team_members')->where('bok_id', $bok_id)->delete();

        if (isset($request->medicine)) {

            $prescount = count($request->medicine);


            for ($i = 0; $i < $prescount; $i++) {
                $prescdata = [
                    'bok_id' => $bok_id,
                    'pat_id' => $request->pat_id,
                    'medicine' => $request->medicine[$i],
                    'dose' => $request->dose[$i],
                    'period' => $request->period[$i],
                    'purpose' => $request->purpose[$i],

                ];
                DB::table('prescription')->insert($prescdata);
            }
        }

        if (isset($request->team_name)) {

            $teamcount = count($request->team_name);


            for ($i = 0; $i < $teamcount; $i++) {
                $teamdata = [
                    'bok_id' => $bok_id,
                    'pat_id' => $request->pat_id,
                    'team_name' => $request->team_name[$i],
                    'role' => $request->role[$i],
                    'contact_no' => $request->contact_no[$i]


                ];
                DB::table('team_members')->insert($teamdata);
            }
        }



        return redirect('bookings')->with('Success', 'Saved Successfully');







        // } catch (\Exception $e) {
        //     return redirect('bookings')->with('Error', 'Oops Something Went Wrong');
        // }
    }

    function Cliniclistall(Request $request)
    {
        if ($request->isMethod('post')) {

            $data = Patient::where('current_status', 'Active')->latest()->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $patid = $data->id;
                    $name = "'" . $data->name . "'";
                    $care_of = "'" . $data->care_of . "'";
                    $reg_no = "'" . $data->reg_no . "'";

                    $btn = '<a  onclick="showModal(' . $patid . ',' . $name . ',' . $care_of . ',' . $reg_no . ')" class="btn btn-success" style="margin-left:20px">  <i class="fa fa-book"></i></span></a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('home_visit.addclinicvisit');
    }

    function clinicbookings(Request $request)
    {
        if ($request->isMethod('post')) {

            $data = Booking::where('bok_type', 'clinic')->whereDate('date', Carbon::today())->with('getPatientRelation')->latest()->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {

                    $btn = '<a href="bookings/add_data/' . $data->id . '/' . $data->pat_id . '" class="btn btn-success ajax-link" style="margin-left:20px">  <i class="fa fa-edit"></i></span></a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('home_visit.clinicbookinglist');
    }




    function pendingBookings(Request $request)
    {
        if ($request->isMethod('post')) {

            $data = Booking::where('bok_type', 'home')->whereDate('date', '<', Carbon::today())->where('status', 0)->with('getPatientRelation')->latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $bok_id = $data->id;
                    $bok_note = "'" . $data->bok_note . "'";
                    $base_url =url('/');

                    $btn = '<a href="'.$base_url.'/bookings/delete/' . $data->id . '"  back="'.$base_url.'/bookings/pendings"  class="btn btn-danger delete" style="margin-left:5px">Cancel</span></a>';
                    $btn = $btn . '<a  onclick="showModal(' . $bok_id . ',' . $bok_note . ')" class="btn btn-success" style="margin-left:5px">Rebook</span></a>';



                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('home_visit.pending_home_visit');
    }



    function deleteBooking($id)
    {


        if (Booking::find($id)->delete()) {
            return redirect('bookings/pendings')->with('Success', 'Removed Successfully');
        }
    }

    function rebooking(Request $request)
    {
        Booking::find($request->bok_id)->update([

            'date'=>$request->date,
            'bok_note'=>$request->bok_note
        ]);

        return redirect('bookings/pendings')->with('Success', 'Rebooked Successfully');

    }
}
