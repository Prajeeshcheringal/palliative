<?php

namespace App\Http\Controllers\patients;

use App\Http\Controllers\Controller;
use App\patients\PatientBodyChart;
use App\patients\PatientFamilyMember;
use App\patients\PatientFamilyTree;
use App\patients\PatientDifficulty;
use App\patients\PatientOtherDetail;
use App\patients\Patient;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    function listall()
    {
        return view('patient.listall');
    }

    function create($id = 0)
    {

        return view('patient.create');
    }
    function save(Request $request)
    {
        $body_chart_item = 0;
        $family_members = 0;
        $family_tree = 0;
        $patient_difficulties=0;

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

        try {
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
                'volunteer' => $request->volunteer,
                'location' => $request->location,
            ];

            $pat_id = Patient::create($data)->id;


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
                    'disease' => $request->disease[$i],
                    'remark' => $request->remark[$i],
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

                'need_food' => $request->need_food,
                'report_of_person' => $request->report_of_person,
                'patient_assumptiom' => $request->patient_assumptiom,
                'relative_assumption' => $request->relative_assumption,
                'patient_social' => $request->patient_social

            ];

            PatientOtherDetail::create($patient_other_details);

            return redirect('patients')->with('Success', 'Created Successfully');

            
        } catch (\Exception $e) {

            return redirect('patients')->with('Error', 'Oops Something Went Wrong');
        }
    }
}
