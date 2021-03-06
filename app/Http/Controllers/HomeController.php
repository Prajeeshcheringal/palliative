<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [

            'total_patients' => DB::table('patients')->count(),
            'active_patients' => DB::table('patients')->where('current_status', 'Active')->count(),
            'daily_home_care' => DB::table('bookings')->where('bok_type', 'home')->whereDate('date', Carbon::today())->count(),
            'daily_clinic_care' => DB::table('bookings')->where('bok_type', 'clinic')->whereDate('date', Carbon::today())->count(),
            'pending_home_care' => DB::table('bookings')->where('bok_type', 'home')->where('status', 0)->whereDate('date', '<', Carbon::today())->count(),
            'pending_equipments' =>DB::table('equipment_reports as a')->where('a.return_status',1)->whereDate('a.end_date', '<', Carbon::today())->count(),




        ];
        return view('home', $data);
    }

    public function dashboard()
    {
        $data = [

            'pending_home_care' => DB::table('bookings')->where('bok_type', 'home')->where('status', 0)->whereDate('date', '<', Carbon::today())->count(),
            'pending_equipments' =>DB::table('equipment_reports as a')->where('a.return_status',1)->whereDate('a.end_date', '<', Carbon::today())->count(),

        ];
        return view('layouts.app', $data);
    }

    public function changePassword(Request $request)
    {


        $current_password = $request->current_password;
        $new_password = $request->new_password;
        if (Hash::check($current_password, Auth::user()->password)) {

            User::find(Auth::user()->id)->update(['password' => bcrypt($new_password)]);
            return redirect('/')->with('Success', 'Password Updated Successfully!');
        } else {

            return redirect('/')->with('Error', ' Oops Wrong Password !');
        }
    }
}
