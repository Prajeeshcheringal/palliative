<?php

namespace App\Http\Controllers\general;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\general\Medicine;
use Yajra\DataTables\DataTables;

class MedicineController extends Controller
{

    function listall(Request $request)
    {
        if ($request->ajax()) {

            $data = Medicine::latest()->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $message = "'Do you want to delete'";
                    $btn = '<a   href="medicine/view/' . $data->id . '"  class="btn btn-info" style="margin:px">  <i class="fa fa-eye"></i></span></a>';
                    $btn .= '<a href="medicine/create/' . $data->id . '" class="btn btn-success" style="margin:1px"><span><i class="fa fa-edit"></i></span></a>';
                    $btn .= '<a href="medicine/delete/' . $data->id . '" class="btn btn-danger" onclick="return confirm(' . $message . ')" style="margin:1px"><span><i class="fa fa-remove"></i></span></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('general/list_medicines');
    }


    function create($id = 0)
    {
        $data['id'] = $id;
        $data['view'] = "create";
        if ($id > 0) {
            $data['Medicine'] = Medicine::where('id', $id)->first();
            $data['view'] = "update";
        }

        return view('general.create_medicine', $data);
    }

    function view($id = 0)
    {

        $data['id'] = $id;
        $data['Medicine'] = Medicine::where('id', $id)->first();

        $data['view'] = "view";

        return view('general.create_medicine', $data);
    }

    function save(Request $request)
    {
        try {
            if (!$request->id) {

                $id = Medicine::create($request->all())->id;
            } else {

                $id = $request->id;
                Medicine::find($id)->update($request->all());
            }

            return redirect('medicines')->with('Success', 'Saved Successfully');
        } catch (\Exception $e) {

            return redirect('medicines')->with('Error', 'Oops Something Went Wrong');
        }
    }

    public function delete($id)
    {
        try {
            Medicine::find($id)->delete();
            return redirect('medicines')->with('Success', 'Deleted Successfully');
        } catch (\Exception $e) {
            return redirect('medicines')->with('Error', 'Oops Something Went Wrong');
        }
    }
}
