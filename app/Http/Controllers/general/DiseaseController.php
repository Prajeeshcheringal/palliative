<?php

namespace App\Http\Controllers\general;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\general\Disease;
use Yajra\DataTables\DataTables;

class DiseaseController extends Controller
{

    function listall(Request $request)
    {
        if ($request->isMethod('post')) {

            $data = Disease::latest()->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $message = "'Do you want to delete'";
                    $btn = '<a   href="disease/view/' . $data->id . '"  class="btn btn-info ajax-link" style="margin:px">  <i class="fa fa-eye"></i></span></a>';
                    $btn .= '<a href="disease/create/' . $data->id . '" class="btn btn-success ajax-link" style="margin:1px"><span><i class="fa fa-edit"></i></span></a>';
                    // $btn .= '<a href="disease/delete/' . $data->id . '" class="btn btn-danger delete"  style="margin:1px"><span><i class="fa fa-remove"></i></span></a>';
                    return $btn;    
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('general/list_disease');
    }


    function create($id = 0)
    {
        $data['id'] = $id;
        $data['view'] = "create";
        if ($id > 0) {
            $data['Disease'] = Disease::where('id', $id)->first();
            $data['view'] = "update";
        }

        return view('general.create_disease', $data);
    }

    function view($id = 0)
    {

        $data['id'] = $id;
        $data['Disease'] = Disease::where('id', $id)->first();

        $data['view'] = "view";

        return view('general.create_disease', $data);
    }

    function save(Request $request)
    {
        try {
            if (!$request->id) {

                $id = Disease::create($request->all())->id;
            } else {

                $id = $request->id;
                Disease::find($id)->update($request->all());
            }

            return redirect('diseases')->with('Success', 'Saved Successfully');
        } catch (\Exception $e) {

            return redirect('diseases')->with('Error', 'Oops Something Went Wrong');
        }
    }

    public function delete($id)
    {
        try {
            Disease::find($id)->delete();
            return redirect('diseases')->with('Success', 'Deleted Successfully');
        } catch (\Exception $e) {
            return redirect('diseases')->with('Error', 'Oops Something Went Wrong');
        }
    }
}
