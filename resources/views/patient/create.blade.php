@extends('layouts.app')

@section('content')
    <style>
        }

    </style>
    <form action="{{ url('/patient/save') }}" method="POST">
        <div id="patient_details">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><b>{{ ucfirst($view) }} Patient:</b></h3>
                    <a href="{{ url('/') }}/patients" class="pull-right btn btn-success"> <i
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
                                    <input type="text" name="reg_no" id="reg_no" class=" form-control"
                                        value="{{ $patient->reg_no ?? '' }}" placeholder="Enter ..." required>
                                </div>
                                <div> <label class="col-sm-2"> Date :</label></div>
                                <div class="col-sm-4">
                                    <input type="date" name="date" id="date" class=" form-control"
                                        value="{{ $patient->date ?? '' }}" placeholder="Enter ..." required>
                                </div>

                                <div style="padding-top: 20px;" class="col-sm-3"> <label>Name :</label></div>
                                <div style="padding-top: 20px;" class="col-sm-9">
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ $patient->name ?? '' }}" placeholder="Enter ..." required maxlength="40">
                                </div>

                                <div style="padding-top: 20px;" class="col-sm-3"> <label>Age :</label></div>
                                <div style="padding-top: 20px;" class="col-sm-9">
                                    <input type="text" name="age" id="age" class="form-control "
                                        value="{{ $patient->age ?? '' }}" placeholder="Enter ..." required maxlength="3">
                                </div>

                                <div style="padding-top: 20px;" class="col-sm-3"> <label>Phone :</label></div>
                                <div style="padding-top: 20px;" class="col-sm-9">
                                    <input type="text" name="phone" id="phone" value="{{ $patient->phone ?? '' }}"
                                        class="form-control" placeholder="Enter ..." required minlength="10" maxlength="10">
                                </div>
                                <div style="padding-top: 20px;" class="col-sm-3"> <label>Care of :</label></div>
                                <div style="padding-top: 20px;" class="col-sm-9">
                                    <input type="text" name="care_of" value="{{ $patient->care_of ?? '' }}" id="care_of"
                                        class="form-control" placeholder="Enter ..." required maxlength="40">
                                </div>

                                <div style="padding-top: 20px;" class="col-sm-3"> <label>Address :</label></div>
                                <div style="padding-top: 20px;" class="col-sm-9">
                                    <textarea type="text" name="address" id="address" class="form-control"
                                        placeholder="Enter ..." required>{{ $patient->address ?? '' }} </textarea>
                                </div>



                            </div>
                        </div>

                        <div class="col-sm-6">

                            <div class="row">

                                <div class="col-sm-3"> <label>Ref No :</label></div>
                                <div class="col-sm-9">
                                    <input type="text" name="ref_no" id="ref_no" class=" form-control"
                                        value="{{ $patient->ref_no ?? '' }}" placeholder="Enter ...">
                                </div>

                                <div style="padding-top: 20px;" class="col-sm-3"> <label>Organization</label></div>
                                <div style="padding-top: 20px;" class="col-sm-9">
                                    <input type="text" name="organization" id="organization"
                                        value="{{ $patient->organization ?? '' }}" class="form-control"
                                        placeholder="Enter ...">
                                </div>

                                <div style="padding-top: 20px;" class="col-sm-3"> <label>Panchayath</label></div>
                                <div style="padding-top: 20px;" class="col-sm-9">
                                    <input type="text" name="panchayath" id="panchayath"
                                        value="{{ $patient->panchayath ?? '' }}" class="form-control "
                                        placeholder="Enter ..." required>
                                </div>

                                <div style="padding-top: 20px;" class="col-sm-3"> <label>Pincode :</label></div>
                                <div style="padding-top: 20px;" class="col-sm-9">
                                    <input type="text" name="pincode" id="pincode" value="{{ $patient->pincode ?? '' }}"
                                        class="form-control" placeholder="Enter ..." required>
                                </div>
                                <div style="padding-top: 20px;" class="col-sm-3"> <label>Volunteer :</label></div>
                                <div style="padding-top: 20px;" class="col-sm-9">
                                    <input type="text" name="volunteer" id="volunteer"
                                        value="{{ $patient->volunteer ?? '' }}" class="form-control"
                                        placeholder="Enter ...">
                                </div>

                                <div style="padding-top: 20px;" class="col-sm-3"> <label>Location :</label></div>
                                <div style="padding-top: 20px;" class="col-sm-9">
                                    <textarea type="text" name="location" id="location" class="form-control"
                                        placeholder="Enter ..." required> {{ $patient->location ?? '' }} </textarea>
                                </div>

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

                            <table id="bodychart" style="margin-top: 20px;"
                                class="table table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>Body Parts</th>
                                        <th>Side</th>
                                        <th>Grade</th>
                                        <th></th>

                                    </tr>

                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" disabled>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">

                                        </td>
                                        <td>
                                            <input type="text" class="form-control">

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
                                        <th>Sl no</th>
                                        <th>Name </th>
                                        <th>Relation</th>
                                        <th></th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" disabled>

                                        </td>
                                        <td>
                                            <input type="text" class="form-control">

                                        </td>
                                        <td><a class="btn btn-success form-control " id="addmore2" onclick="family_tree('','')"><i
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
                                            <th>Name </th>
                                            <th>Relation</th>
                                            <th>Age</th>
                                            <th>Education</th>
                                            <th>Married</th>
                                            <th>Job</th>
                                            <th>Disease</th>
                                            <th>Remarks</th>
                                            <th></th>

                                        </tr>

                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td>
                                                <div><input type="text" class="form-control" disabled />
                                                </div>
                                            </td>
                                            <td>
                                                <div><input type="text" class="form-control" />
                                                </div>
                                            </td>
                                            <td>
                                                <div><input type="text" class="form-control" />
                                                </div>
                                            </td>
                                            <td>
                                                <div><input type="text" class="form-control" />
                                                </div>
                                            </td>
                                            <td>
                                                <div><input type="text" class="form-control" />
                                                </div>
                                            </td>
                                            <td>
                                                <div><input type="text" class="form-control" />
                                                </div>
                                            </td>
                                            <td>
                                                <div><input type="text" class="form-control" />
                                                </div>
                                            </td>
                                            <td>
                                                <div><input type="text" class="form-control" />
                                                </div>
                                            </td>

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
                                        placeholder="Enter ...">{{ $patientotherdetail->patient_assumptiom ?? '' }}
                                    </textarea>
                                </div><br>

                                <div class=""> <label>Patients social/mental/sperictual problems :</label></div>
                                <div style="margin-top: 10px;margin-bottom: 20px" class="col-sm-12">
                                    <textarea type="text" name="patient_social" class="form-control"
                                        placeholder="Enter ...">{{ $patientotherdetail->patient_social ?? '' }} </textarea>
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
                                    <textarea type="text" name="report_of_person" class="form-control"
                                        placeholder="Enter ...">{{ $patientotherdetail->report_of_person ?? '' }}
                                    </textarea>
                                </div>

                                <div class=""> <label>Relatives assumption about disease and treatment :</label></div>
                                <div style="margin-top: 10px;margin-bottom: 20px" class="col-sm-12">
                                    <textarea type="text" name="relative_assumption" class="form-control"
                                        placeholder="Enter ...">{{ $patientotherdetail->relative_assumption ?? '' }}
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
        </div>
    </form>
   

    <script>
        $(function() {
            @if($view !='create')

                @foreach($family_tree  as $family)

                    family_tree('{{$family->name}}','{{$family->relation}}')

                    @endforeach
            @endif
            $('#addmore1').click(function() {
                var new_row = '<tr><td><input type="text" class="form-control name="body_part[]""></td>' +
                    '<td><input type="text" class="form-control" name="side[]" required> </td><td> <input type="text"  class="form-control" name="grade[]"required> </td>' +
                    ' <td><a id="" class="btn btn-danger form-control rmbody"><i class="fa fa-remove"></i></a></td> </tr>';

                $('#bodychart').append(new_row);
            })

            $('#addmore3').click(function() {
                family_members();
               
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
            var new_row = '<tr><td><input type="text" class="form-control"></td>' +
                '<td><input type="text" class="form-control" value="'+name+'" name="tree_name[]"> </td><td> <input type="text"  class="form-control" value="'+relation+'" name="tree_relation[]"> </td>' +
                ' <td><a id="" class="btn btn-danger form-control rmtree"><i class="fa fa-remove"></i></a></td> </tr>';

            $('#familytree').append(new_row);
        }
        function family_members(){

            var new_row =
                    '<tr> <td> <div><input type="text" class="form-control" name="member_name[]"/> </div> </td>' +
                    '<td><div><input type="text" class="form-control" name="relation[]"/> </div></td>' +
                    '<td> <div><input type="text" class="form-control" name="relation_age[]"/> </div> </td>' +
                    '<td><div><input type="text" class="form-control" name="education[]" /></div> </td>' +
                    ' <td><div><input type="text" class="form-control" name="marriage_status[]"/> </div></td>' +
                    ' <td> <div><input type="text" class="form-control" name="job[]"/> </div></td>' +
                    '<td><div><input type="text" class="form-control"  name="disease[]" /></div></td>' +
                    '<td><div><input type="text" class="form-control" name="remark[]" /></div></td>' +
                    ' <td><a class="btn btn-danger form-control rmmembers" id="addmore3"><i class="fa fa-remove"></i></a></td>/tr>';

                $('#family_members').append(new_row);

        }

    </script>
@endsection
