@extends('layouts.app')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Treatment Report</h3>
            {{-- <a href="{{ url('/patient/create/0') }}" class="pull-right btn btn-success">
                <i class="fa fa-plus "></i></a> --}}

        </div>
        <!-- /.box-header -->
        <div class="box-body" style="padding-left: 20px; padding-bottom: 15Ppx">
            <form type="post">

                {{ csrf_field() }}

                <div class="row">

                    <div class="col-sm-3">

                    </div>
                    <div class="col-xs-2">
                        <label for="">Start Date</label>
                        <input type="date" id="start_date" value="{{ date('Y-m-d') }}" class="form-control input-sm filter">

                    </div>
                    <div class="col-xs-2">
                        <label for="">End Date</label>
                        <input type="date" id="end_date" value="{{ date('Y-m-d') }}" class="form-control input-sm filter">

                    </div>
                    <div class="col-xs-2">
                        <label for=""> Type</label>
                        <select type="text" id="type" class="form-control input-sm filter">
                            <option value="">Select</option>
                            <option value="home">Home</option>
                            <option value="clinic">Clinic</option>

                        </select>
                    </div>

                </div><br>

            </form>

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Sl No </th>
                        <th>Reg No</th>
                        <th>Patient</th>
                        <th>Phone</th>
                        <th>date</th>
                        <th>Type</th>
                        <th>Disease</th>
                        <th>Category</th>
                        <th>Fiancial Status</th>
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
        $(function() {

            $('.filter').change(function() {

                mytable.ajax.reload();
            })
            var mytable = $('#example1').DataTable({
                processing: true,
                serverSide: true,
                //  sScrollX: '100%',
                ajax: {
                    url: "{{ route('treatmentreport') }}",
                    type: "post",
                    data: function(data) {
                        data.start_date = $('#start_date').val(),
                            data.end_date = $('#end_date').val(),
                            data.type = $('#type').val()
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
                        data: 'date',
                        name: 'date'
                    },

                    {
                        data: 'bok_type',
                        name: 'bok_type'
                    },
                    {
                        data: 'get_patient_relation.disease',
                        name: 'disease'
                    },
                    {
                        data: 'get_patient_relation.category',
                        name: 'category'
                    }, {
                        data: 'get_patient_relation.financial_status',
                        name: 'financial_status'
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
