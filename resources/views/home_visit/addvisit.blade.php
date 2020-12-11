@extends('layouts.app')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Add Home Visit</h3>
            {{-- <a href="{{ url('/patient/create/0') }}" class="pull-right btn btn-success">
                <i class="fa fa-plus "></i></a> --}}

        </div>
        <!-- /.box-header -->
        <div class="box-body" style="padding-left: 20px; padding-bottom: 15Ppx">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Sl No </th>
                        <th>Reg No</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th> Age</th>
                        <th> Address</th>
                        <th> Care Of</th>
                        <th> Action</th>

                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
        <div box-footer>

        </div>
    </div>

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Booking</h4>
                </div>
                <div class="modal-body">
                    <p>
                    <form role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Reg No</label>
                                        <input type="text" class="form-control" id="reg_no" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" id="name" readonly>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Care Of</label>
                                        <input type="text" class="form-control" id="care_of" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="">Date</label>
                                        <input type="date" class="form-control" id="date" name="date">

                                    </div>
                                </div>

                            </div>
                            <div class="form-group">

                                <label for="">Note</label>
                                <textarea name="note" id="" class="form-control" placeholder="Enter Note"> </textarea>
                            </div>

                        </div>
                        <!-- /.box-body -->

                        {{-- <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div> --}}
                    </form>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>

                    {{-- <button type="button" class="btn btn-default"
                        data-dismiss="modal">Close</button> --}}
                </div>
            </div>

        </div>
    </div>

    <script>
        $(function() {
            $('#example1').DataTable({
                processing: true,
                serverSide: true,
                //  sScrollX: '100%',
                ajax: "{{ route('addvisit') }}",
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
                        data: 'address',
                        name: 'address'
                    },
                    {
                        data: 'care_of',
                        name: 'care_of'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    },
                ]
            });
        })

    </script>
    <script>
        function showModal(name, care_of, reg_no) {
            $('#name').val(name);
            $('#care_of').val(care_of);
            $('#reg_no').val(reg_no);

            $('#myModal').modal('show');

        }

    </script>
@endsection