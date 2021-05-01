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
use App\Model\general\Equipment;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class ReportController extends Controller
{
    function patientReport(Request $request)
    {
        if ($request->isMethod('post')) {

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
            if ($request->current_status) {

                $model->where('current_status', $request->current_status);
            }

            $data = $model->latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {

                    $url = env('APP_URL');
                    $btn = '<a   href="' . $url . '/patient/view/' . $data->id . '"  class="btn btn-info ajax-link" style="margin:px">  <i class="fa fa-eye"></i></span></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $data['diseases'] = Disease::all();

        return view('reports.patient_report', $data);
    }

    function studentReport(Request $request)
    {
        if ($request->isMethod('post')) {

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
        if ($request->isMethod('post')) {
            $model = Booking::with('getPatientRelation')->where('status',1);

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
                ->addColumn('action', function ($data) {

                    $url = env('APP_URL');
                    $btn = '<a   href="' . $url . '/patient/view/' . $data->getPatientRelation->id . '"  class="btn btn-info ajax-link" style="margin:px">  <i class="fa fa-eye"></i></span></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('reports.treatment_report');
    }

    function equipmentReport(Request $request)
    {

        if ($request->isMethod('post')) {




            $qry = DB::table('equipment_reports as a')->join('patients as b', 'a.pat_id', '=', 'b.id')->join('equipment as c', 'a.equip_id', '=', 'c.id')
                ->orderBy('a.id', 'desc');

            if (isset($request->return_status)) {

                $date = Date('Y-m-d');
                if ($request->return_status == 3) {

                    $qry->where('a.return_status', 1);
                    $qry->where('a.end_date', '<', $date);
                } else {
                    $qry->where('a.return_status', $request->return_status);
                }
            }

            if ($request->usage_type)
                $qry->where('a.type', $request->usage_type);

            if ($request->equip_id)
                $qry->where('a.equip_id', $request->equip_id);

            $data = $qry->get(['a.id', 'b.name', 'b.reg_no', 'b.phone', 'c.equipment', 'a.nos', 'a.type', 'a.return_status', 'a.end_date', DB::raw('DATE(`donated_date`) as date')]);
            $result = array();
            foreach ($data as $rows) {
                $row = [];
                $row['reg_no'] = $rows->reg_no;
                $row['name'] = $rows->name;
                $row['phone'] = $rows->phone;
                $row['date'] = $rows->date;
                $row['equipment'] = $rows->equipment;
                $row['nos'] = $rows->nos;
                $row['end_date'] = $rows->end_date;
                $row['type'] = $rows->type;

                if ($rows->return_status == 1) {
                    $message = "'Do you want to Return ?'";
                    if (Date('Y-m-d') >= $rows->end_date) {

                        $row['action'] = '<a onclick="showModal(' . $rows->id . ')" class="btn btn-danger">Out of Date</a>';
                    } else {
                        $row['action'] = '<a  onclick="showModal(' . $rows->id . ')" class="btn btn-warning">Pending</a>';
                    }
                } elseif ($rows->return_status == 0) {

                    $row['action'] = '<a class="btn btn-primary"> No Return</a>';
                } elseif ($rows->return_status == 2) {

                    $row['action'] = '<a class="btn btn-success">Returned</a>';
                }

                $result[] = $row;
            }


            return Datatables::of($result)
                ->addIndexColumn()
                ->make(true);
        }
        $data['equipments'] = Equipment::all();

        return view('reports.equipments_report', $data);
    }
    function equipmentCreate($id)
    {


        $data['id'] = $id;
        $data['view'] = "create";
        $data['equipments'] = Equipment::all();

        if ($id > 0) {
            $data['view'] = "update";
        }

        return view('reports.equipment_create', $data);
    }

    function equipmentSave(Request $request)
    {

        $equipment = new Equipment();
        $response = $equipment->equipmentSave($request->except(['_token']));
        if ($response)
            return redirect('reports/equipments')->with('Success', 'Saved Successfully');
        else
            return redirect('reports/equipments/create/0')->with('Error', 'Oops Something Went Wrong');
    }

    public function equipmentReturn(Request $request)
    {
        $id = $request->id;
        $equip_id = DB::table('equipment_reports')->where('id', $id)->first()->equip_id;
        $nos = DB::table('equipment_reports')->where('id', $id)->first()->nos;

        DB::table('equipment')->where('id', $equip_id)->increment('stock', $nos);
        $response = DB::table('equipment_reports')->where('id', $id)->update([
            'return_status' => 2,
            'return_date' => $request->return_date,
            'return_remark' => $request->return_remark
        ]);

        if ($response)
            return redirect('reports/equipments')->with('Success', 'Saved Successfully');
        else
            return redirect('reports/equipments')->with('Error', 'Oops Something Went Wrong');
    }
}
