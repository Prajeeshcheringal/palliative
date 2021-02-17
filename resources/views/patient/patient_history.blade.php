@extends('layouts.app')

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title"><b>{{ ucfirst($view) }} Patient:</b></h3>
        <a href="{{ url('/') }}/patients" class="pull-right btn btn-success"> <i class="fa fa-arrow-left"></i></a>

    </div>
    <!-- /.box-header -->
    <div class="box-body" style="padding-left: 20px; padding-bottom: 35px">

        <div class="row">
            <div class="col-md-12">
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">Patient Details</a></li>
                        <li><a href="#tab_2" data-toggle="tab">Treatment History</a></li>
                        <!-- <li><a href="#tab_3" data-toggle="tab">Tab 3</a></li> -->

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1"><br>


                            <form action="{{ url('/patient/save') }}" method="POST">
                                <div id="patient_details">
                                    <div class="box">
                                        <!-- <div class="box-header">
                                            <h3 class="box-title"><b>{{ ucfirst($view) }} Patient:</b></h3>
                                            <a href="{{ url('/') }}/patients" class="pull-right btn btn-success"> <i class="fa fa-arrow-left"></i></a>

                                        </div> -->
                                        <!-- /.box-header -->
                                        <div class="box-body" style="padding-left: 20px; padding-bottom: 35px">


                                            <div class="row">

                                                <div class="col-sm-6">

                                                    <div class="row">

                                                        <div class="col-sm-3"> <label>Reg no :</label></div>
                                                        <div class="col-sm-3">
                                                            <input type="hidden" name="id" id="id" class="form-control" value="{{ $patient->id ?? '' }}">
                                                            <input type="text" name="reg_no" id="reg_no" class=" form-control input-sm" @if($view=='create' ) value="{{$reg_no}}" @endif value="{{ $patient->reg_no ?? '' }}" placeholder="Enter ..." required readonly>

                                                        </div>
                                                        <div> <label class="col-sm-1"> Date</label></div>
                                                        <div class="col-sm-4">
                                                            <input type="date" name="date" id="date" class=" form-control input-sm" @if($view=='create' ) value="{{date('Y-m-d')}}" @endif value="{{ $patient->date ?? '' }}" placeholder="Enter ..." required>
                                                        </div>

                                                        <div style="padding-top: 20px;" class="col-sm-3"> <label>Name :</label></div>
                                                        <div style="padding-top: 20px;" class="col-sm-8">
                                                            <input type="text" name="name" id="name" class="form-control input-sm" value="{{ $patient->name ?? '' }}" placeholder="Enter ..." required maxlength="40">
                                                        </div>

                                                        <div style="padding-top: 20px;" class="col-sm-3"> <label>Age :</label></div>
                                                        <div style="padding-top: 20px;" class="col-sm-8">
                                                            <input type="number" name="age" id="age" class="form-control input-sm " value="{{ $patient->age ?? '' }}" placeholder="Enter ..." required maxlength="3">
                                                        </div>

                                                        <div style="padding-top: 20px;" class="col-sm-3"> <label>Phone :</label></div>
                                                        <div style="padding-top: 20px;" class="col-sm-8">
                                                            <input type="number" name="phone" id="phone" value="{{ $patient->phone ?? '' }}" class="form-control input-sm" placeholder="Enter ..." required minlength="10" maxlength="10">
                                                        </div>
                                                        <div style="padding-top: 20px;" class="col-sm-3"> <label>Care of :</label></div>
                                                        <div style="padding-top: 20px;" class="col-sm-2">
                                                            <select type="text" name="care_of_relation" id="care_of" class="form-control input-sm" required>
                                                                <option value="">Select</option>
                                                                <option value="W/O">W/O</option>
                                                                <option value="H/O">H/O</option>
                                                                <option value="S/O">S/O</option>
                                                                <option value="D/O">D/O</option>
                                                                <option value="F/O">F/O</option>
                                                                <option value="M/O">M/O</option>
                                                            </select>
                                                        </div>
                                                        <div style="padding-top: 20px;" class="col-sm-6">
                                                            <input type="text" name="care_of" value="{{ $patient->care_of ?? '' }}" class="form-control input-sm" placeholder="Enter ..." required maxlength="40">
                                                        </div>
                                                        <div style="padding-top: 20px;" class="col-sm-3"> <label>Disease :</label></div>
                                                        <div style="padding-top: 20px;" class="col-sm-8">
                                                            <select type="text" name="pat_disease" id="pat_disease" class="form-control input-sm" required>
                                                                <option value="">Select</option>
                                                                @foreach ($diseases as $disease)

                                                                <option value="{{ $disease->id}}">{{$disease->disease}}</option>
                                                                @endforeach



                                                            </select>
                                                        </div>
                                                        <div style="padding-top: 20px;" class="col-sm-3"> <label>Address :</label></div>
                                                        <div style="padding-top: 20px;" class="col-sm-8">
                                                            <textarea type="text" name="address" id="address" class="form-control input-sm" placeholder="Enter ..." required>{{ $patient->address ?? '' }}</textarea>
                                                        </div>



                                                    </div>
                                                </div>

                                                <div class="col-sm-6">

                                                    <div class="row">

                                                        <div class="col-sm-3"> <label>Reg Type :</label></div>
                                                        <div class="col-sm-8">
                                                            <select name="reg_type" id="reg_type" class=" form-control input-sm" required>
                                                                <option value="">Select</option>
                                                                <option value="Permanent">Permanent</option>
                                                                <option value="Temperory">Temperory</option>
                                                            </select>
                                                        </div>


                                                        <div style="padding-top: 20px;" class="col-sm-3"> <label>Financial :</label></div>
                                                        <div class="col-sm-8" style="padding-top: 20px;">

                                                            <select name="financial_status" id="financial_status" class=" form-control input-sm" required>
                                                                <option value="">Select</option>
                                                                <option value="Very Poor">Very Poor</option>
                                                                <option value="Poor">Poor</option>
                                                                <option value="Middle Class">Middle Class</option>
                                                                <option value="Wealthy">Wealthy</option>
                                                            </select>
                                                        </div>

                                                        <!-- <div style="padding-top: 20px;" class="col-sm-3"> <label>Organization</label></div>
                                <div style="padding-top: 20px;" class="col-sm-8">
                                    <input type="text" name="organization" id="organization"
                                        value="{{ $patient->organization ?? '' }}" class="form-control input-sm"
                                        placeholder="Enter ...">
                                </div> -->


                                                        <div style="padding-top: 20px;" class="col-sm-3"> <label> Category:</label></div>
                                                        <div class="col-sm-8" style="padding-top: 20px;">
                                                            <select name="category" id="category" class=" form-control input-sm" required>
                                                                <option value="">Select</option>
                                                                <option value="SC">SC</option>
                                                                <option value="ST">ST</option>
                                                                <option value="OEC">OEC</option>
                                                                <option value="OBC">OBC</option>
                                                                <option value="General">General</option>
                                                            </select>
                                                        </div>


                                                        <div style="padding-top: 20px;" class="col-sm-3"> <label>Panchayath</label></div>
                                                        <div style="padding-top: 20px;" class="col-sm-8">
                                                            <input type="text" name="panchayath" id="panchayath" value="{{ $patient->panchayath ?? '' }}" class="form-control input-sm " placeholder="Enter ..." required>
                                                        </div>

                                                        <div style="padding-top: 20px;" class="col-sm-3"> <label>Pincode :</label></div>
                                                        <div style="padding-top: 20px;" class="col-sm-8">
                                                            <input type="number" name="pincode" id="pincode" value="{{ $patient->pincode ?? '' }}" class="form-control input-sm" placeholder="Enter ..." required>
                                                        </div>
                                                        <div style="padding-top: 20px;" class="col-sm-3"> <label>Volunteer :</label></div>
                                                        <div style="padding-top: 20px;" class="col-sm-8">
                                                            <input type="text" name="volunteer" id="volunteer" value="{{ $patient->volunteer ?? '' }}" class="form-control input-sm" placeholder="Enter ...">
                                                        </div>

                                                        <div style="padding-top: 20px;" class="col-sm-3"> <label>Location :</label></div>
                                                        <div style="padding-top: 20px;" class="col-sm-8">
                                                            <textarea type="text" name="location" id="location" class="form-control input-sm" placeholder="Enter ..." required>{{ $patient->location ?? '' }}</textarea>
                                                        </div>

                                                        {{-- <div style="padding-top: 20px;" class="col-sm-3">
                                    <label>Financial Status:</label></div>
                                <div style="padding-top: 20px;" class="col-sm-8">
                                    <div class="form-group">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="body_cleaning"
                                                     value="1" >very Poor
                                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <label>
                                                <input type="radio" name="body_cleaning"
                                                     value="0">
                                                Poor 
                                             </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                             <label>
                                                <input type="radio" name="body_cleaning"
                                                     value="0"  checked>
                                                Middle Class 
                                             </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                              <label>
                                                <input type="radio" name="body_cleaning"
                                                     value="0"  >
                                                Wealthy 
                                             </label>
                                        </div>

                                    </div>
                                </div> --}}

                                                    </div>
                                                </div>



                                            </div>

                                        </div>
                                        <!-- /.box-body -->


                                        <div box-footer>

                                        </div>
                                    </div>
                                </div>

                                <div id="family_details">
                                    <div class="box">
                                        <div class="box-header">
                                            <h3 class="box-title"> <b>Disease Details :</b></h3>

                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body" style="padding-left: 20px; padding-bottom: 35px">
                                            <label for="">Patient Difficulties :</label>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="dificulty[]">
                                                                വേദന
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="dificulty[]">
                                                                ഓക്കാനം
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="dificulty[]">
                                                                ഛർദ്ദി
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="dificulty[]">
                                                                ഭക്ഷണം ഇറക്കാനുള്ള ബുദ്ധിമുട്ട് </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="dificulty[]">
                                                                ചുമ
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="dificulty[]">
                                                                സംസാരിക്കുവാനുള്ള ബുദ്ധിമുട്ട്
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="dificulty[]">
                                                                വിശപ്പില്ലായമ
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="dificulty[]">
                                                                മലബന്ധം
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="dificulty[]">
                                                                വയർ / നെഞ്ച് എരിച്ചിൽ
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="dificulty[]">
                                                                മൂത്രസംബന്ധമായ ബുദ്ധിമുട്ടുകൾ
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="dificulty[]">
                                                                ശ്വാസം മുട്ട്
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="dificulty[]">
                                                                വായിൽ വരൾച്ച / പുണ്ണ്
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="dificulty[]">
                                                                ഉറക്കമില്ലായ്മ
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="dificulty[]">
                                                                മയക്കം
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="dificulty[]">
                                                                പിച്ചും പേയും പറച്ചിൽ
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="dificulty[]">
                                                                വിക്കം / മുഴ
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="dificulty[]">
                                                                നീർ
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="dificulty[]">
                                                                മറ്റുള്ളവ
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <br>
                                            <hr style="border-top: 2px solid rgb(219, 215, 226); ">
                                            <div class="row" style="margin-top:50px;margin-bottom:100px;">

                                                <div class="col-sm-6">
                                                    <label for="">Body Chart :</label>

                                                    <table id="bodychart" style="margin-top: 20px;" class="table table-bordered table-striped table-sm">
                                                        <thead>
                                                            <tr>
                                                                <th>Body Parts</th>
                                                                <th clas="col-sm-3">Side</th>
                                                                <th>Grade</th>
                                                                <th></th>

                                                            </tr>

                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <input type="text" class="form-control" placeholder="Part" id="body_part">
                                                                </td>
                                                                <td>
                                                                    <select class="form-control" placeholder="Side" id="side">

                                                                        <option value="">Select</option>
                                                                        <option value="Front-Left">Front-Left</option>
                                                                        <option value="Front-Right">Front-Righ</option>
                                                                        <option value="Back-Left">Back-Left</option>
                                                                        <option value="Back-Right">Back-Right</option>

                                                                    </select>

                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" placeholder="Grade" id="grade">

                                                                </td>
                                                                <td><a id="addmore1" class="btn btn-success form-control"><i class="fa fa-plus"></i></a></td>
                                                            </tr>
                                                        </tbody>

                                                    </table>

                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="">Family Tree :</label>


                                                    <table id="familytree" style="margin-top: 20px;" class="table table-bordered table-striped">

                                                        <thead>
                                                            <tr>
                                                                <th class="col-sm-2">Sl no</th>
                                                                <th>Name </th>
                                                                <th>Relation</th>
                                                                <th></th>
                                                            </tr>

                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <input type="text" class="form-control" placeholder="Sl No">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" id="family_tree_name" placeholder="Name">

                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" id="family_tree_relation" placeholder="Relation">

                                                                </td>
                                                                <td><a class="btn btn-success form-control " id="addmore2"><i class="fa fa-plus"></i></a></td>
                                                            </tr>
                                                        </tbody>

                                                    </table>

                                                </div>

                                            </div>
                                            <hr style="border-top: 2px solid  rgb(219, 215, 226);">
                                            <div style="padding:15px;">
                                                <div class="row" style="margin-top:50px;margin-bottom:40px;">
                                                    <div class="col-sm-12">

                                                        <label for="">Family Members :</label>

                                                        <table id="family_members" style="margin-top: 20px;" class="table table-bordered table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th class="col-sm-2">Name </th>
                                                                    <th>Relation</th>
                                                                    <th class="col-sm-1">Age</th>
                                                                    <th>Education</th>
                                                                    <th>Married</th>
                                                                    <th>Job</th>
                                                                    <th class="col-sm-1">Student</th>
                                                                    <th></th>

                                                                </tr>

                                                            </thead>
                                                            <tbody>
                                                                <tr>

                                                                    <td>
                                                                        <div><input type="text" class="form-control" id="family_name" placeholder="Name" />
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div><input type="text" class="form-control" id="family_relation" placeholder="Relation" />
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div><input type="number" class="form-control" id="family_age" placeholder="Age" />
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div><input type="text" class="form-control" id="family_education" placeholder="Education" />
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div><Select type="text" class="form-control" id="family_married" placeholder="Married">
                                                                                <option value="">Select</option>
                                                                                <option value="Married">Married</option>
                                                                                <option value="Married">Unmarried</option>
                                                                                <option value="Married">Divorced</option>
                                                                                <option value="Widow">Widow/Widower</option>


                                                                            </Select>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div><input type="text" class="form-control" id="family_job" placeholder="Job" />
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div><select type="text" class="form-control" id="is_student">
                                                                                <option value="No">No</option>
                                                                                <option value="Yes">Yes</option>

                                                                            </select>
                                                                        </div>
                                                                    </td>
                                                                    {{-- <td>
                                                <div><input type="text" class="form-control" id="family_remark" placeholder="Remark"/>
                                                </div>
                                            </td> --}}


                                                                    <td><a class="btn btn-success form-control " id="addmore3"><i class="fa fa-plus"></i></a></td>
                                                                </tr>
                                                            </tbody>

                                                        </table>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="box" style="margin-top: 10px">
                                    <div class="box-header">
                                        <h3 class="box-title"><b>Other Details :</b></h3>

                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body" style="padding-left:20px; padding-bottom: 35px">

                                        <div style="padding: 10px;">
                                            <div class="row">

                                                <div class="col-sm-6">

                                                    <div class="row">

                                                        <div> <label>Need of food/dress/travel expense/other details :</label></div>
                                                        <div style="margin-top: 10px;margin-bottom: 20px" class="col-sm-12">
                                                            <textarea type="text" name="need_food" class="form-control" placeholder="Enter ...">{{ $patientotherdetail->need_food ?? '' }}</textarea>
                                                        </div>

                                                        <div> <label>Patients assumption about disease and treatment :</label></div>
                                                        <div style="margin-top: 10px;margin-bottom: 20px" class="col-sm-12">
                                                            <textarea type="text" name="patient_assumptiom" class="form-control" placeholder="Enter ...">{{ $patientotherdetail->patient_assumptiom ?? '' }}
                                                            </textarea>
                                                        </div><br>

                                                        <div class=""> <label>Patients social/mental/sperictual problems :</label></div>
                                                        <div style="margin-top: 10px;margin-bottom: 20px" class="col-sm-12">
                                                            <textarea type="text" name="patient_social" class="form-control" placeholder="Enter ...">{{ $patientotherdetail->patient_social ?? '' }} </textarea>
                                                        </div>

                                                        {{-- <div class=""> <label>Relatives assumption about disease
                                        an treatment :</label></div>
                                <div style="margin-top: 10px;margin-bottom: 20px" class="col-sm-12">
                                    <textarea type="text" name="address" id="address" class="form-control"
                                        placeholder="Enter ..."> </textarea>
                                </div>

                                <div class=""> <label>Report of person Interacted with patient :</label></div>
                                <div style="margin-top: 10px;margin-bottom: 20px" class="col-sm-12">
                                    <textarea type="text" name="address" id="address" class="form-control"
                                        placeholder="Enter ..."> </textarea>
                                </div> --}}



                                                    </div>
                                                </div>

                                                <div class="col-sm-6">

                                                    <div class="row">

                                                        <div class=""> <label>Report of person Interacted with patient :</label></div>
                                                        <div style="margin-top: 10px;margin-bottom: 20px" class="col-sm-12">
                                                            <textarea type="text" name="report_of_person" class="form-control" placeholder="Enter ...">{{ $patientotherdetail->report_of_person ?? '' }}
                                                            </textarea>
                                                        </div>

                                                        <div class=""> <label>Relatives assumption about disease and treatment :</label></div>
                                                        <div style="margin-top: 10px;margin-bottom: 20px" class="col-sm-12">
                                                            <textarea type="text" name="relative_assumption" class="form-control" placeholder="Enter ...">{{ $patientotherdetail->relative_assumption ?? '' }}
                                                            </textarea>
                                                        </div>
                                                        {{--
                                <div style="padding-top: 20px;" class=""> <label>Address :</label></div>
                                <div style="padding-top: 20px;" class="col-sm-12">
                                    <textarea type="text" name="address" id="address" class="form-control"
                                        placeholder="Enter ..."> </textarea>
                                </div>

                                <div style="padding-top: 20px;" class=""> <label>Address :</label></div>
                                <div style="padding-top: 20px;" class="col-sm-12">
                                    <textarea type="text" name="address" id="address" class="form-control"
                                        placeholder="Enter ..."> </textarea>
                                </div>

                                <div style="padding-top: 20px;" class=""> <label>Address :</label></div>
                                <div style="padding-top: 20px;" class="col-sm-12">
                                    <textarea type="text" name="address" id="address" class="form-control"
                                        placeholder="Enter ..."> </textarea>
                                </div>
                                --}}


                                                    </div>
                                                </div>



                                            </div>
                                        </div>
                                        <hr style="border-top: 2px solid rgb(219, 215, 226); ">
                                        @if ($view != 'view')
                                        <button type="submit" class="btn btn-lg btn-info pull-right" style="margin-right: 20px">Save</button>
                                        @endif
                                    </div>

                                    <!-- /.box-body -->


                                    <div box-footer>
                                    </div>
                                </div>

                            </form>

                        </div>




                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2">
                            <div class="box-body" style="margin-top: 15px;margin-bottom:50px;">


                                <!-- /.box-header -->
                                <div class="box-body">
                                <div class="col-md-1"></div>

                                    <div class="col-md-10">
                                        <div class="box-group" id="accordion">
                                            @foreach($prev_bookings as $prev_book)

                                            <div class="panel box box-">
                                                <div class="box-header with-border">
                                                    <h4 class="box-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne{{ $prev_book->id }}">
                                                            {{ $prev_book->date }} &nbsp;&nbsp; &nbsp; &nbsp; [ {{ucfirst( $prev_book->bok_type) }} ]

                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne{{ $prev_book->id }}" class="panel-collapse collapse">
                                                    <div class="box-body"> <br>

                                                        <strong>Disease Details :</strong>{{$prev_book->disease_details}} <br><br>

                                                        <strong>Doctor's Note :</strong> {{$prev_book->doctors_note}}<br><br>
                                                        <strong> Mental & Sperictual :</strong> {{$prev_book->mental_note}} <br><br>

                                                        <strong> Prescription :</strong> <br><br>
                                                        <table class="table table-bordered table-stripped" style="margin-left: 115px; margin-right:30px ; width: 70%">
                                                            <thead>
                                                                <th>Medicine</th>
                                                                <th>Dose</th>
                                                                <th>Purpose</th>

                                                            </thead>
                                                            <tbody>
                                                                @foreach($prev_prescriptions as $prev_presc)

                                                                @if($prev_presc->bok_id ==$prev_book->id )
                                                                <tr>
                                                                    <td>{{$prev_presc->medicine}}</td>
                                                                    <td>{{$prev_presc->dose }}</td>
                                                                    <td>{{$prev_presc->purpose}}</td>
                                                                </tr>

                                                                @endif
                                                                @endforeach
                                                            </tbody>

                                                        </table><br><br>
                                                        @if($prev_book->bok_type == 'home')

                                                        <strong> Team Members :</strong> <br><br>
                                                        <table class="table table-bordered table-stripped" style="margin-left: 115px;     width: 70%">
                                                            <thead>
                                                                <th>Name</th>
                                                                <th>Role</th>
                                                                <th>Contact No</th>


                                                            </thead>
                                                            <tbody>
                                                                @foreach($prev_team_members as $prev_team)

                                                                @if($prev_team->bok_id ==$prev_book->id )
                                                                <tr>
                                                                    <td>{{$prev_team->team_name}}</td>
                                                                    <td>{{$prev_team->role }}</td>
                                                                    <td>{{$prev_team->contact_no}}</td>

                                                                </tr>

                                                                @endif
                                                                @endforeach
                                                            </tbody>

                                                        </table><br><br>
                                                        @endif
                                                        <strong> Primary Data :</strong> <br><br><br>

                                                        <div class="row">

                                                            <div class="col-sm-6">

                                                                <div class="row">

                                                                    <div class="col-sm-4"> <label>BP (mmHg) :</label></div>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" readonly class="form-control" value="{{ $prev_book->bp ?? '' }}" placeholder="Enter ..." required>
                                                                    </div>


                                                                    <div style="padding-top: 20px;" class="col-sm-4">
                                                                        <label>Temperature:</label>
                                                                    </div>
                                                                    <div style="padding-top: 20px;" class="col-sm-8">
                                                                        <input type="text" readonly class="form-control" value="{{ $prev_book->tempreture ?? '' }}" placeholder="Enter ..." required maxlength="40">
                                                                    </div>

                                                                    <div style="padding-top: 20px;" class="col-sm-4"> <label>General State:
                                                                        </label></div>
                                                                    <div style="padding-top: 20px;" class="col-sm-8">
                                                                        <textarea type="text" readonly class="form-control" placeholder="പൊതു അവസ്ഥ " required>{{$prev_book->general_state ?? '' }}</textarea>

                                                                    </div>


                                                                    <div style="padding-top: 20px;" class="col-sm-4"> <label>Surroundings
                                                                            :
                                                                        </label></div>
                                                                    <div style="padding-top: 20px;" class="col-sm-8">
                                                                        <textarea type="text" readonly class="form-control" placeholder="പരിസര ശുചിത്വം" required>{{ $prev_book->surroundings ?? '' }}</textarea>

                                                                    </div>
                                                                    <div style="padding-top: 20px;" class="col-sm-4"> <label>Skin/Nail :
                                                                        </label></div>
                                                                    <div style="padding-top: 20px;" class="col-sm-8">
                                                                        <textarea type="text" class="form-control" readonly placeholder="തൊലി / നഖം" required>{{ $prev_book->skin ?? '' }}</textarea>

                                                                    </div>
                                                                    <div style="padding-top: 20px;" class="col-sm-4"> <label>Head /Hair :
                                                                        </label>
                                                                    </div>
                                                                    <div style="padding-top: 20px;" class="col-sm-8">
                                                                        <textarea type="text" class="form-control" readonly placeholder="തല /മുടി" required>{{ $prev_book->head ?? '' }}</textarea>

                                                                    </div>



                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">

                                                                <div class="row">

                                                                    <div class="col-sm-4"> <label>Pulse (bpm):</label></div>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" readonly class="form-control" value="{{ $prev_book->pulse ?? '' }}" placeholder="Enter ...">
                                                                    </div>

                                                                    <div style="padding-top: 20px;" class="col-sm-4"> <label>Hobbies
                                                                            :</label></div>
                                                                    <div style="padding-top: 20px;" class="col-sm-8">
                                                                        <input type="text" readonly class="form-control" value="{{ $prev_book->hobbies ?? '' }}" placeholder="സമയ വിനയോഗം " required maxlength="40">
                                                                    </div>



                                                                    <div style="padding-top: 20px;" class="col-sm-4"> <label>Mouth : </label>
                                                                    </div>
                                                                    <div style="padding-top: 20px;" class="col-sm-8">
                                                                        <textarea placeholder="വായ " readonly type="text" class="form-control">{{ $prev_book->mouth ?? ''}}</textarea>

                                                                    </div>

                                                                    <div style="padding-top: 20px;" class="col-sm-4"> <label>Sex :
                                                                        </label>
                                                                    </div>
                                                                    <div style="padding-top: 20px;" class="col-sm-8">
                                                                        <textarea type="text" readonly class="form-control" placeholder="പെരിനിയം" required>{{ $prev_book->sex ?? '' }}</textarea>

                                                                    </div>

                                                                    <div style="padding-top: 20px;" class="col-sm-4"> <label>Hidden Area :
                                                                        </label>
                                                                    </div>
                                                                    <div style="padding-top: 20px;" class="col-sm-8">
                                                                        <textarea type="text" readonly class="form-control" placeholder="ഹിഡൻ ഏരിയകൾ" required>{{ $prev_book->hidden_area ?? '' }}</textarea>

                                                                    </div>
                                                                    <div style="padding-top: 20px;" class="col-sm-4"> <label>Other Treatment
                                                                            : </label>
                                                                    </div>
                                                                    <div style="padding-top: 20px;" class="col-sm-8">
                                                                        <textarea type="text" readonly class="form-control" placeholder="മറ്റ് ചികിത്സാ രീതികൾ" required>{{ $prev_book->other_treatment ?? '' }}</textarea>

                                                                    </div>


                                                                </div>

                                                            </div>
                                                            <hr>
                                                            <!-- /.box-body -->
                                                        </div><br><br>

                                                        <strong> Other Data :</strong> <br><br>


                                                        <div class="row">

                                                            <div class="col-sm-6">

                                                                <div class="row">
                                                                    <div style="padding-top: 20px;" class="col-sm-4">
                                                                        <label>ആഹാരം :</label>
                                                                    </div>
                                                                    <div style="padding-top: 20px;" class="col-sm-8">
                                                                        <div class="form-group">
                                                                            <div class="radio">
                                                                                <label>
                                                                                    <input type="radio" name="foods{{$prev_book->id}}" readonly checked>
                                                                                    കൃത്യമായി കഴിക്കുന്നുണ്ട്
                                                                                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                <label>
                                                                                    <input type="radio" name="foods{{$prev_book->id}}" readonly @if($prev_book->food == 0) checked @endif >
                                                                                    ഇല്ല </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <div style="padding-top: 20px;" class="col-sm-4">
                                                                        <label>പാനിയം :</label>
                                                                    </div>
                                                                    <div style="padding-top: 20px;" class="col-sm-8">
                                                                        <div class="form-group">
                                                                            <div class="radio">
                                                                                <label>
                                                                                    <input type="radio" name="waters{{$prev_book->id}}" readonly checked>
                                                                                    കൃത്യമായി കഴിക്കുന്നുണ്ട്
                                                                                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                <label>
                                                                                    <input type="radio" name="waters{{$prev_book->id}}" readonly @if($prev_book->water == 0) checked @endif>
                                                                                    ഇല്ല </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <div style="padding-top: 20px;" class="col-sm-4">
                                                                        <label>മൂത്രം :</label>
                                                                    </div>
                                                                    <div style="padding-top: 20px;" class="col-sm-8">
                                                                        <div class="form-group">
                                                                            <div class="radio">
                                                                                <label>
                                                                                    <input type="radio" name="urines{{$prev_book->id}}" readonly checked>
                                                                                    കൃത്യമായി നടക്കുന്നുണ്ട്
                                                                                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                <label>
                                                                                    <input type="radio" name="urines{{$prev_book->id}}" readonly @if($prev_book->urine == 0) checked @endif>
                                                                                    ഇല്ല </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div style="padding-top: 20px;" class="col-sm-4">
                                                                        <label>ശോധന &nbsp;:</label>
                                                                    </div>
                                                                    <div style="padding-top: 20px;" class="col-sm-8">
                                                                        <div class="form-group">
                                                                            <div class="radio">
                                                                                <label>
                                                                                    <input type="radio" name="constipations{{$prev_book->id}}" checked>
                                                                                    കൃത്യമായി നടക്കുന്നുണ്ട്
                                                                                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                <label>
                                                                                    <input type="radio" name="constipations{{$prev_book->id}}" readonly @if($prev_book->constipation == 0) checked @endif >
                                                                                    ഇല്ല </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>



                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">

                                                                <div class="row">



                                                                    <div style="padding-top: 20px;" class="col-sm-4">
                                                                        <label>വ്യായാമം :</label>
                                                                    </div>
                                                                    <div style="padding-top: 20px;" class="col-sm-8">
                                                                        <div class="form-group">
                                                                            <div class="radio">
                                                                                <label>
                                                                                    <input type="radio" name="exercises{{$prev_book->id}}" readonly checked>
                                                                                    കൃത്യമായി നടക്കുന്നുണ്ട്
                                                                                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                <label>
                                                                                    <input type="radio" name="exercises{{$prev_book->id}}" readonly @if($prev_book->constipation == 0) checked @endif>
                                                                                    ഇല്ല </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <div style="padding-top: 20px;" class="col-sm-4">
                                                                        <label>ഉറക്കം &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</label>
                                                                    </div>
                                                                    <div style="padding-top: 20px;" class="col-sm-8">
                                                                        <div class="form-group">
                                                                            <div class="radio">
                                                                                <label>
                                                                                    <input type="radio" name="sleeps{{$prev_book->id}}" readonly checked>
                                                                                    ആവശിയതിനുണ്ട്
                                                                                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                                                                <label>
                                                                                    <input type="radio" name="sleeps{{$prev_book->id}}" readonly @if($prev_book->sleep == 0) checked @endif>
                                                                                    ഇല്ല </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <div style="padding-top: 20px;" class="col-sm-4">
                                                                        <label>ശരീര ശുചീകരണം :</label>
                                                                    </div>
                                                                    <div style="padding-top: 20px;" class="col-sm-8">
                                                                        <div class="form-group">
                                                                            <div class="radio">
                                                                                <label>
                                                                                    <input type="radio" name="body_cleanings{{$prev_book->id}}" checked>
                                                                                    കൃത്യമായി നടക്കുന്നുണ്ട്
                                                                                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                <label>
                                                                                    <input type="radio" name="body_cleanings{{$prev_book->id}}" @if($prev_book->body_cleaning == 0) checked @endif>
                                                                                    ഇല്ല </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                        </div>


                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="col-md-1"></div>

                                </div>

                            </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_3">

                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- nav-tabs-custom -->
            </div>
        </div>

    </div>
    <!-- /.box-body -->


    <div box-footer>

    </div>
    <script>
        $(function() {
            @if($view != 'create')

            $('#category').val('{{$patient->category}}');
            $('#pat_disease').val('{{$patient->disease}}');
            $('#financial_status').val('{{$patient->financial_status}}');
            $('#reg_type').val('{{$patient->reg_type}}');
            $('#care_of').val('{{$patient->care_of_relation}}');

            @foreach($family_tree as $family)

            family_tree('{{$family->name}}', '{{$family->relation}}')

            @endforeach

            @foreach($family_members as $member)

            family_members('{{$member->name}}', '{{$member->relation}}', '{{$member->age}}', '{{$member->education}}', '{{$member->married}}', '{{$member->job}}', '{{$member->is_student}}')

            @endforeach

            @foreach($body_parts as $parts)

            body_chart('{{$parts->body_part}}', '{{$parts->side}}', '{{$parts->grade}}');

            @endforeach
            @endif


            $('#addmore1').click(function() {

                var body_part = $('#body_part').val();
                var side = $('#side').val();
                var grade = $('#grade').val();

                if (body_part && side && grade) {

                    body_chart(body_part, side, grade);
                    $('#body_part').val('');
                    $('#side').val('');
                    $('#grade').val('');
                }

            })


            $('#addmore2').click(function() {

                var family_tree_name = $('#family_tree_name').val();
                var family_tree_relation = $('#family_tree_relation').val();
                if (family_tree_name && family_tree_relation) {


                    family_tree(family_tree_name, family_tree_relation);

                    $('#family_tree_name').val('');
                    $('#family_tree_relation').val('');
                }

            })

            $('#addmore3').click(function() {


                var family_name = $('#family_name').val();
                var family_relation = $('#family_relation').val();
                var family_age = $('#family_age').val();
                var family_education = $('#family_education').val();
                var family_married = $('#family_married').val();
                var family_job = $('#family_job').val();
                var is_student = $('#is_student').val();
                // var family_remark = $('#family_remark').val();

                if (family_name && family_relation && family_age && family_education) {

                    family_members(family_name, family_relation, family_age, family_education, family_married, family_job, is_student);

                    $('#family_name').val('');
                    $('#family_relation').val('');
                    $('#family_age').val('');
                    $('#family_education').val('');
                    $('#family_married').val('');
                    $('#family_job').val('');
                    $('#is_student').val('No');
                    //$('#family_remark').val('');
                }

            })




            $(document).on('click', '.rmbody', function() {

                $(this).closest('tr').remove();
            });

            $(document).on('click', '.rmtree', function() {

                $(this).closest('tr').remove();
            });

            $(document).on('click', '.rmmembers', function() {

                $(this).closest('tr').remove();
            });

        })

        function family_tree(name, relation) {

            var new_row = '<tr><td><input type="text" class="form-control"></td>' +
                '<td><input type="text" class="form-control" value="' + name + '" name="tree_name[]"> </td><td> <input type="text"  class="form-control" value="' + relation + '" name="tree_relation[]"> </td>' +
                ' <td><a id="" class="btn btn-danger form-control rmtree"><i class="fa fa-remove"></i></a></td> </tr>';

            $('#familytree').append(new_row);

        }

        function family_members(name, relation, age, education, married, job, is_student) {

            var new_row =
                '<tr> <td> <div><input type="text" value="' + name + '" class="form-control" name="member_name[]"/> </div> </td>' +
                '<td><div><input type="text" value="' + relation + '" class="form-control" name="relation[]"/> </div></td>' +
                '<td> <div><input type="number" value="' + age + '" class="form-control" name="relation_age[]"/> </div> </td>' +
                '<td><div><input type="text" value="' + education + '" class="form-control" name="education[]" /></div> </td>' +
                ' <td><div><input type="text" value="' + married + '" class="form-control" name="marriage_status[]"/> </div></td>' +
                ' <td> <div><input type="text" value="' + job + '" class="form-control" name="job[]"/> </div></td>' +
                '<td><div><input type="text" value="' + is_student + '" class="form-control"  name="is_student[]" readonly /></div></td>' +
                // '<td><div><input type="text" value="'+remark+'" class="form-control" name="remark[]" /></div></td>' +
                ' <td><a class="btn btn-danger form-control rmmembers"><i class="fa fa-remove"></i></a></td>/tr>';

            $('#family_members').append(new_row);

        }

        function body_chart(body_part, side, grade) {

            var new_row = '<tr><td><input type="text" value="' + body_part + '" class="form-control" name="body_part[]"></td>' +
                '<td><input type="text" class="form-control" value="' + side + '" name="side[]" required> </td><td> ' +
                '<input type="text"  class="form-control" value="' + grade + '" name="grade[]"required> </td>' +
                ' <td><a id="" class="btn btn-danger form-control rmbody"><i class="fa fa-remove"></i></a></td> </tr>';

            $('#bodychart').append(new_row);
        }
    </script>







    @endsection