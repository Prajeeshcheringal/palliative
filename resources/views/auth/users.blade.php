@extends('layouts.app')

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Users</h3>
        <a href="{{ url('/register') }}" class="pull-right btn btn-success"> <i class="fa fa-plus "></i></a>

    </div>
    <!-- /.box-header -->
    <div class="box-body" style="padding-left: 20px; padding-bottom: 15Ppx">


        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Sl No </th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Phone</th>
                    <!-- <th>Note</th>
                    <th>Action</th> -->

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

      

        var mytable = $('#example1').DataTable({
            processing: true,
            serverSide: true,
            //  sScrollX: '100%',
            ajax:"{{ route('users') }}",
            
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'role',
                    name: 'role'
                },

                {
                    data: 'phone',
                    name: 'phone'
                },
              
                // {
                //     data: 'action',
                //     name: 'action'
                // },
            ]
        });

    })
</script>
@endsection