@extends('layouts.app')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Patients Report</h3>
            {{-- <a href="{{ url('/patient/create/0') }}" class="pull-right btn btn-success">
                <i class="fa fa-plus "></i></a> --}}

        </div>
        <!-- /.box-header -->
        <div class="box-body" style="padding-left: 20px; padding-bottom: 15Ppx">

            <form type="post">

                {{ csrf_field() }}

                <div class="row">

                    <div class="col-sm-2">

                    </div>
                    <div class="col-xs-2">
                        <label for=""> Disease</label>
                        <select type="text" id="disease" class="form-control input-sm filter">
                            <option value="">Select</option>
                            @foreach ($diseases as $disease)

                            <option value="{{ $disease->id}}">{{$disease->disease}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="col-xs-2">
                        <label for=""> Category</label>
                        <select type="text" id="category" class="form-control input-sm filter">
                            <option value="">Select</option>
                            <option value="SC">SC</option>
                            <option value="ST">ST</option>
                            <option value="OEC">OEC</option>
                            <option value="OBC">OBC</option>
                            <option value="General">General</option>
                        </select>
                    </div>
                    <div class="col-xs-2">
                        <label for=""> Financial Status</label>
                        <select type="text" id="finance" class="form-control input-sm filter">
                            <option value="">Select</option>
                            <option value="Very Poor">Very Poor</option>
                            <option value="Poor">Poor</option>
                            <option value="Middle Class">Middle Class</option>
                            <option value="Wealthy">Wealthy</option>
                        </select>
                    </div>
                    <div class="col-xs-2">
                        <label for=""> Current Status</label>
                        <select type="text" id="current_status" class="form-control input-sm filter">

                            <option value="">Select</option>
                            <option value="Active">Active</option>
                            <option value="Closed">Closed</option>
                            <option value="Expired">Expired</option>

                        </select>
                    </div>

                </div><br>

            </form>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Sl No </th>
                        <th>Reg No</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th> Age</th>
                        <th> Care Of</th>
                        <th>Disease</th>
                        <th>Category</th>
                        <th>Current Status</th>
                        <th>Fiancial Status</th>

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
                $('.filter').change(function()
                {
                  
                    mytable.ajax.reload();
                })

           var mytable = $('#example1').DataTable({
                processing: true,
                serverSide: true,
                //  sScrollX: '100%',
                ajax: {
                    url: "{{ route('patientreport') }}",
                    type: "post",
                    data: function(data) {
                        data.category=$('#category').val(),
                        data.disease=$('#disease').val(),
                        data.finance=$('#finance').val()
                        data.current_status=$('#current_status').val()

                    }
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'reg_no',
                        name: 'reg_no'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'phone',
                        name: 'phone'
                    },
                    {
                        data: 'age',
                        name: 'age'
                    },

                    {
                        data: 'care_of',
                        name: 'care_of'
                    },
                    {
                        data: 'get_disease_relation.disease',
                        name: 'disease'
                    }, {
                        data: 'category',
                        name: 'category'
                    },
                    {
                        data: 'current_status',
                        name: 'current_status'
                    },
                    {
                        data: 'financial_status',
                        name: 'financial_status'
                    },
                ]
            });

        })

    </script>
@endsection
