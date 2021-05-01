<!-- <section class="content-header">
  <h1>
    Dashboard
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active">Here</li>
  </ol>
</section> -->
<br>
<div class="row">

  <a href="{{url('/patients')}}" class="ajax-link" style="color: black;">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="ion ion-ios-people-outline"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Active Patients</span>
          <span class="info-box-number">{{$active_patients}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
  </a>
  <!-- /.col -->


  <a href="{{url('/reports/patients')}}" class="ajax-link"  style="color: black;">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="ion ion-ios-people-outline"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Total Patients</span>
          <span class="info-box-number">{{$total_patients}}<small></small></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
  </a>
  <!-- /.col -->
  <a href="{{url('/dailypatients')}}" class="ajax-link"  style="color: black;">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-yellow"><i class="ion ion-ios-medkit-outline"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Daily Clinic Care</span>
          <span class="info-box-number">{{$daily_clinic_care}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
  </a>
  <!-- /.col -->

  <!-- fix for small devices only -->
  <div class="clearfix visible-sm-block"></div>
  <a href="{{url('/bookings')}}" class="ajax-link"  style="color: black;">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon" style="background-color: #709553; color: #fff !important;"><i class="ion ion-ios-home-outline"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Daily Home Care</span>
          <span class="info-box-number">{{$daily_home_care}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
  </a>

</div>
<br>


<div class="row">

  <div class="clearfix visible-sm-block"></div>

  <a href="{{url('/bookings/pendings')}}" class="ajax-link"  style="color: black;">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-red"><i class="ion ion-ios-home-outline"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Pending Home Care</span>
          <span class="info-box-number">{{$pending_home_care}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
  </a>

  <a href="{{url('/reports/equipments')}}" class="ajax-link"  style="color: black;">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon" style="background-color: #cf9664 !important; color: #fff !important;"><i class="ion ion-ios-stopwatch-outline"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Pending Equipments</span>
          <span class="info-box-number">{{$pending_equipments}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
  </a>

</div>




<script>
  $(function() {

    $('li.treeview').removeClass("menu-open");
    $('ul.treeview-menu').css('display', 'none');

    sessionStorage.removeItem("selectedli");
    sessionStorage.removeItem("selecteditem");

  })
</script>