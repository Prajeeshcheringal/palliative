

    <form action="{{ url('/patient/save') }}" back="{{ url('/patients') }}" id="form" method="POST">
        <div id="patient_details">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><b>{{ ucfirst($view) }} Patient:</b></h3>
                    <a href="{{ url('/') }}/patients" class="pull-right btn btn-success ajax-link"> <i
                            class="fa fa-arrow-left"></i></a>

                </div>
                <!-- /.box-header -->
                <div class="box-body" style="padding-left: 20px; padding-bottom: 35px">


                    <div class="row">

                        <div class="col-sm-6">

                            <div class="row">

                                <div class="col-sm-3"> <label>Reg no :</label></div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="id" id="id" class="form-control"
                                        value="{{ $patient->id ?? '' }}">
                                    <input type="text" name="reg_no" id="reg_no" class=" form-control input-sm"

                                    @if($view == 'create') value="{{$reg_no}}" @else readonly @endif  value="{{ $patient->reg_no ?? '' }}" placeholder="Enter ..." required >

                                </div>
                                <div> <label class="col-sm-1"> Date</label></div>
                                <div class="col-sm-4">
                                    <input type="date" name="date" id="date" class=" form-control input-sm"
                                    @if($view =='create')
                                    value="" @endif   value="{{ $patient->date ?? '' }}"
                                     placeholder="Enter ..." required>
                                </div>

                                <div style="padding-top: 20px;" class="col-sm-3"> <label>Name :</label></div>
                                <div style="padding-top: 20px;" class="col-sm-8">
                                    <input type="text" name="name" id="name" class="form-control input-sm"
                                        value="{{ $patient->name ?? '' }}" placeholder="Enter ..." required maxlength="40">
                                </div>

                                <div style="padding-top: 20px;" class="col-sm-3"> <label>Age :</label></div>
                                <div style="padding-top: 20px;" class="col-sm-8">
                                    <input type="number" name="age" id="age" class="form-control input-sm "
                                        value="{{ $patient->age ?? '' }}" placeholder="Enter ..." required maxlength="3">
                                </div>

                                <div style="padding-top: 20px;" class="col-sm-3"> <label>Phone :</label></div>
                                <div style="padding-top: 20px;" class="col-sm-8">
                                    <input type="number" name="phone" id="phone" value="{{ $patient->phone ?? '' }}"
                                        class="form-control input-sm" placeholder="Enter ..." required minlength="10" maxlength="10">
                                </div>
                                <div style="padding-top: 20px;" class="col-sm-3"> <label>Care of :</label></div>
                                <div style="padding-top: 20px;" class="col-sm-2">
                                    <select type="text" name="care_of_relation"  id="care_of"
                                        class="form-control input-sm" >
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
                                    <input type="text" name="care_of" value="{{ $patient->care_of ?? '' }}"
                                        class="form-control input-sm" placeholder="Enter ..." required maxlength="40">
                                </div>
                                <div style="padding-top: 20px;" class="col-sm-3"> <label>Disease :</label></div>
                                <div style="padding-top: 20px;" class="col-sm-8">
                                    <select type="text" name="pat_disease"  id="pat_disease"
                                        class="form-control input-sm" required >
                                    <option value="">Select</option>
                                    @foreach ($diseases as $disease)

                                        <option value="{{ $disease->id}}">{{$disease->disease}}</option>
                                    @endforeach
                                        
                                
                                    
                                    </select>
                                </div>
                                <div style="padding-top: 20px;" class="col-sm-3"> <label>Address :</label></div>
                                <div style="padding-top: 20px;" class="col-sm-8">
                                    <textarea type="text" name="address" id="address" class="form-control input-sm"
                                        placeholder="Enter ..." required>{{ $patient->address ?? '' }}</textarea>
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
                             <div class="col-sm-8"  style="padding-top: 20px;">

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

                    
                                <div  style="padding-top: 20px;"  class="col-sm-3"> <label> Category:</label></div>
                                <div class="col-sm-8"  style="padding-top: 20px;">
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
                                    <input type="text" name="panchayath" id="panchayath"
                                        value="{{ $patient->panchayath ?? '' }}" class="form-control input-sm "
                                        placeholder="Enter ..." required>
                                </div>

                                <div style="padding-top: 20px;" class="col-sm-3"> <label>Pincode :</label></div>
                                <div style="padding-top: 20px;" class="col-sm-8">
                                    <input type="number" name="pincode" id="pincode" value="{{ $patient->pincode ?? '' }}"
                                        class="form-control input-sm" placeholder="Enter ..." required>
                                </div>
                                <div style="padding-top: 20px;" class="col-sm-3"> <label>Location :</label></div>
                                <div style="padding-top: 20px;" class="col-sm-8">
                                    <input type="text" name="location" id="location"
                                        value="{{ $patient->location ?? '' }}" class="form-control input-sm"
                                        placeholder="Enter ..." required>
                                </div>
                                
                                <div style="padding-top: 20px;" class="col-sm-3"> <label>Route :</label></div>
                                <div style="padding-top: 20px;" class="col-sm-8">
                                    <textarea type="text" name="route" id="route" class="form-control input-sm"
                                        placeholder="Enter ..." required>{{ $patient->route ?? '' }}</textarea>
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
                                        <input type="checkbox" value="1" @if (in_array(1, $difficulties)) checked @endif name="dificulty[]">
                                        വേദന
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="2" @if (in_array(2, $difficulties)) checked @endif name="dificulty[]">
                                        ഓക്കാനം
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="3"  @if (in_array(3, $difficulties)) checked @endif name="dificulty[]">
                                        ഛർദ്ദി
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="4"  @if (in_array(4, $difficulties)) checked @endif name="dificulty[]">
                                        ഭക്ഷണം ഇറക്കാനുള്ള ബുദ്ധിമുട്ട് </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="5"  @if (in_array(5, $difficulties)) checked @endif name="dificulty[]">
                                        ചുമ
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="6"  @if (in_array(6, $difficulties)) checked @endif name="dificulty[]">
                                        സംസാരിക്കുവാനുള്ള ബുദ്ധിമുട്ട്
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="7"  @if (in_array(7, $difficulties)) checked @endif name="dificulty[]">
                                        വിശപ്പില്ലായമ
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="8"  @if (in_array(8, $difficulties)) checked @endif name="dificulty[]">
                                        മലബന്ധം
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="9"  @if (in_array(9, $difficulties)) checked @endif name="dificulty[]">
                                        വയർ / നെഞ്ച് എരിച്ചിൽ
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="10"  @if (in_array(10, $difficulties)) checked @endif name="dificulty[]">
                                        മൂത്രസംബന്ധമായ ബുദ്ധിമുട്ടുകൾ
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"  value="11"  @if (in_array(11, $difficulties)) checked @endif  name="dificulty[]">
                                        ശ്വാസം മുട്ട്
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"  value="12"  @if (in_array(12, $difficulties)) checked @endif  name="dificulty[]">
                                        വായിൽ വരൾച്ച / പുണ്ണ്
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"  value="13"   @if (in_array(13, $difficulties)) checked @endif name="dificulty[]">
                                        ഉറക്കമില്ലായ്മ
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"  value="14"  @if (in_array(14, $difficulties)) checked @endif  name="dificulty[]">
                                        മയക്കം
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"  value="15"  @if (in_array(15, $difficulties)) checked @endif  name="dificulty[]">
                                        പിച്ചും പേയും പറച്ചിൽ
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"  value="16"   @if (in_array(16, $difficulties)) checked @endif name="dificulty[]">
                                        വിക്കം / മുഴ
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"  value="17"  @if (in_array(17, $difficulties)) checked @endif  name="dificulty[]">
                                        നീർ
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"  value="18"  @if (in_array(18, $difficulties)) checked @endif  name="dificulty[]">
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

                            <table id="bodychart" style="margin-top: 20px;"
                                class="table table-bordered table-striped table-sm">
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
                                            <select  class="form-control" placeholder="Side" id="side">

                                                <option value="">Select</option>
                                                <option value="Front-Left">Front-Left</option>
                                                <option value="Front-Right">Front-Right</option>
                                                <option value="Back-Left">Back-Left</option>
                                                <option value="Back-Right">Back-Right</option>

                                            </select>

                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="Grade" id="grade">

                                        </td>
                                        <td><a id="addmore1" class="btn btn-success form-control"><i
                                                    class="fa fa-plus"></i></a></td>
                                    </tr>
                                </tbody>

                            </table>

                        </div>
                        <div class="col-sm-6">
                            <label for="">Family Tree :</label>


                            <table id="familytree" style="margin-top: 20px;" class="table table-bordered table-striped">

                                <thead>
                                    <tr>
                                        <th>Name </th>
                                        <th>Relation</th>
                                        <th></th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <tr>
                                       
                                        <td>
                                            <input type="text" class="form-control" id="family_tree_name" placeholder="Name">

                                        </td>
                                        <td>
                                            <input type="text" class="form-control"id ="family_tree_relation" placeholder="Relation">

                                        </td>
                                        <td><a class="btn btn-success form-control " id="addmore2"><i
                                                    class="fa fa-plus"></i></a></td>
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

                                <table id="family_members" style="margin-top: 20px;"
                                    class="table table-bordered table-striped">
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
                                                <div><input type="text" class="form-control" id="family_name" placeholder="Name"/>
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
                                                    <option value="Unmarried">Unmarried</option>
                                                    <option value="Divorced">Divorced</option>
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
                                           

                                            <td><a class="btn btn-success form-control " id="addmore3"><i
                                                        class="fa fa-plus"></i></a></td>
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
                                    <textarea type="text" name="need_food" class="form-control"
                                        placeholder="Enter ...">{{ $patientotherdetail->need_food ?? '' }}</textarea>
                                </div>

                                <div> <label>Patients assumption about disease and treatment :</label></div>
                                <div style="margin-top: 10px;margin-bottom: 20px" class="col-sm-12">
                                    <textarea type="text" name="patient_assumptiom" class="form-control"
                                        placeholder="അസുഖത്തെപ്പറ്റിയും ചികിത്സയെപ്പറ്റിയും രോഗിക്കുള്ള ധാരണകള്‍">{{$patientotherdetail->patient_assumptiom ?? '' }}</textarea>
                                </div><br>

                                <div class=""> <label>Patients social/mental/sperictual problems :</label></div>
                                <div style="margin-top: 10px;margin-bottom: 20px" class="col-sm-12">
                                    <textarea type="text" name="patient_social" class="form-control"
                                        placeholder="രോഗിയുടെ മാനസിക – സാമൂഹിക – ആത്മീയ പ്രശ്നങ്ങള്‍">{{ $patientotherdetail->patient_social ?? '' }}</textarea>
                                </div>

                                 <div class=""> <label>Way of life of patient & family :</label></div>
                                <div style="margin-top: 10px;margin-bottom: 20px" class="col-sm-12">
                                    <textarea type="text" name="way_of_life" id="way_of_life" class="form-control"
                                        placeholder="രോഗിയുടെയും കുടുംബത്തിന്‍റെയും ജീവിത മാര്‍ഗ്ഗം">{{ $patientotherdetail->way_of_life ?? '' }}</textarea>
                                </div>

                                {{--
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
                                    <textarea type="text" name="report_of_person" class="form-control"
                                        placeholder="രോഗിയുമായി സംസാരിച്ച വളണ്ടിയറുടെ റിപ്പോര്‍ട്ട്">{{ $patientotherdetail->report_of_person ?? '' }}</textarea>
                                </div>

                                <div class=""> <label>Relatives assumption about disease and treatment :</label></div>
                                <div style="margin-top: 10px;margin-bottom: 20px" class="col-sm-12">
                                    <textarea type="text" name="relative_assumption" class="form-control"
                                        placeholder="അസുഖത്തെപ്പറ്റിയും ചികിത്സയെപ്പറ്റിയും ബന്ധുക്കള്‍ക്കുള്ള ധാരണകള്‍ ">{{ $patientotherdetail->relative_assumption ?? '' }}</textarea>
                                </div>
                               
                                <div  class=""> <label>Need of resettlement :</label></div>
                                <div style="margin-top: 10px;margin-bottom: 20px" class="col-sm-12">
                                    <textarea type="text" name="resettlement" id="resettlement" class="form-control"
                                        placeholder="പുനരധിവാസം ആവശ്യമെങ്കില്‍ രേഖപ്പെടുത്തുക">{{ $patientotherdetail->resettlement ?? '' }}</textarea>
                                </div>
                                <div  class=""> <label>Details  of volunteer Intracted with patient:</label></div>
                                <div style="margin-top: 10px;margin-bottom: 20px" class="col-sm-12">
                                    <textarea type="text" name="volunteer" id="volunteer" class="form-control"
                                        placeholder="രോഗിയുമായി സംസാരിച്ച വളണ്ടിയറുടെ പേര്">{{ $patientotherdetail->volunteer ?? '' }}</textarea>
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
                                --}}


                            </div>
                        </div>



                    </div>
                </div>
                <hr style="border-top: 2px solid rgb(219, 215, 226); ">
                @if ($view != 'view')
                    <button type="submit" id="save" class="btn btn-lg btn-info pull-right" style="margin-right: 20px">Save</button>
                @endif
            </div>

            <!-- /.box-body -->


            <div box-footer>
            </div>
        </div>
        </div>
    </form>
   

    <script>
        $(function() {

           

            @if($view !='create')

                $('#category').val('{{$patient->category}}');
                $('#pat_disease').val('{{$patient->disease}}');
                $('#financial_status').val('{{$patient->financial_status}}');
                $('#reg_type').val('{{$patient->reg_type}}');
                $('#care_of').val('{{$patient->care_of_relation}}');

                @foreach($family_tree  as $family)

                    family_tree('{{$family->name}}','{{$family->relation}}')

                    @endforeach

                    @foreach($family_members  as $member)

                    family_members('{{$member->name}}','{{$member->relation}}','{{$member->age}}','{{$member->education}}','{{$member->married}}','{{$member->job}}','{{$member->is_student}}')

                    @endforeach

                    @foreach($body_parts  as $parts)

                              body_chart('{{$parts->body_part}}','{{$parts->side}}','{{$parts->grade}}');

                    @endforeach
            @endif


            $('#addmore1').click(function() {

                var body_part =$('#body_part').val();
                var side =$('#side').val();
                var grade =$('#grade').val();

                if(body_part && side && grade){

                    body_chart(body_part,side,grade);   
                    $('#body_part').val('');
                    $('#side').val('');
                    $('#grade').val('');
                }
                else{
                    
                    swal("Warning!", "Enter all fields", "warning");

                }

            })


            $('#addmore2').click(function() {

                var family_tree_name =$('#family_tree_name').val();
                var family_tree_relation =$('#family_tree_relation').val();
                if(family_tree_name && family_tree_relation){


                    family_tree(family_tree_name,family_tree_relation);       

                    $('#family_tree_name').val('');
                    $('#family_tree_relation').val('');
                }else{
                    
                    swal("Warning!", "Enter all fields", "warning");

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

                if(family_name && family_relation && family_age && family_education && family_married){

                    family_members(family_name,family_relation,family_age,family_education,family_married,family_job,is_student);

                    $('#family_name').val('');
                    $('#family_relation').val('');
                    $('#family_age').val('');
                    $('#family_education').val('');
                    $('#family_married').val('');
                    $('#family_job').val('');
                    $('#is_student').val('No');
                    //$('#family_remark').val('');
                }else{
                    
                    swal("Warning!", "Enter all fields", "warning");

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

        function family_tree(name,relation) {

            var new_row = '<tr>' +
                '<td><input type="text" class="form-control" value="'+name+'" name="tree_name[]"> </td><td> <input type="text"  class="form-control" value="'+relation+'" name="tree_relation[]"> </td>' +
                ' <td><a id="" class="btn btn-danger form-control rmtree"><i class="fa fa-remove"></i></a></td> </tr>';

            $('#familytree').append(new_row);

        }
        function family_members(name,relation,age,education,married,job,is_student){

            var new_row =
                    '<tr> <td> <div><input type="text" value="'+name+'" class="form-control" name="member_name[]"/> </div> </td>' +
                    '<td><div><input type="text" value="'+relation+'" class="form-control" name="relation[]"/> </div></td>' +
                    '<td> <div><input type="number" value="'+age+'" class="form-control" name="relation_age[]"/> </div> </td>' +
                    '<td><div><input type="text" value="'+education+'" class="form-control" name="education[]" /></div> </td>' +
                    ' <td><div><input type="text" value="'+married+'" class="form-control" name="marriage_status[]" readonly/> </div></td>' +
                    ' <td> <div><input type="text" value="'+job+'" class="form-control" name="job[]"/> </div></td>' +
                    '<td><div><input type="text" value="'+is_student+'" class="form-control"  name="is_student[]" readonly /></div></td>' +
                    // '<td><div><input type="text" value="'+remark+'" class="form-control" name="remark[]" /></div></td>' +
                    ' <td><a class="btn btn-danger form-control rmmembers"><i class="fa fa-remove"></i></a></td>/tr>';

                $('#family_members').append(new_row);

        }

        function body_chart(body_part,side,grade){

            var new_row = '<tr><td><input type="text" value="'+body_part+'" class="form-control" name="body_part[]"></td>' +
                    '<td><input type="text" class="form-control" value="'+side+'" name="side[]" required> </td><td> '
                    +'<input type="text"  class="form-control" value="'+grade+'" name="grade[]"required> </td>' +
                    ' <td><a id="" class="btn btn-danger form-control rmbody"><i class="fa fa-remove"></i></a></td> </tr>';

                $('#bodychart').append(new_row);
        }

    </script>

