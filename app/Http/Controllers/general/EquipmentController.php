<?php

namespace App\Http\Controllers\general;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\general\Equipment;
use Yajra\DataTables\DataTables;

class EquipmentController extends Controller
{
    

    function listall(Request $request)
    {
        if ($request->isMethod('post')) {

            $data = Equipment::latest()->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $message = "'Do you want to delete'";
                    $btn = '<a   href="equipment/view/' . $data->id . '"  class="btn btn-info ajax-link" style="margin:px">  <i class="fa fa-eye"></i></span></a>';
                    $btn .= '<a href="equipment/create/' . $data->id . '" class="btn btn-success ajax-link" style="margin:1px"><span><i class="fa fa-edit"></i></span></a>';
                    // $btn .= '<a href="equipment/delete/' . $data->id . '" class="btn btn-danger" onclick="return confirm(' . $message . ')" style="margin:1px"><span><i class="fa fa-remove"></i></span></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('general/list_equipments');
    }


    function create($id = 0)
    {
        $data['id'] = $id;
        $data['view'] = "create";
        if ($id > 0) {
            $data['Equipment'] = Equipment::where('id', $id)->first();
            $data['view'] = "update";
        }

        return view('general.create_equipments', $data);
    }

    function view($id = 0)
    {

        $data['id'] = $id;
        $data['Equipment'] = Equipment::where('id', $id)->first();

        $data['view'] = "view";

        return view('general.create_equipments', $data);
    }

    function save(Request $request)
    {
        try {
            if (!$request->id) {

                $id = Equipment::create($request->all())->id;
            } else {

                $id = $request->id;
                Equipment::find($id)->update($request->all());
            }

            return redirect('equipments')->with('Success', 'Saved Successfully');
        } catch (\Exception $e) {

            return redirect('equipments')->with('Error', 'Oops Something Went Wrong');
        }
    }

    public function delete($id)
    {
        try {
            Equipment::find($id)->delete();
            return redirect('equipments')->with('Success', 'Deleted Successfully');
        } catch (\Exception $e) {
            return redirect('equipments')->with('Error', 'Oops Something Went Wrong');
        }
    }
}
