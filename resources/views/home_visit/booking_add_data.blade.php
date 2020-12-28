@extends('layouts.app')

@section('content')
<form method="post" id="frmcreate" action="{{url('/bookings/add_data/save')}}">
<input type="hidden" name="bok_id" value="{{$bok_id}}">
<input type="hidden" name="pat_id" value="{{$pat_id}}">
<input type="hidden" name="status" value="">

    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Patient : <b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                {{ $patient->name ?? '' }} </b> </h3>

                        <div class="box-tools">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body no-padding">
                        <ul class="nav nav-pills nav-stacked">

                            <li class="active"><a href="#activity" data-toggle="tab">Patient Details</a></li>
                            <li><a href="#diagnosis" data-toggle="tab">Primary Data </a></li>
                            <li><a href="#disease_details" data-toggle="tab">Disease Details</a></li>
                            <li><a href="#doctornote" data-toggle="tab">Doctor's Notes</a></li>
                            <li><a href="#labnote" data-toggle="tab">Mental & Sperictual</a></li>
                            <li><a href="#prescription" data-toggle="tab">Prescription</a></li>
                            <li><a href="#team_members" data-toggle="tab">Team Members</a></li>
                            <li><a href="#timeline" data-toggle="tab">History</a></li>

                        </ul>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- Profile Image -->
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Details</h3>

                        <div class="box-tools">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body no-padding">
                        <ul class="nav nav-pills nav-stacked">
                            <li class="list-group-item">
                                <b>Reg_No</b> <a id="" name="" class="pull-right">
                                    {{ $patient->reg_no ?? '' }}
                                </a>
                            </li>
                            <li class="list-group-item">
                                <b>Care Of</b> <a id="gender" name="gender" class="pull-right">
                                    {{ $patient->care_of ?? '' }}
                                </a>
                            </li>
                            <li class="list-group-item">
                                <b>Age</b> <a id="age" name="age" class="pull-right">
                                    {{ $patient->age ?? '' }}
                                </a>
                            </li>

                            <li class="list-group-item">
                                <b>Volunteer</b> <a name="dob" id="dob" class="pull-right">
                                    {{ $patient->volunteer ?? '' }}
                                </a>
                            </li>

                            <li class="list-group-item">
                                <b>Phone</b> <a id="phone" name="phone" class="pull-right">
                                    {{ $patient->phone ?? '' }}
                                </a>
                            </li>
                        </ul>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box-body -->
                <!-- /.box -->

            </div>
            <!-- /.col -->
            <div class="col-md-9">

                <div class="nav-tabs-custom">
                    <div class="tab-content">

                        <div class="box-header with-border">
                            <span class="pull-left">
                                <a role="button" back="" class="btn  btn-success align-bottom"
                                    href="{{ url('bookings') }}">
                                    <span class="glyphicon glyphicon-arrow-left" title="back"></span>
                                </a>
                            </span>
                            <div class="pull-right">
                                <button type='submit' data-toggle="tooltip" title='Save' class='btn btn-info  btn-flat'>
                                    <i class="glyphicon glyphicon-hdd"></i></button>
                            </div>
                        </div>

                        <div class="active tab-pane" style=" margin-bottom:20px " id="activity">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="box-header with-border mailbox-controls">
                                        <h3 class="box-title">Patient Details</h3>
                                        <div class="btn-group pull-right">
                                            <button type="button" class="btn btnPrevious btn-default btn-sm"><i
                                                    class="fa fa-chevron-left"></i></button>
                                            <button type="button" class="btnNext btn btn-default btn-sm"><i
                                                    class="fa fa-chevron-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">

                                        <div class="row">

                                            <div class="col-sm-6">

                                                <div class="row">

                                                    <div class="col-sm-3"> <label>Reg no :</label></div>
                                                    <div class="col-sm-8">
                                                        <input type="hidden" name="id" id="id" class="form-control"
                                                            value="{{ $patient->id ?? '' }}">
                                                        <input type="text" name="reg_no" id="reg_no"
                                                            class=" form-control"
                                                            value="{{ $patient->reg_no ?? '' }}"
                                                            placeholder="Enter ..." required>
                                                    </div>
                                                    {{-- <div> <label class="col-sm-2">
                                                                Date : </label></div>
                                                        <div class="col-sm-3">
                                                            <input type="date" name="date" id="date" class=" form-control"
                                                                value="{{ $patient->date ?? '' }}"
                                                    placeholder="Enter ..."
                                                    required>
                                                </div> --}}

                                                <div style="padding-top: 20px;" class="col-sm-3"> <label>Name
                                                        :</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <input type="text" name="name" id="name" class="form-control"
                                                        value="{{ $patient->name ?? '' }}"
                                                        placeholder="Enter ..." required maxlength="40">
                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-3"> <label>Age
                                                        :</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <input type="text" name="age" id="age" class="form-control "
                                                        value="{{ $patient->age ?? '' }}"
                                                        placeholder="Enter ..." required maxlength="3">
                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-3"> <label>Phone
                                                        :</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <input type="text" name="phone" id="phone"
                                                        value="{{ $patient->phone ?? '' }}"
                                                        class="form-control" placeholder="Enter ..." required
                                                        minlength="10" maxlength="10">
                                                </div>
                                                <div style="padding-top: 20px;" class="col-sm-3"> <label>Care of
                                                        :</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <input type="text" name="care_of"
                                                        value="{{ $patient->care_of ?? '' }}"
                                                        id="care_of" class="form-control" placeholder="Enter ..."
                                                        required maxlength="40">
                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-3"> <label>Address
                                                        :</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <textarea type="text" name="address" id="address"
                                                        class="form-control" placeholder="Enter ..."
                                                        required>{{ $patient->address ?? '' }}</textarea>
                                                </div>



                                            </div>
                                        </div>

                                        <div class="col-sm-6">

                                            <div class="row">

                                                <div class="col-sm-4"> <label>Ref No :</label></div>
                                                <div class="col-sm-8">
                                                    <input type="text" name="ref_no" id="ref_no" class=" form-control"
                                                        value="{{ $patient->ref_no ?? '' }}"
                                                        placeholder="Enter ...">
                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-4">
                                                    <label>Organization :</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <input type="text" name="organization" id="organization"
                                                        value="{{ $patient->organization ?? '' }}"
                                                        class="form-control" placeholder="Enter ...">
                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>Panchayath
                                                        :</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <input type="text" name="panchayath" id="panchayath"
                                                        value="{{ $patient->panchayath ?? '' }}"
                                                        class="form-control " placeholder="Enter ..." required>
                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>Pincode
                                                        :</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <input type="text" name="pincode" id="pincode"
                                                        value="{{ $patient->pincode ?? '' }}"
                                                        class="form-control" placeholder="Enter ..." required>
                                                </div>
                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>Volunteer
                                                        :</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <input type="text" name="volunteer" id="volunteer"
                                                        value="{{ $patient->volunteer ?? '' }}"
                                                        class="form-control" placeholder="Enter ...">
                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>Location
                                                        :</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">

                                                    <textarea type="text" name="address" id="address"
                                                        class="form-control" placeholder="Enter ..."
                                                        required>{{ $patient->location ?? '' }}</textarea>


                                                </div>

                                            </div>
                                        </div>



                                    </div>


                                </div>
                                <div class="box-footer with-border mailbox-controls">
                                    <div class="btn-group pull-right">
                                        <button type="button" class="btn btnPrevious btn-default btn-sm"><i
                                                class="fa fa-chevron-left"></i></button>
                                        <button type="button" class="btnNext btn btn-default btn-sm"><i
                                                class="fa fa-chevron-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>






                    <div class="tab-pane" id="prescription">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="box-header with-border mailbox-controls">
                                    <h3 class="box-title">Prescription</h3>
                                    <div class="btn-group pull-right">
                                        <button type="button" class="btn btnPrevious btn-default btn-sm"><i
                                                class="fa fa-chevron-left"></i></button>
                                        <button type="button" class="btn btnNext btn-default btn-sm"><i
                                                class="fa fa-chevron-right"></i></button>
                                    </div>
                                </div>
                                <div class="box-body" style="margin-top: 15px;margin-bottom:50px;">
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th>Medicine</th>
                                                <th>Dose(Daily)</th>
                                                <th>Purpose</th>
                                                <th>Availability</th>
                                                <th>Usage</th>
                                                <!-- <th>Result</th> -->
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="prescrow">
                                            <tr id="add">
                                                <td class="col-lg-3"><input id="medicine" type="text"
                                                        class="form-control " placeholder="Medicine" /></td>
                                                <td class="col-lg-1">
                                                    <select id="dose" name="" class="form-control ">
                                                        <option value="">Select</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>

                                                    </select>
                                                </td>
                                                <td class="col-lg-3"><input id="purpose"  type="text"
                                                        class="form-control" placeholder="Purpose" /></td>
                                                <td class="col-lg-2"><select id="availability"
                                                        class="form-control col-lg-1">
                                                        <option value="">Select</option>
                                                        <option value="Available">Available</option>
                                                        <option value="Not Available">Not Available</option>

                                                    </select>
                                                </td>
                                                <td class="col-lg-2">
                                                    <select id="usage" class="form-control col-lg-1">
                                                        <option value="">Select</option>
                                                        <option value="Regularly">Regularly</option>
                                                        <option value="Irregularly">Irregularly</option>
                                                        <option value="Only Needed">Only Needed</option>

                                                    </select>
                                                </td>
                                                <!-- <td class="col-lg-2"><input id="mrp_item" type="text" class="form-control   text-right two-digits" placeholder="MRP" /></td> -->
                                                <td class="col-lg-1">
                                                    <a title="Add To save" class="btn btn-success prescbtn" href="#">
                                                        <span class="glyphicon glyphicon-plus"></span>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <div class="box-header with-border mailbox-controls">
                                    <div class="btn-group pull-right">
                                        <button type="button" class="btn btnPrevious btn-default btn-sm"><i
                                                class="fa fa-chevron-left"></i></button>
                                        <button type="button" class="btnNext btn btn-default btn-sm"><i
                                                class="fa fa-chevron-right"></i></button>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <!-- /.box -->

                            </div>
                            <!-- /.col (left) -->

                            <!-- /.col (right) -->
                        </div>

                    </div>

                    <div class="tab-pane" id="team_members">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="box-header with-border mailbox-controls">
                                    <h3 class="box-title">Team Members</h3>
                                    <div class="btn-group pull-right">
                                        <button type="button" class="btn btnPrevious btn-default btn-sm"><i
                                                class="fa fa-chevron-left"></i></button>
                                        <button type="button" class="btn btnNext btn-default btn-sm"><i
                                                class="fa fa-chevron-right"></i></button>
                                    </div>
                                </div>
                                <div class="box-body" style="margin-top: 15px;margin-bottom:50px;">
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Role</th>
                                                <th>Contact No</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="teamrow">
                                            <tr id="">
                                                <td class="col-lg-3"><input id="team_name" type="text"
                                                        class="form-control " placeholder="Name" /></td>
                                                <td class="col-lg-3">
                                                    <select id="role" class="form-control ">
                                                        <option value="">Select</option>
                                                        <option value="Doctor">Doctor</option>
                                                        <option value="Nurse">Nurse</option>
                                                        <option value="Driver">Driver</option>
                                                        <option value="Volunteer">Volunteer</option>


                                                    </select>
                                                </td>
                                                <td class="col-lg-3"><input id="contact_no" name="contact_no" type="text"
                                                        class="form-control" placeholder="Contact No" /></td>


                                                <td class="col-lg-1">
                                                    <a title="Add To save" class="btn btn-success teambtn" href="#">
                                                        <span class="glyphicon glyphicon-plus"></span>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <div class="box-header with-border mailbox-controls">
                                    <div class="btn-group pull-right">
                                        <button type="button" class="btn btnPrevious btn-default btn-sm"><i
                                                class="fa fa-chevron-left"></i></button>
                                        <button type="button" class="btnNext btn btn-default btn-sm"><i
                                                class="fa fa-chevron-right"></i></button>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <!-- /.box -->

                            </div>
                            <!-- /.col (left) -->

                            <!-- /.col (right) -->
                        </div>

                    </div>
                    <!-- /.tab-pane -->


                    <div class="tab-pane" id="timeline">
                        <!-- The timeline -->
                        <div class="box-header with-border mailbox-controls">
                            <h3 class="box-title">History </h3>
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btnPrevious btn-default btn-sm"><i
                                        class="fa fa-chevron-left"></i></button>
                                <button type="button" class="btn btnNext btn-default btn-sm"><i
                                        class="fa fa-chevron-right"></i></button>
                            </div>
                        </div>
                        <div class="box-body" style="margin-top: 15px;margin-bottom:50px;">


                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="box-group" id="accordion">
                                    @for($i=0; $i<5; $i++)

                                        <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                                        <div class="panel box box-">
                                            <div class="box-header with-border">
                                                <h4 class="box-title">
                                                    <a data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapseOne{{ $i }}">
                                                        {{ Date('d/M/Y') }}
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne{{ $i }}" class="panel-collapse collapse">
                                                <div class="box-body">

                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                    accusamus
                                                    terry richardson ad squid. 3
                                                    wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                                    Food

                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                                </div>

                            </div>

                        </div>
                        <div class="box-header with-border mailbox-controls">
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btnPrevious btn-default btn-sm"><i
                                        class="fa fa-chevron-left"></i></button>
                                <button type="button" class="btnNext btn btn-default btn-sm"><i
                                        class="fa fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>











                    <div class="tab-pane" id="doctornote">
                        <div class="col-md-6">


                        </div>

                        <div class="box-header with-border mailbox-controls">
                            <h3 class="box-title">Doctor's Notes</h3>
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btnPrevious btn-default btn-sm"><i
                                        class="fa fa-chevron-left"></i></button>
                                <button type="button" class="btn btnNext btn-default btn-sm"><i
                                        class="fa fa-chevron-right"></i></button>
                            </div>
                            <br />

                        </div>
                        <div class="box-body no-padding">
                            <div class="table-responsive mailbox-messages">
                                <textarea id="editor1" name="doctors_note" rows="10" cols="80">{{$booking->doctors_note}}
                                      </textarea>
                            </div>
                            <div class="mailbox-controls">
                                <div class="pull-right">
                                    <div class="btn-group pull-right">
                                        <button type="button" class="btn btnPrevious btn-default btn-sm"><i
                                                class="fa fa-chevron-left"></i></button>
                                        <button type="button" class="btn btnNext btn-default btn-sm"><i
                                                class="fa fa-chevron-right"></i></button>
                                    </div>
                                    <!-- /.btn-group -->
                                </div>
                                <!-- /.pull-right -->
                            </div>
                            <!-- /.mail-box-messages -->
                        </div>

                    </div>
                    <div class="tab-pane" id="labnote">
                        <div class="box-header with-border mailbox-controls">
                            <h3 class="box-title">Mental & Sperictual Detail</h3>
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btnPrevious btn-default btn-sm"><i
                                        class="fa fa-chevron-left"></i></button>
                                <button type="button" class="btn btnNext btn-default btn-sm"><i
                                        class="fa fa-chevron-right"></i></button>
                            </div>
                        </div>
                        <div class="box-body no-padding">
                            <div class="table-responsive mailbox-messages">
                                <textarea id="editor2" name="mental_note" rows="10" cols="80">{{$booking->mental_note}}
                                      </textarea>
                            </div>
                            <div class="mailbox-controls">
                                <div class="pull-right">
                                    <div class="btn-group pull-right">
                                        <button type="button" class="btn btnPrevious btn-default btn-sm"><i
                                                class="fa fa-chevron-left"></i></button>
                                        <button type="button" class="btn btnNext btn-default btn-sm"><i
                                                class="fa fa-chevron-right"></i></button>
                                    </div>
                                    <!-- /.btn-group -->
                                </div>
                                <!-- /.pull-right -->
                            </div>
                            <!-- /.mail-box-messages -->
                        </div>

                    </div>
                    <div class="tab-pane" id="diagnosis">
                        <div class="box-header with-border mailbox-controls">
                            <h3 class="box-title">Primary Data</h3>
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btnPrevious btn-default btn-sm"><i
                                        class="fa fa-chevron-left"></i></button>
                                <button type="button" class="btn btnNext btn-default btn-sm"><i
                                        class="fa fa-chevron-right"></i></button>
                            </div>
                        </div>
                        <div class="box-body no-padding">
                            <div class="table-responsive mailbox-messages">
                                <div class="box-header">
                                    <!-- <h3 class="box-title"></h3> -->
                                </div>
                                <div class="box-body">

                                    <div class="row">

                                        <div class="col-sm-6">

                                            <div class="row">

                                                <div class="col-sm-4"> <label>BP (mmHg) :</label></div>
                                                <div class="col-sm-8">
                                                    <input type="text" name="bp"  class="form-control"
                                                        value="{{ $booking->bp ?? '' }}"
                                                        placeholder="Enter ..." required>
                                                </div>


                                                <div style="padding-top: 20px;" class="col-sm-4">
                                                    <label>Temperature:</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <input type="text" name="tempreture" class="form-control"
                                                        value="{{ $booking->tempreture ?? '' }}"
                                                        placeholder="Enter ..." required maxlength="40">
                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>General State:
                                                    </label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <textarea type="text" name="general_state"
                                                        class="form-control" placeholder="പൊതു അവസ്ഥ "
                                                        required>{{$booking->general_state ?? '' }}</textarea>

                                                </div>


                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>Surroundings
                                                        :
                                                    </label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <textarea type="text" name="surroundings"
                                                        class="form-control" placeholder="പരിസര ശുചിത്വം"
                                                        required>{{ $booking->surroundings ?? '' }}</textarea>

                                                </div>
                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>Skin/Nail :
                                                    </label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <textarea type="text" name="skin"
                                                        class="form-control" placeholder="തൊലി / നഖം"
                                                        required>{{ $booking->skin ?? '' }}</textarea>

                                                </div>
                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>Head /Hair :
                                                    </label>
                                                </div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <textarea type="text" name="head"
                                                        class="form-control" placeholder="തല /മുടി"
                                                        required>{{ $booking->head ?? '' }}</textarea>

                                                </div>



                                            </div>
                                        </div>

                                        <div class="col-sm-6">

                                            <div class="row">

                                                <div class="col-sm-4"> <label>Pulse (bpm):</label></div>
                                                <div class="col-sm-8">
                                                    <input type="text" name="pulse"  class="form-control"
                                                        value="{{ $booking->pulse ?? '' }}"
                                                        placeholder="Enter ...">
                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>Hobbies
                                                        :</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <input type="text" name="hobbies"  class="form-control"
                                                        value="{{ $booking->hobbies ?? '' }}"
                                                        placeholder="സമയ വിനയോഗം " required maxlength="40">
                                                </div>



                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>Mouth : </label>
                                                </div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <textarea placeholder="വായ " type="text" name="mouth" 
                                                        class="form-control" 
                                                        >{{ $booking->mouth ?? ''}}</textarea>

                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>Sex :
                                                    </label>
                                                </div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <textarea type="text" name="sex"
                                                        class="form-control" placeholder="പെരിനിയം"
                                                        required>{{ $booking->sex ?? '' }}</textarea>

                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>Hidden Area :
                                                    </label>
                                                </div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <textarea type="text" name="hidden_area"
                                                        class="form-control" placeholder="ഹിഡൻ ഏരിയകൾ"
                                                        required>{{ $booking->hidden_area ?? '' }}</textarea>

                                                </div>
                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>Other Treatment
                                                        : </label>
                                                </div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <textarea type="text" name="other_treatment"
                                                        class="form-control" placeholder="മറ്റ് ചികിത്സാ രീതികൾ"
                                                        required>{{ $booking->other_treatment ?? '' }}</textarea>

                                                </div>


                                            </div>

                                        </div>
                                        <hr>
                                        <!-- /.box-body -->
                                    </div>
                                    <div class="mailbox-controls">
                                        <div class="pull-right">
                                            <!-- <div class="btn-group pull-right">
                                        <button type="button" class="btn btnPrevious btn-default btn-sm"><i
                                                class="fa fa-chevron-left"></i></button>
                                        <button type="button" class="btn btnNext btn-default btn-sm"><i
                                                class="fa fa-chevron-right"></i></button>
                                    </div> -->
                                            <!-- /.btn-group -->
                                        </div>
                                        <!-- /.pull-right -->
                                    </div>
                                    <!-- /.mail-box-messages -->
                                </div>

                                <!--*********************************************************************************************************************************************** -->
                                <br>
                                <div class="box-header with-border mailbox-controls">
                                    <h3 class="box-title">Other Data</h3>

                                </div>
                                <div class="box-body">

                                    <div class="row">

                                        <div class="col-sm-6">

                                            <div class="row">
                                                <div style="padding-top: 20px;" class="col-sm-4">
                                                    <label>ആഹാരം :</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <div class="form-group">
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="food"
                                                                    value="1" checked >
                                                                കൃത്യമായി കഴിക്കുന്നുണ്ട്
                                                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <label>
                                                                <input type="radio" name="food"
                                                                    value="0"  @if($booking->food == 0) checked @endif >
                                                                ഇല്ല </label>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-4">
                                                    <label>പാനിയം :</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <div class="form-group">
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="water"
                                                                     value="1" checked>
                                                                കൃത്യമായി കഴിക്കുന്നുണ്ട്
                                                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <label>
                                                                <input type="radio" name="water"
                                                                     value="0"  @if($booking->water == 0) checked @endif>
                                                                ഇല്ല </label>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-4">
                                                    <label>മൂത്രം :</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <div class="form-group">
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="urine"
                                                                     value="1" checked>
                                                                കൃത്യമായി നടക്കുന്നുണ്ട്
                                                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <label>
                                                                <input type="radio" name="urine"
                                                                     value="0" @if($booking->urine == 0) checked @endif>
                                                                ഇല്ല </label>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div style="padding-top: 20px;" class="col-sm-4">
                                                    <label>ശോധന &nbsp;:</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <div class="form-group">
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="constipation"
                                                                     value="1" checked>
                                                                കൃത്യമായി നടക്കുന്നുണ്ട്
                                                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <label>
                                                                <input type="radio" name="constipation"
                                                                     value="0"  @if($booking->constipation == 0) checked @endif >
                                                                ഇല്ല </label>
                                                        </div>

                                                    </div>
                                                </div>



                                            </div>
                                        </div>

                                        <div class="col-sm-6">

                                            <div class="row">



                                                <div style="padding-top: 20px;" class="col-sm-4">
                                                    <label>വ്യായാമം :</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <div class="form-group">
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="exercise"
                                                                     value="1" checked>
                                                                കൃത്യമായി നടക്കുന്നുണ്ട്
                                                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <label>
                                                                <input type="radio" name="exercise"
                                                                     value="0"  @if($booking->constipation == 0) checked @endif>
                                                                ഇല്ല </label>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-4">
                                                    <label>ഉറക്കം &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <div class="form-group">
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="sleep"
                                                                 value="1" checked>
                                                                ആവശിയതിനുണ്ട്
                                                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 
                                                            <label>
                                                                <input type="radio" name="sleep"
                                                                     value="0"  @if($booking->sleep == 0) checked @endif>
                                                                ഇല്ല </label>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-4">
                                                    <label>ശരീര ശുചീകരണം :</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <div class="form-group">
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="body_cleaning"
                                                                     value="1" checked>
                                                                കൃത്യമായി നടക്കുന്നുണ്ട്
                                                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <label>
                                                                <input type="radio" name="body_cleaning"
                                                                     value="0"  @if($booking->body_cleaning == 0) checked @endif>
                                                                ഇല്ല </label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>

                                </div>
                                <div class="mailbox-controls">
                                    <div class="pull-right">
                                        <div class="btn-group pull-right">
                                            <button type="button" class="btn btnPrevious btn-default btn-sm"><i
                                                    class="fa fa-chevron-left"></i></button>
                                            <button type="button" class="btn btnNext btn-default btn-sm"><i
                                                    class="fa fa-chevron-right"></i></button>
                                        </div>
                                        <!-- /.btn-group -->
                                    </div>
                                    <!-- /.pull-right -->
                                </div>
                            </div>
                        </div>
                        <!--*********************************************************************************************************************************************** -->

                    </div>

                    <div class="tab-pane" id="disease_details">
                        <div class="box-header with-border mailbox-controls">
                            <h3 class="box-title">Disease Details</h3>
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btnPrevious btn-default btn-sm"><i
                                        class="fa fa-chevron-left"></i></button>
                                <button type="button" class="btn btnNext btn-default btn-sm"><i
                                        class="fa fa-chevron-right"></i></button>
                            </div>
                        </div>
                        <div class="box-body no-padding">
                            <div class="table-responsive mailbox-messages">
                                <textarea id="editor4" name="disease_details" rows="10" cols="80">{{$booking->disease_details}}
                          </textarea>
                            </div>
                            <div class="mailbox-controls">
                                <div class="pull-right">
                                    <div class="btn-group pull-right">
                                        <button type="button" class="btn btnPrevious btn-default btn-sm"><i
                                                class="fa fa-chevron-left"></i></button>
                                        <button type="button" class="btn btnNext btn-default btn-sm"><i
                                                class="fa fa-chevron-right"></i></button>
                                    </div>
                                    <!-- /.btn-group -->
                                </div>
                                <!-- /.pull-right -->
                            </div>
                            <!-- /.mail-box-messages -->
                        </div>

                    </div>


                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        </div>
    </section>
</form>
<script>
    $(function () {

        @foreach($prescription as $presc)

        presc('{{$presc->medicine}}', '{{$presc->dose}}', '{{$presc->purpose}}', '{{$presc->availability}}', '{{$presc->usage}}')
        
        @endforeach

        @foreach($team_members as $members)

        addteam('{{$members->team_name}}', '{{$members->role}}', '{{$members->contact_no}}')

        @endforeach


        CKEDITOR.replace('editor1');
        CKEDITOR.replace('editor2');
        CKEDITOR.replace('editor4');

        $('.btnNext').click(function () {
            $('.nav-pills > .active').next('li').find('a').trigger('click');
        });
        $('.btnPrevious').click(function () {
            $('.nav-pills > .active').prev('li').find('a').trigger('click');
        });

        $('.prescbtn').click(function () {

            var medicine = $('#medicine').val();
            var dose = $('#dose').val();
            var purpose = $('#purpose').val();
            var availability = $('#availability').val();
            var usage = $('#usage').val();
            if (medicine && dose && purpose && availability && usage) {

                presc(medicine, dose, purpose, availability, usage);

                $('#medicine').val('');
                $('#dose').val('');
                $('#purpose').val('');
                $('#availability').val('');
                $('#usage').val('');
            }

        });

        $(document).on('click', '.remove', function () {
            $(this).closest('tr').remove();

        });

        $('.teambtn').click(function () {
            var name = $('#team_name').val();
            var role = $('#role').val();
            var contact_no = $('#contact_no').val();

            if (name && role && contact_no) {

                addteam(name, role, contact_no);

                $('#team_name').val('');
                $('#role').val('');
                $('#contact_no').val('');
            }

        });

        $(document).on('click', '.teamremove', function () {
            $(this).closest('tr').remove();

        });

    })

    function presc(medicine, dose, purpose, availability, usage) {

        var newrow =
            '<tr id="add"><td class="col-lg-3"><input  type="text" class="form-control" name="medicine[]" placeholder="Medicine" value="' +
            medicine + '" /></td>' +
            '<td class="col-lg-1"><input  name="dose[]" value="' + dose + '"  class="form-control"/></td>' +
            '<td class="col-lg-3"><input id="qty" name="purpose[]" value="' + purpose +
            '"  type="text" class="form-control" placeholder="Purpose" /></td>' +
            '<td class="col-lg-2"><input name ="availability[]" value="' + availability + '"  class="form-control col-lg-1"></td>' +
            '<td class="col-lg-2"><input name="usage[]" value="' + usage +
            '"  class="form-control col-lg-1"/></td><td class="col-lg-1">' +
            '<button data-toggle="tooltip" type="button" title="Remove" class="btn btn-danger remove" href="#"><span class="glyphicon glyphicon-remove"></span>' +
            '</button></td></tr>';
        $('#prescrow').append(newrow);

    }

    function addteam(name, role, contact_no){

        var newrow =
            '<tr id=""><td class="col-lg-3"><input name="team_name[]" value="' + name + '" type="text" class="form-control " placeholder="Name" /></td>' +
            '<td class="col-lg-3"><input value="' + role + '" name="role[]" class="form-control "/></td>' +
            '<td class="col-lg-3"><input value="' + contact_no + '"  type="text" name="contact_no[]" class="form-control" placeholder="Contact No" /></td>' +
            '<td class="col-lg-1"><a title="Remove" class="btn btn-danger teamremove" href="#"> <span class="glyphicon glyphicon-remove"></span>' +
            '</a></td> </tr>';
        $('#teamrow').append(newrow);

    }

</script>

@endsection
