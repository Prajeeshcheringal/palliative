@extends('layouts.app')

@section('content')
<form method="post" id="frmcreate" back="" type="submit" action="">

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
                            <li class="active"><a href="#activity" data-toggle="tab" id="pat_name"
                                    name="pat_name">Patient Details</a></li>
                            <li><a href="#disease_details" data-toggle="tab">Disease Details</a></li>
                            <li><a href="#doctornote" data-toggle="tab">Doctor's Notes</a></li>

                            <li><a href="#labnote" data-toggle="tab">Mental & Sperictual</a></li>
                            <li><a href="#diagnosis" data-toggle="tab">Primary Data </a></li>
                            <li><a href="#prescription" data-toggle="tab">Prescription</a></li>
                            <li><a href="#timeline" data-toggle="tab">Time Line</a></li>
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

                        <div class="active tab-pane" style="margin-top:20px ; margin-bottom:20px " id="activity">
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
                                                        required>{{ $patient->address ?? '' }} </textarea>
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
                                                    <textarea type="text" name="location" id="location"
                                                        class="form-control" placeholder="Enter ..." required>
                                                    {{ $patient->location ?? '' }} </textarea>
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
                                        <tbody id="rowi">
                                            <tr id="add">
                                                <td class="col-lg-3"><input  id="itemname" type="text"
                                                        class="form-control " placeholder="Medicine"/></td>
                                                <td class="col-lg-1">
                                                    <select tabindex="-1" name="potency" class="form-control ">
                                                        <option value="">Select</option>
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>

                                                    </select>
                                                </td>
                                                <td class="col-lg-3"><input id="qty" name="qty" type="text"
                                                        class="form-control"
                                                        placeholder="Purpose" /></td>
                                                <td class="col-lg-2"><select tabindex="-1" id="unit_item"
                                                        class="form-control col-lg-1">
                                                        <option value="">Select</option>
                                                        <option value="">Available</option>
                                                        <option value="">Not Available</option>

                                                    </select>
                                                </td>
                                                <td class="col-lg-2">
                                                    <select tabindex="-1" id="unit_item" class="form-control col-lg-1">
                                                        <option value="">Select</option>
                                                        <option value="">Regularly</option>
                                                        <option value="">Irregularly</option>
                                                        <option value="">Only Needed</option>

                                                    </select>
                                                </td>
                                                <!-- <td class="col-lg-2"><input id="mrp_item" type="text" class="form-control   text-right two-digits" placeholder="MRP" /></td> -->
                                                <td class="col-lg-1">
                                                    <button data-toggle="tooltip" type="button" title="Add To save"
                                                        class="btn btn-success" href="#">
                                                        <span class="glyphicon glyphicon-plus"></span>
                                                    </button>
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
                    {{-- <div class="tab-pane" id="timeline">
                                <!-- The timeline -->
                                <div class="box-header with-border mailbox-controls">
                                    <h3 class="box-title">Time Line</h3>
                                    <div class="btn-group pull-right">
                                        <button type="button" class="btn btnPrevious btn-default btn-sm"><i
                                                class="fa fa-chevron-left"></i></button>
                                        <button type="button" class="btn btnNext btn-default btn-sm"><i
                                                class="fa fa-chevron-right"></i></button>
                                    </div>
                                </div>
                                <ul class="timeline timeline-inverse">

                                    <!-- timeline time label -->
                                    <?php foreach ($details as $item) { ?>
                                    <li class="time-label">
                                        <span class="bg-red"> <?php echo $item['Bok_Date']; ?> </span>

                                    </li>
                                    <li>
                                        <i class="fa fa-envelope bg-blue"></i>

                                        <div class="timeline-item">
                                            <h3 class="timeline-header"><a href="#">Observations & Diagnosis</a> </h3>
                                            <div class="timeline-body">
                                                <b>Observations :</b> <?php echo $item['Bok_DocNote']; ?> <br></br>
                                                <b>Diagnosis :</b> <?php echo $item['Bok_DoctDescription'];
                                                                    ?> <br></br>
                                                <b>Lab Notes :</b> <?php echo $item['Bok_Labnote']; ?> <br></br>
                                                <b>Doctor's Notes :</b> <?php echo $item['Bok_Summery']; ?> <br></br>
                                            </div>
                                            <h3 class="timeline-header"><a href="#">Prescription</a> </h3>
                                            <div class="timeline-body">
                                                <?php echo $item['Pre_note']; ?> <br></br>
                                            </div>
                                        </div>
                                    </li>
                                    <?php } ?>


                                    <li>
                                        <i class="fa fa-clock-o bg-gray"></i>
                                    </li>
                                </ul>
                                <div class="btn-group pull-right">
                                    <button type="button" class="btn btnPrevious btn-default btn-sm"><i
                                            class="fa fa-chevron-left"></i></button>
                                    <button type="button" class="btn btnNext btn-default btn-sm"><i
                                            class="fa fa-chevron-right"></i></button>
                                </div>
                            </div> --}}

                    <div class="tab-pane" id="doctornote">
                        <div class="col-md-6">
                            <!--                                <div class="box-header">
                                                                            <h3 class="box-title">Patients Note</h3>
                                                                        </div>
                                                                        <div class="box-body"> 
                                                                            <div class="form-group">
                                                                            </div>
                                                                        </div>-->
                            <!-- /.box-body -->
                            <!-- /.box -->

                        </div>
                        <!--                            <div class="col-md-6">
                                    
                                                                    <div class="box-header">
                                                                        <h3 class="box-title">Reception Note</h3>
                                                                    </div>
                                                                    <div class="box-body"> 
                                                                        <div class="form-group">
                                                                        </div>
                                                                    </div>
                                                                     /.box-body 
                                                                     /.box 
                                    
                                                                </div>-->
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
                                <textarea id="editor1" name="doc_notes" rows="10" cols="80">
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
                                <textarea id="editor2" name="lab_note" rows="10" cols="80">
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
                                    <h3 class="box-title"></h3>
                                </div>
                                <div class="box-body">

                                    <div class="row">

                                        <div class="col-sm-6">

                                            <div class="row">

                                                <div class="col-sm-4"> <label>BP (mmHg) :</label></div>
                                                <div class="col-sm-8">
                                                    <input type="text" name="reg_no" id="reg_no" class=" form-control"
                                                        value="{{ $patient->reg_no ?? '' }}"
                                                        placeholder="Enter ..." required>
                                                </div>


                                                <div style="padding-top: 20px;" class="col-sm-4">
                                                    <label>Temperature:</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <input type="text" name="name" id="name" class="form-control"
                                                        value="{{ $patient->name ?? '' }}"
                                                        placeholder="Enter ..." required maxlength="40">
                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>പേരതിസരശുചെ
                                                    </label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <textarea type="text" name="location" id="location"
                                                        class="form-control" placeholder="Enter ..." required>
                                                    {{ $patient->location ?? '' }} </textarea>
                                                </div>


                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>പേരതിസരശുചെ
                                                    </label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <textarea type="text" name="location" id="location"
                                                        class="form-control" placeholder="Enter ..." required>
                                                    {{ $patient->location ?? '' }} </textarea>
                                                </div>
                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>പേരതിസരശുചെ
                                                    </label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <textarea type="text" name="location" id="location"
                                                        class="form-control" placeholder="Enter ..." required>
                                                    {{ $patient->location ?? '' }} </textarea>
                                                </div>
                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>പേരതിസരശുചെ
                                                    </label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <textarea type="text" name="location" id="location"
                                                        class="form-control" placeholder="Enter ..." required>
                                                    {{ $patient->location ?? '' }} </textarea>
                                                </div>
                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>പേരതിസരശുചെ
                                                    </label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <textarea type="text" name="location" id="location"
                                                        class="form-control" placeholder="Enter ..." required>
                                                    {{ $patient->location ?? '' }} </textarea>
                                                </div>



                                            </div>
                                        </div>

                                        <div class="col-sm-6">

                                            <div class="row">

                                                <div class="col-sm-4"> <label>Pulse (bpm):</label></div>
                                                <div class="col-sm-8">
                                                    <input type="text" name="ref_no" id="ref_no" class=" form-control"
                                                        value="{{ $patient->ref_no ?? '' }}"
                                                        placeholder="Enter ...">
                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>സമയ
                                                        വതിനത</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <input type="text" name="name" id="name" class="form-control"
                                                        value="{{ $patient->name ?? '' }}"
                                                        placeholder="വതിഹനഹദങ്ങള്‍" required maxlength="40">
                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>കപേഹതു </label>
                                                </div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <textarea type="text" name="location" id="location"
                                                        class="form-control" placeholder="Enter ..." required>
                                                    {{ $patient->location ?? '' }} </textarea>
                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>കപേഹതു </label>
                                                </div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <textarea type="text" name="location" id="location"
                                                        class="form-control" placeholder="Enter ..." required>
                                                    {{ $patient->location ?? '' }} </textarea>
                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>കപേഹതു </label>
                                                </div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <textarea type="text" name="location" id="location"
                                                        class="form-control" placeholder="Enter ..." required>
                                                    {{ $patient->location ?? '' }} </textarea>
                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>കപേഹതു </label>
                                                </div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <textarea type="text" name="location" id="location"
                                                        class="form-control" placeholder="Enter ..." required>
                                                    {{ $patient->location ?? '' }} </textarea>
                                                </div>


                                            </div>

                                        </div>
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
                                                    <label>പേഹനതീയമം :</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <div class="form-group">
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="optionsRadios"
                                                                    id="optionsRadios1" value="option1" checked>
                                                                കെഴതിക്കുനണഴ
                                                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <label>
                                                                <input type="radio" name="optionsRadios"
                                                                    id="optionsRadios2" value="option2">
                                                                ഇല </label>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-4">
                                                    <label>മൂതമം :</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <div class="form-group">
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="optionsRadios"
                                                                    id="optionsRadios1" value="option1" checked>
                                                                കെഴതിക്കുനണഴ
                                                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <label>
                                                                <input type="radio" name="optionsRadios"
                                                                    id="optionsRadios2" value="option2">
                                                                ഇല </label>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-4">
                                                    <label>ഹശഹധന :</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <div class="form-group">
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="optionsRadios"
                                                                    id="optionsRadios1" value="option1" checked>
                                                                കെഴതിക്കുനണഴ
                                                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <label>
                                                                <input type="radio" name="optionsRadios"
                                                                    id="optionsRadios2" value="option2">
                                                                ഇല </label>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div style="padding-top: 20px;" class="col-sm-4">
                                                    <label>ശരതീര ശുചെതീകെരണമം &nbsp;:</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <div class="form-group">
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="optionsRadios"
                                                                    id="optionsRadios1" value="option1" checked>
                                                                കെഴതിക്കുനണഴ
                                                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <label>
                                                                <input type="radio" name="optionsRadios"
                                                                    id="optionsRadios2" value="option2">
                                                                ഇല </label>
                                                        </div>

                                                    </div>
                                                </div>



                                            </div>
                                        </div>

                                        <div class="col-sm-6">

                                            <div class="row">


                                                <div style="padding-top: 20px;" class="col-sm-4">
                                                    <label>ഉറകമം :</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <div class="form-group">
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="optionsRadios"
                                                                    id="optionsRadios1" value="option1" checked>
                                                                കെഴതിക്കുനണഴ
                                                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <label>
                                                                <input type="radio" name="optionsRadios"
                                                                    id="optionsRadios2" value="option2">
                                                                ഇല </label>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div style="padding-top: 20px;" class="col-sm-4">
                                                    <label>വശ്യഹയ :</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <div class="form-group">
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="optionsRadios"
                                                                    id="optionsRadios1" value="option1" checked>
                                                                കെഴതിക്കുനണഴ
                                                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <label>
                                                                <input type="radio" name="optionsRadios"
                                                                    id="optionsRadios2" value="option2">
                                                                ഇല </label>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-4">
                                                    <label>ആഹഹരമം :</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <div class="form-group">
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="optionsRadios"
                                                                    id="optionsRadios1" value="option1" checked>
                                                                കെഴതിക്കുനണഴ
                                                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <label>
                                                                <input type="radio" name="optionsRadios"
                                                                    id="optionsRadios2" value="option2">
                                                                ഇല </label>
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
                                <textarea id="editor4" name="observation" rows="10" cols="80">
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


        CKEDITOR.replace('editor1');
        CKEDITOR.replace('editor2');
        CKEDITOR.replace('editor4');

        $('.btnNext').click(function () {
            $('.nav-pills > .active').next('li').find('a').trigger('click');
        });
        $('.btnPrevious').click(function () {
            $('.nav-pills > .active').prev('li').find('a').trigger('click');
        });

    })

</script>

@endsection
