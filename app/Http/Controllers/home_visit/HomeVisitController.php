<?php

namespace App\Http\Controllers\home_visit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\patients\Patient;
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

                    $name="'".$data->name."'";
                    $care_of="'".$data->care_of."'";
                    $reg_no="'".$data->reg_no."'";

                    $btn = '<a  onclick="showModal('.$name.','.$care_of.','.$reg_no.')" class="btn btn-success" style="margin-left:20px">  <i class="fa fa-book"></i></span></a>';
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
}
