<?php

namespace App\Http\Controllers\report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\patients\PatientBodyChart;
use App\Model\patients\PatientFamilyMember;
use App\Model\patients\PatientFamilyTree;
use App\Model\patients\PatientDifficulty;
use App\Model\patients\PatientOtherDetail;
use App\Model\patients\Patient;
use App\Model\general\Disease;
use Yajra\DataTables\DataTables;

class ReportController extends Controller
{
    function patientReport(Request $request)
    {
        if ($request->ajax()) {

            $data = Patient::with('getDiseaseRelation')->latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('reports.patient_report');
    }

    function studentReport(Request $request)
    {
        if ($request->ajax()) {

            $data = PatientFamilyMember::with('getDiseaseRelation')->latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('reports.student_report');
    }
}
