
<meta name="csrf-token" content="{{ csrf_token() }}">
<form method="post" id="form" back="{{url('/bookings')}}" action="{{url('/bookings/add_data/save')}}">
    <input type="hidden" name="bok_id" value="{{$bok_id}}">
    <input type="hidden" name="pat_id" value="{{$pat_id}}">
    <input type="hidden" name="status" value="1">

    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Patient : <b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                {{ $patient->name ?? '' }} </b> </h3>

                        <div class="box-tools">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
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
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
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
                                <a role="button"  class="btn  btn-success align-bottom ajax-link" href="{{ url('bookings') }}">
                                    <span class="glyphicon glyphicon-arrow-left" title="back"></span>
                                </a>
                            </span>
                            <div class="pull-right">
                                <button type='submit'id="save" data-toggle="tooltip" title='Save' class='btn btn-info  btn-flat'>
                                    <i class="glyphicon glyphicon-hdd"></i></button>
                            </div>
                        </div>

                        <div class="active tab-pane" style=" margin-bottom:20px " id="activity">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="box-header with-border mailbox-controls">
                                        <h3 class="box-title">Patient Details</h3>
                                        <div class="btn-group pull-right">
                                            <button type="button" class="btn btnPrevious btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                                            <button type="button" class="btnNext btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">

                                        <div class="row">

                                            <div class="col-sm-6">

                                                <div class="row">

                                                    <div class="col-sm-3"> <label>Reg no :</label></div>
                                                    <div class="col-sm-8">
                                                        <input type="hidden" name="id" id="id" class="form-control" value="{{ $patient->id ?? '' }}">
                                                        <input type="text" name="reg_no" id="reg_no" class=" form-control" value="{{ $patient->reg_no ?? '' }}" placeholder="Enter ..." required>
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
                                                    <input type="text" name="name" id="name" class="form-control" value="{{ $patient->name ?? '' }}" placeholder="Enter ..." required maxlength="40">
                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-3"> <label>Age
                                                        :</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <input type="text" name="age" id="age" class="form-control " value="{{ $patient->age ?? '' }}" placeholder="Enter ..." required maxlength="3">
                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-3"> <label>Phone
                                                        :</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <input type="text" name="phone" id="phone" value="{{ $patient->phone ?? '' }}" class="form-control" placeholder="Enter ..." required minlength="10" maxlength="10">
                                                </div>
                                                <div style="padding-top: 20px;" class="col-sm-3"> <label>Care of
                                                        :</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <input type="text" name="care_of" value="{{ $patient->care_of ?? '' }}" id="care_of" class="form-control" placeholder="Enter ..." required maxlength="40">
                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-3"> <label>Address
                                                        :</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <textarea type="text" name="address" id="address" class="form-control" placeholder="Enter ..." required>{{ $patient->address ?? '' }}</textarea>
                                                </div>



                                            </div>
                                        </div>

                                        <div class="col-sm-6">

                                            <div class="row">

                                                <div class="col-sm-4"> <label>Ref No :</label></div>
                                                <div class="col-sm-8">
                                                    <input type="text" name="ref_no" id="ref_no" class=" form-control" value="{{ $patient->ref_no ?? '' }}" placeholder="Enter ...">
                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-4">
                                                    <label>Organization :</label>
                                                </div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <input type="text" name="organization" id="organization" value="{{ $patient->organization ?? '' }}" class="form-control" placeholder="Enter ...">
                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>Panchayath
                                                        :</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <input type="text" name="panchayath" id="panchayath" value="{{ $patient->panchayath ?? '' }}" class="form-control " placeholder="Enter ..." required>
                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>Pincode
                                                        :</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <input type="text" name="pincode" id="pincode" value="{{ $patient->pincode ?? '' }}" class="form-control" placeholder="Enter ..." required>
                                                </div>
                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>Volunteer
                                                        :</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <input type="text" name="volunteer" id="volunteer" value="{{ $patient->volunteer ?? '' }}" class="form-control" placeholder="Enter ...">
                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>Location
                                                        :</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">

                                                    <textarea type="text" name="address" id="address" class="form-control" placeholder="Enter ..." required>{{ $patient->location ?? '' }}</textarea>


                                                </div>

                                            </div>
                                        </div>



                                    </div>


                                </div>
                                <div class="box-footer with-border mailbox-controls">
                                    <div class="btn-group pull-right">
                                        <button type="button" class="btn btnPrevious btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                                        <button type="button" class="btnNext btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
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
                                        <button type="button" class="btn btnPrevious btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                                        <button type="button" class="btn btnNext btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                                    </div>
                                </div>
                                <div class="box-body" style="margin-top: 15px;margin-bottom:50px;">
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th>Medicine</th>
                                                <th>Dose(Daily)</th>
                                                <th>period [Days]</th>
                                                <th>Purpose</th>
                                                <!-- <th>Usage</th> -->
                                                <!-- <th>Result</th> -->
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="prescrow">
                                            <tr id="add">
                                                <td class="col-lg-3"><input id="medicine" type="text" class="form-control " placeholder="Medicine" />
                                                <td class="col-lg-2">
                                                    <input id="dose" name="" type="text" class="form-control"  placeholder="Dose"/>
                                                        <!-- <option value="">Select</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">5</option>


                                                    </select> -->
                                                </td>
                                                <td class="col-lg-3"><input id="period" type="number" class="form-control" placeholder="Period" /></td>

                                                <td class="col-lg-3"><input id="purpose" type="text" class="form-control" placeholder="Purpose" /></td>
                                               
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
                                        <button type="button" class="btn btnPrevious btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                                        <button type="button" class="btnNext btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
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
                                        <button type="button" class="btn btnPrevious btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                                        <button type="button" class="btn btnNext btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
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
                                                <td class="col-lg-3"><input id="team_name" type="text" class="form-control " placeholder="Name" /></td>
                                                <td class="col-lg-3">
                                                    <select id="role" class="form-control ">
                                                        <option value="">Select</option>
                                                        <option value="Doctor">Doctor</option>
                                                        <option value="Nurse">Nurse</option>
                                                        <option value="Driver">Driver</option>
                                                        <option value="Volunteer">Volunteer</option>


                                                    </select>
                                                </td>
                                                <td class="col-lg-3"><input id="contact_no" name="contact_no" type="text" class="form-control" placeholder="Contact No" /></td>


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
                                        <button type="button" class="btn btnPrevious btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                                        <button type="button" class="btnNext btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
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
                                <button type="button" class="btn btnPrevious btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                                <button type="button" class="btn btnNext btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                            </div>
                        </div>
                        <div class="box-body" style="margin-top: 15px;margin-bottom:50px;">


                            <!-- /.box-header -->
                            <div class="box-body">
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
                                                <table class="table table-bordered table-stripped" style="margin-left: 115px; margin-right:30px;    width: 70%">
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
                                                                <input type="text"  readonly class="form-control" value="{{ $prev_book->bp ?? '' }}" placeholder="Enter ..." required>
                                                            </div>


                                                            <div style="padding-top: 20px;" class="col-sm-4">
                                                                <label>Temperature:</label>
                                                            </div>
                                                            <div style="padding-top: 20px;" class="col-sm-8">
                                                                <input type="text"  readonly class="form-control" value="{{ $prev_book->tempreture ?? '' }}" placeholder="Enter ..." required maxlength="40">
                                                            </div>

                                                            <div style="padding-top: 20px;" class="col-sm-4"> <label>General State:
                                                                </label></div>
                                                            <div style="padding-top: 20px;" class="col-sm-8">
                                                                <textarea type="text"  readonly class="form-control" placeholder="പൊതു അവസ്ഥ " required>{{$prev_book->general_state ?? '' }}</textarea>

                                                            </div>


                                                            <div style="padding-top: 20px;" class="col-sm-4"> <label>Surroundings
                                                                    :
                                                                </label></div>
                                                            <div style="padding-top: 20px;" class="col-sm-8">
                                                                <textarea type="text"  readonly class="form-control" placeholder="പരിസര ശുചിത്വം" required>{{ $prev_book->surroundings ?? '' }}</textarea>

                                                            </div>
                                                            <div style="padding-top: 20px;" class="col-sm-4"> <label>Skin/Nail :
                                                                </label></div>
                                                            <div style="padding-top: 20px;" class="col-sm-8">
                                                                <textarea type="text"  class="form-control" readonly placeholder="തൊലി / നഖം" required>{{ $prev_book->skin ?? '' }}</textarea>

                                                            </div>
                                                            <div style="padding-top: 20px;" class="col-sm-4"> <label>Head /Hair :
                                                                </label>
                                                            </div>
                                                            <div style="padding-top: 20px;" class="col-sm-8">
                                                                <textarea type="text"  class="form-control" readonly placeholder="തല /മുടി" required>{{ $prev_book->head ?? '' }}</textarea>

                                                            </div>



                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">

                                                        <div class="row">

                                                            <div class="col-sm-4"> <label>Pulse (bpm):</label></div>
                                                            <div class="col-sm-8">
                                                                <input type="text" readonly  class="form-control" value="{{ $prev_book->pulse ?? '' }}" placeholder="Enter ...">
                                                            </div>

                                                            <div style="padding-top: 20px;" class="col-sm-4"> <label>Hobbies
                                                                    :</label></div>
                                                            <div style="padding-top: 20px;" class="col-sm-8">
                                                                <input type="text" readonly  class="form-control" value="{{ $prev_book->hobbies ?? '' }}" placeholder="സമയ വിനയോഗം " required maxlength="40">
                                                            </div>



                                                            <div style="padding-top: 20px;" class="col-sm-4"> <label>Mouth : </label>
                                                            </div>
                                                            <div style="padding-top: 20px;" class="col-sm-8">
                                                                <textarea placeholder="വായ " readonly type="text"  class="form-control">{{ $prev_book->mouth ?? ''}}</textarea>

                                                            </div>

                                                            <div style="padding-top: 20px;" class="col-sm-4"> <label>Sex :
                                                                </label>
                                                            </div>
                                                            <div style="padding-top: 20px;" class="col-sm-8">
                                                                <textarea type="text"  readonly class="form-control" placeholder="പെരിനിയം" required>{{ $prev_book->sex ?? '' }}</textarea>

                                                            </div>

                                                            <div style="padding-top: 20px;" class="col-sm-4"> <label>Hidden Area :
                                                                </label>
                                                            </div>
                                                            <div style="padding-top: 20px;" class="col-sm-8">
                                                                <textarea type="text" readonly  class="form-control" placeholder="ഹിഡൻ ഏരിയകൾ" required>{{ $prev_book->hidden_area ?? '' }}</textarea>

                                                            </div>
                                                            <div style="padding-top: 20px;" class="col-sm-4"> <label>Other Treatment
                                                                    : </label>
                                                            </div>
                                                            <div style="padding-top: 20px;" class="col-sm-8">
                                                                <textarea type="text" readonly  class="form-control" placeholder="മറ്റ് ചികിത്സാ രീതികൾ" required>{{ $prev_book->other_treatment ?? '' }}</textarea>

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
                                                                            <input type="radio" name="foods{{$prev_book->id}}" readonly  checked>
                                                                            കൃത്യമായി കഴിക്കുന്നുണ്ട്
                                                                        </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        <label>
                                                                            <input type="radio" name="foods{{$prev_book->id}}" readonly  @if($prev_book->food == 0) checked @endif >
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
                                                                            <input type="radio" name="waters{{$prev_book->id}}" readonly  checked>
                                                                            കൃത്യമായി കഴിക്കുന്നുണ്ട്
                                                                        </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        <label>
                                                                            <input type="radio" name="waters{{$prev_book->id}}" readonly  @if($prev_book->water == 0) checked @endif>
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
                                                                            <input type="radio" name="urines{{$prev_book->id}}" readonly  checked>
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
                                                                            <input type="radio" name="constipations{{$prev_book->id}}"  checked>
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
                                                                            <input type="radio" name="body_cleanings{{$prev_book->id}}"  checked>
                                                                            കൃത്യമായി നടക്കുന്നുണ്ട്
                                                                        </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        <label>
                                                                            <input type="radio" name="body_cleanings{{$prev_book->id}}"  @if($prev_book->body_cleaning == 0) checked @endif>
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

                        </div>
                        <div class="box-header with-border mailbox-controls">
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btnPrevious btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                                <button type="button" class="btnNext btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>











                    <div class="tab-pane" id="doctornote">
                        <div class="col-md-6">


                        </div>

                        <div class="box-header with-border mailbox-controls">
                            <h3 class="box-title">Doctor's Notes</h3>
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btnPrevious btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                                <button type="button" class="btn btnNext btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
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
                                        <button type="button" class="btn btnPrevious btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                                        <button type="button" class="btn btnNext btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
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
                                <button type="button" class="btn btnPrevious btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                                <button type="button" class="btn btnNext btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
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
                                        <button type="button" class="btn btnPrevious btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                                        <button type="button" class="btn btnNext btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
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
                                <button type="button" class="btn btnPrevious btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                                <button type="button" class="btn btnNext btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
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
                                                    <input type="text" name="bp" class="form-control" value="{{ $booking->bp ?? '' }}" placeholder="Enter ..." >
                                                </div>


                                                <div style="padding-top: 20px;" class="col-sm-4">
                                                    <label>Temperature:</label>
                                                </div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <input type="text" name="tempreture" class="form-control" value="{{ $booking->tempreture ?? '' }}" placeholder="Enter ..."  maxlength="40">
                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>General State:
                                                    </label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <textarea type="text" name="general_state" class="form-control" placeholder="പൊതു അവസ്ഥ " >{{$booking->general_state ?? '' }}</textarea>

                                                </div>


                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>Surroundings
                                                        :
                                                    </label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <textarea type="text" name="surroundings" class="form-control" placeholder="പരിസര ശുചിത്വം" >{{ $booking->surroundings ?? '' }}</textarea>

                                                </div>
                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>Skin/Nail :
                                                    </label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <textarea type="text" name="skin" class="form-control" placeholder="തൊലി / നഖം" >{{ $booking->skin ?? '' }}</textarea>

                                                </div>
                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>Head /Hair :
                                                    </label>
                                                </div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <textarea type="text" name="head" class="form-control" placeholder="തല /മുടി" >{{ $booking->head ?? '' }}</textarea>

                                                </div>



                                            </div>
                                        </div>

                                        <div class="col-sm-6">

                                            <div class="row">

                                                <div class="col-sm-4"> <label>Pulse (bpm):</label></div>
                                                <div class="col-sm-8">
                                                    <input type="text" name="pulse" class="form-control" value="{{ $booking->pulse ?? '' }}" placeholder="Enter ...">
                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>Hobbies
                                                        :</label></div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <input type="text" name="hobbies" class="form-control" value="{{ $booking->hobbies ?? '' }}" placeholder="സമയ വിനയോഗം "  maxlength="40">
                                                </div>



                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>Mouth : </label>
                                                </div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <textarea placeholder="വായ " type="text" name="mouth" class="form-control">{{ $booking->mouth ?? ''}}</textarea>

                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>Sex :
                                                    </label>
                                                </div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <textarea type="text" name="sex" class="form-control" placeholder="പെരിനിയം" >{{ $booking->sex ?? '' }}</textarea>

                                                </div>

                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>Hidden Area :
                                                    </label>
                                                </div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <textarea type="text" name="hidden_area" class="form-control" placeholder="ഹിഡൻ ഏരിയകൾ" >{{ $booking->hidden_area ?? '' }}</textarea>

                                                </div>
                                                <div style="padding-top: 20px;" class="col-sm-4"> <label>Other Treatment
                                                        : </label>
                                                </div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <textarea type="text" name="other_treatment" class="form-control" placeholder="മറ്റ് ചികിത്സാ രീതികൾ" >{{ $booking->other_treatment ?? '' }}</textarea>

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
                                                    <label>ആഹാരം :</label>
                                                </div>
                                                <div style="padding-top: 20px;" class="col-sm-8">
                                                    <div class="form-group">
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="food" value="1" checked>
                                                                കൃത്യമായി കഴിക്കുന്നുണ്ട്
                                                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <label>
                                                                <input type="radio" name="food" value="0" @if($booking->food == 0) checked @endif >
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
                                                                <input type="radio" name="water" value="1" checked>
                                                                കൃത്യമായി കഴിക്കുന്നുണ്ട്
                                                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <label>
                                                                <input type="radio" name="water" value="0" @if($booking->water == 0) checked @endif>
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
                                                                <input type="radio" name="urine" value="1" checked>
                                                                കൃത്യമായി നടക്കുന്നുണ്ട്
                                                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <label>
                                                                <input type="radio" name="urine" value="0" @if($booking->urine == 0) checked @endif>
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
                                                                <input type="radio" name="constipation" value="1" checked>
                                                                കൃത്യമായി നടക്കുന്നുണ്ട്
                                                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <label>
                                                                <input type="radio" name="constipation" value="0" @if($booking->constipation == 0) checked @endif >
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
                                                                <input type="radio" name="exercise" value="1" checked>
                                                                കൃത്യമായി നടക്കുന്നുണ്ട്
                                                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <label>
                                                                <input type="radio" name="exercise" value="0" @if($booking->constipation == 0) checked @endif>
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
                                                                <input type="radio" name="sleep" value="1" checked>
                                                                ആവശിയതിനുണ്ട്
                                                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                                            <label>
                                                                <input type="radio" name="sleep" value="0" @if($booking->sleep == 0) checked @endif>
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
                                                                <input type="radio" name="body_cleaning" value="1" checked>
                                                                കൃത്യമായി നടക്കുന്നുണ്ട്
                                                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <label>
                                                                <input type="radio" name="body_cleaning" value="0" @if($booking->body_cleaning == 0) checked @endif>
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
                                            <button type="button" class="btn btnPrevious btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                                            <button type="button" class="btn btnNext btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
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
                                <button type="button" class="btn btnPrevious btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                                <button type="button" class="btn btnNext btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
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
                                        <button type="button" class="btn btnPrevious btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                                        <button type="button" class="btn btnNext btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
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
    $(function() {

        @foreach($prescription as $presc)

        presc('{{$presc->medicine}}', '{{$presc->dose}}','{{$presc->period}}' ,'{{$presc->purpose}}')

        @endforeach

        @foreach($team_members as $members)

        addteam('{{$members->team_name}}', '{{$members->role}}', '{{$members->contact_no}}')

        @endforeach


        CKEDITOR.replace('editor1');
        CKEDITOR.replace('editor2');
        CKEDITOR.replace('editor4');

        $('.btnNext').click(function() {
            $('.nav-pills > .active').next('li').find('a').trigger('click');
        });
        $('.btnPrevious').click(function() {
            $('.nav-pills > .active').prev('li').find('a').trigger('click');
        });

        $('.prescbtn').click(function() {

            var medicine = $('#medicine').val();
            var dose = $('#dose').val();
            var purpose = $('#purpose').val();
            var period = $('#period').val();
            if (medicine && dose && purpose && period) {

                presc(medicine, dose,period, purpose);

                $('#medicine').val('');
                $('#dose').val('');
                $('#purpose').val('');
                $('#period').val('');
            }

        });

        $(document).on('click', '.remove', function() {
            $(this).closest('tr').remove();

        });

        $('.teambtn').click(function() {
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

        $(document).on('click', '.teamremove', function() {
            $(this).closest('tr').remove();

        });

    })
   

    function presc(medicine, dose,period,purpose) {

        var newrow =
            '<tr id="add">'+
            '<td class="col-lg-3"><input  type="text" class="form-control" name="medicine[]" placeholder="Medicine" value="' + medicine + '" /></td>' +
            '<td class="col-lg-1"><input  name="dose[]" value="' + dose + '"  class="form-control"/></td>' +
            '<td class="col-lg-2"><input name ="period[]" value="' + period + '"  class="form-control col-lg-1"></td>' +
            '<td class="col-lg-3"><input id="qty" name="purpose[]" value="' + purpose +'"  type="text" class="form-control" placeholder="Purpose" /></td>' +
            '<td><button data-toggle="tooltip" type="button" title="Remove" class="btn btn-danger remove" href="#"><span class="glyphicon glyphicon-remove"></span></button></td></tr>';
        $('#prescrow').append(newrow);

    }

    function addteam(name, role, contact_no) {

        var newrow =
            '<tr id=""><td class="col-lg-3"><input name="team_name[]" value="' + name + '" type="text" class="form-control " placeholder="Name" /></td>' +
            '<td class="col-lg-3"><input value="' + role + '" name="role[]" class="form-control "/></td>' +
            '<td class="col-lg-3"><input value="' + contact_no + '"  type="text" name="contact_no[]" class="form-control" placeholder="Contact No" /></td>' +
            '<td class="col-lg-1"><a title="Remove" class="btn btn-danger teamremove" href="#"> <span class="glyphicon glyphicon-remove"></span>' +
            '</a></td> </tr>';
        $('#teamrow').append(newrow);

    }
</script>

