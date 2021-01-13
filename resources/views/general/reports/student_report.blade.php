@extends('layouts.app')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Students Report</h3>
            {{-- <a href="{{ url('/patient/create/0') }}" class="pull-right btn btn-success"> <i class="fa fa-plus "></i></a> --}}

        </div>
        <!-- /.box-header -->
        <div class="box-body" style="padding-left: 20px; padding-bottom: 15Ppx">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Sl No </th>
                        <th>Reg No</th>
                        <th>Patient</th>
                        <th>Phone</th>
                        <th>Student</th>
                        <th>Category</th>
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
            $('#example1').DataTable({
                processing: true,
                serverSide: true,
                //  sScrollX: '100%',
                ajax: "{{ route('studentreport') }}",
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
                    }, {
                        data: 'financial_status',
                        name: 'financial_status'
                    },
                ]
            });

        })

    </script>
@endsection
