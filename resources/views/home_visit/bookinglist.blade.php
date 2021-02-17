@extends('layouts.app')

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Daily Home Care</h3>
        <!-- <a href="{{ url('/patient/create/0') }}" class="pull-right btn btn-success"> <i class="fa fa-plus "></i></a> -->

    </div>
    <!-- /.box-header -->
    <div class="box-body" style="padding-left: 20px; padding-bottom: 15Ppx">




        <div class="row">

            <div class="col-sm-4">

            </div>
            <div class="col-xs-2">
                <label for="">Booked Date</label>
                <input type="date" id="start_date" value="{{ date('Y-m-d') }}" class="form-control input-sm filter">

            </div>
            <!-- <div class="col-xs-2">
                    <label for="">End Date</label>
                    <input type="date" id="end_date" value="{{ date('Y-m-d') }}" class="form-control input-sm filter">

                </div> -->
            <!-- <div class="col-xs-2">
                    <label for=""> Type</label>
                    <select type="text" id="type" class="form-control input-sm filter">
                        <option value="">Select</option>
                        <option value="home">Home</option>
                        <option value="clinic">Clinic</option>

                    </select>
                </div> -->

        </div>

        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Sl No </th>
                    <th>Reg No</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Care Of</th>
                    <th>Date</th>
                    <th>Note</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
    <div box-footer>
    </div>
</div>
<script>
    document.getElementById("start_date").min = "{{$two_days_ago}}"

    $(function() {

        $('.filter').change(function() {

            mytable.ajax.reload();
        })


        var mytable = $('#example1').DataTable({
            processing: true,
            serverSide: true,
            //  sScrollX: '100%',
            ajax: {
                url: "{{ route('bookings') }}",
                type: "post",
                data: function(data) {

                    data.book_date = $('#start_date').val()

                }
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'get_patient_relation.reg_no',
                    name: 'reg_no'
                },
                {
                    data: 'get_patient_relation.name',
                    name: 'name'
                },
                {
                    data: 'get_patient_relation.phone',
                    name: 'phone'
                },

                {
                    data: 'get_patient_relation.address',
                    name: 'address'
                },
                {
                    data: 'get_patient_relation.care_of',
                    name: 'care_of'
                }, {
                    data: 'date',
                    name: 'date'
                },
                {
                    data: 'bok_note',
                    name: 'bok_note'
                },
                {
                    data: 'action',
                    name: 'action'
                },
            ]
        });

    })
</script>
@endsection