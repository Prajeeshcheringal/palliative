<?php

namespace App\Http\Controllers\patients;

use App\Http\Controllers\Controller;
use App\Model\patients\PatientBodyChart;
use App\Model\patients\PatientFamilyMember;
use App\Model\patients\PatientFamilyTree;
use App\Model\patients\PatientDifficulty;
use App\Model\patients\PatientOtherDetail;
use App\Model\patients\Patient;
use App\Model\general\Disease;
use App\Model\home_visit\Booking;

use Illuminate\Support\Facades\DB;

use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    function listall(Request $request)
    {
        if ($request->isMethod('post')) {

            $data = Patient::where('current_status', 'Active')->latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $closed = "'Closed'";
                    $Expired = "'Expired'";

                    $btn = '<a href="patient/view/' . $data->id . '" class="btn btn-primary ajax-link" style="margin:1px">  <i class="fa fa-eye"></i></span></a>';
                    $btn .= '<a href="patient/create/' . $data->id . '" class="btn btn-success ajax-link" style="margin:1px"><span><i class="fa fa-edit"></i></span></a>';
                    $btn .= '<a  onclick="showModal(' . $data->id . ',' .  $closed . ')"  class="btn btn-warning" style="margin:1px">Close</a>';
                    $btn .= '<a  onclick="showModal(' . $data->id . ',' . $Expired . ')" class="btn btn-danger" style="margin:1px">Expired</a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('patient.listall');
    }

    function create($id = 0)
    {
        $data['id'] = $id;
        $data['view'] = "create";
        $data['diseases'] = Disease::all();
        $difficulties = [];
        if ($id > 0) {

            $data['view'] = "update";
            $data['patient'] = Patient::where('id', $id)->first();
            $data['patientotherdetail'] = PatientOtherDetail::where('pat_id', $id)->first();
            $data['family_tree'] = PatientFamilyTree::where('pat_id', $id)->get();
            $data['family_members'] = PatientFamilyMember::where('pat_id', $id)->get();
            $data['body_parts'] = PatientBodyChart::where('pat_id', $id)->get();
            $pat_difficulties = PatientDifficulty::where('pat_id', $id)->get('dificulty');
            foreach ($pat_difficulties as $dificulty) {

                $difficulties[] = $dificulty->dificulty;
            }
        } else {

            // $last_reg_no = Patient::latest()->first();
            // if ($last_reg_no) {

            //     $year = substr($last_reg_no->reg_no, 4, 6);

            //     if ($year == date('y')) {

            //         $no = sprintf("%03d", substr($last_reg_no->reg_no, 0, 3) + 1);
            //         $data['reg_no'] = $no . '/' . $year;
            //     } else {

            //         $data['reg_no'] = '001/' . date('y');
            //     }
            // } else {

            //     $data['reg_no'] = '001/' . date('y');
            // }
        }
        $data['reg_no'] = "";
        $data['difficulties'] = $difficulties;
        return view('patient.create', $data);
    }

    function view($id = 0)
    {

        $data['id'] = $id;
        $data['view'] = "view";
        $data['diseases'] = Disease::all();
        $data['patient'] = Patient::where('id', $id)->first();
        $data['patientotherdetail'] = PatientOtherDetail::where('pat_id', $id)->first();
        $data['family_tree'] = PatientFamilyTree::where('pat_id', $id)->get();
        $data['family_members'] = PatientFamilyMember::where('pat_id', $id)->get();
        $data['body_parts'] = PatientBodyChart::where('pat_id', $id)->get();
        $data['prev_bookings'] = Booking::where('pat_id', $id)->where('status', 1)->orderBy('date', 'desc')->get();
        $data['prev_prescriptions'] = DB::table('prescription')->where('pat_id', $id)->get();
        $data['prev_team_members'] = DB::table('team_members')->where('pat_id', $id)->get();
        $pat_difficulties = PatientDifficulty::where('pat_id', $id)->get('dificulty');
        foreach ($pat_difficulties as $dificulty) {

            $difficulties[] = $dificulty->dificulty;
        }

        $data['difficulties'] = isset($difficulties) ? $difficulties :[];

        return view('patient.patient_history', $data);
    }

    function save(Request $request)
    {
        $body_chart_item = 0;
        $family_members = 0;
        $family_tree = 0;
        $patient_difficulties = 0;
        if ($request->body_part) {

            $body_chart_item = count(($request->body_part));
        }
        if ($request->member_name) {

            $family_members = count(($request->member_name));
        }
        if ($request->tree_name) {

            $family_tree = count(($request->tree_name));
        }
        if ($request->dificulty) {

            $patient_difficulties = count(($request->dificulty));
        }

        // try {
        $data = [
            'reg_no' => $request->reg_no,
            'date' => $request->date,
            'name' => $request->name,
            'age' => $request->age,
            'phone' => $request->phone,
            'address' => $request->address,
            'care_of' => $request->care_of,
            'panchayath' => $request->panchayath,
            'ref_no' => $request->ref_no,
            'organization' => $request->organization,
            'pincode' => $request->pincode,
            'route' => $request->route,
            'location' => $request->location,
            'disease' =>  $request->pat_disease,
            'financial_status' => $request->financial_status,
            'category' => $request->category,
            'care_of_relation' => $request->care_of_relation,
            'reg_type' => $request->reg_type

        ];

        if (!$request->id) {

            $pat_id = Patient::create($data)->id;
        } else {

            $pat_id = $request->id;
            Patient::find($pat_id)->update($data);
        }

        PatientBodyChart::where('pat_id', $pat_id)->delete();
        PatientFamilyMember::where('pat_id', $pat_id)->delete();
        PatientFamilyTree::where('pat_id', $pat_id)->delete();
        PatientDifficulty::where('pat_id', $pat_id)->delete();
        PatientOtherDetail::where('pat_id', $pat_id)->delete();



        for ($i = 0; $i < $body_chart_item; $i++) {

            $pat_body_chart = [

                'pat_id' => $pat_id,
                'body_part' => $request->body_part[$i],
                'side' => $request->side[$i],
                'grade' => $request->grade[$i]
            ];

            PatientBodyChart::create($pat_body_chart);
        }


        for ($i = 0; $i < $family_members; $i++) {

            $family_members_data = [

                'pat_id' => $pat_id,
                'name' => $request->member_name[$i],
                'relation' => $request->relation[$i],
                'age' => $request->relation_age[$i],
                'education' => $request->education[$i],
                'married' => $request->marriage_status[$i],
                'job' => $request->job[$i],
                'is_student' => $request->is_student[$i],
                // 'remark' => $request->remark[$i],
            ];

            PatientFamilyMember::create($family_members_data);
        }


        for ($i = 0; $i < $family_tree; $i++) {

            $family_tree_data = [

                'pat_id' => $pat_id,
                'name' => $request->tree_name[$i],
                'relation' => $request->tree_relation[$i],

            ];

            PatientFamilyTree::create($family_tree_data);
        }

        for ($i = 0; $i < $patient_difficulties; $i++) {

            $patient_difficulty = [

                'pat_id' => $pat_id,
                'dificulty' => $request->dificulty[$i],

            ];

            PatientDifficulty::create($patient_difficulty);
        }






        $patient_other_details = [
            'pat_id' => $pat_id,
            'need_food' => $request->need_food,
            'report_of_person' => $request->report_of_person,
            'patient_assumptiom' => $request->patient_assumptiom,
            'relative_assumption' => $request->relative_assumption,
            'patient_social' => $request->patient_social,
            'resettlement' => $request->resettlement,
            'way_of_life' => $request->way_of_life,
            'volunteer' => $request->volunteer,
        ];

        PatientOtherDetail::create($patient_other_details);

        return redirect('patients')->with('Success', 'Created Successfully');
        //  } catch (\Exception $e) {

        //      return redirect('patients')->with('Error', 'Oops Something Went Wrong');
        // }
    }



    public function delete(Request $request)
    {
        try {
            Patient::find($request->pat_id)->update([

                'current_status' => $request->status,
                'status_date' => $request->status_date,
                'status_remark' => $request->status_remark

            ]);
            return redirect('patients')->with('Success', 'Updated Successfully');
        } catch (\Exception $e) {
            return redirect('patients')->with('Error', 'Oops Something Went Wrong');
        }
    }

    public function getPatients(Request $request)
    {


        $search = $request->search;

        if( $search)
        $items = Patient::orderby('name', 'asc')->select('id', 'name', 'reg_no')->where('name', 'like', '%' . $search . '%')->orWhere('reg_no', 'like', '%' . $search . '%')->limit(5)->get();
        else
        $items = Patient::orderby('name', 'asc')->select('id', 'name', 'reg_no')->limit(5)->get();


        $response = array();
        foreach ($items as $item) {
            $response[] = array("value" => $item->id, "label" => $item->name . '  -  ' . $item->reg_no);
        }

        return response()->json($response);
    }
}
