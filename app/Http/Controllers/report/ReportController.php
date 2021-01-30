<?php

namespace App\Http\Controllers\report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\patients\PatientFamilyMember;
use App\Model\patients\PatientFamilyTree;
use App\Model\patients\PatientDifficulty;
use App\Model\patients\PatientOtherDetail;
use App\Model\patients\Patient;
use App\Model\general\Disease;
use App\Model\home_visit\Booking;

use Yajra\DataTables\DataTables;

class ReportController extends Controller
{
    function patientReport(Request $request)
    {
        if ($request->ajax()) {

            $model =  Patient::with('getDiseaseRelation');

            if ($request->disease) {
                $model->where('disease', $request->disease);
            }

            if ($request->category) {
                $model->where('category', $request->category);
            }
            if ($request->finance) {
                $model->where('financial_status', $request->finance);
            }

            $data = $model->latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->rawColumns(['action'])
                ->make(true);
        }
        $data['diseases'] = Disease::all();

        return view('reports.patient_report', $data);
    }

    function studentReport(Request $request)
    {
        if ($request->ajax()) {

            $data = PatientFamilyMember::with('getPatientRelation')->where('is_student', 'Yes')->latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->rawColumns(['action'])
                ->make(true);
        }


        return view('reports.student_report');
    }

    function treatmentReport(Request $request)
    {
        if ($request->ajax()) {
            $model = Booking::with('getPatientRelation');

            if ($request->start_date) {
                $model->where('date', '>=', $request->start_date);
            }
            if ($request->end_date) {
                $model->where('date', '<=', $request->end_date);
            }
            if ($request->type) {
                $model->where('bok_type', $request->type);
            }

            $data = $model->latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('reports.treatment_report');
    }

    function equipmentReport(Request $request){

        return view('reports.equipments_report');

    }
    function equipmentCreate($id){


        $data['id'] = $id;
        $data['view'] = "create";
        if ($id > 0) {
          //  $data['Medicine'] = Medicine::where('id', $id)->first();
            $data['view'] = "update";
        }

        return view('reports.equipment_create');

    }
}
