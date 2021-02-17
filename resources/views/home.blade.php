@extends('layouts.app')

@section('content')

<section class="content-header">
  <h1>
    Dashboard
    <!-- <small>Optional description</small> -->
  </h1>
  <!-- <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active">Here</li>
  </ol> -->
</section>
<br>
<div class="row">


 <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
    <a href="{{url('/patients')}}">   <span class="info-box-icon bg-green"><i class="ion ion-ios-people-outline"></i></span></a>

      <div class="info-box-content">
        <span class="info-box-text">Active Patients</span>
        <span class="info-box-number">{{$active_patients}}</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->


  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
    <a href="{{url('/patients')}}"> <span class="info-box-icon bg-aqua"><i class="ion ion-ios-people-outline"></i></span></a>

      <div class="info-box-content">
        <span class="info-box-text">Total Patients</span>
        <span class="info-box-number">{{$total_patients}}<small></small></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
    <a href="{{url('/dailypatients')}}">   <span class="info-box-icon bg-yellow"><i class="fa  fa-medkit"></i></span></a>

      <div class="info-box-content">
        <span class="info-box-text">Daily Clinic Care</span>
        <span class="info-box-number">{{$daily_clinic_care}}</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <!-- fix for small devices only -->
  <div class="clearfix visible-sm-block"></div>

  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
    <a href="{{url('/bookings')}}">  <span class="info-box-icon bg-red"><i class="fa fa-home"></i></span></a>

      <div class="info-box-content">
        <span class="info-box-text">Daily Home Care</span>
        <span class="info-box-number">{{$daily_home_care}}</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

</div>
<script>
  $(function() {


    sessionStorage.removeItem("selectedli");
    sessionStorage.removeItem("selecteditem");

  })
</script>
@endsection