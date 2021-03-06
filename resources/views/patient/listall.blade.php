<div class="box">
    <div class="box-header">
        <h3 class="box-title">Patients</h3>
        <a href="{{ url('/patient/create/0') }}" class="pull-right btn btn-success ajax-link"> <i class="fa fa-plus "></i></a>

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
                    <th width="20%">Action</th>

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
        <form role="form" method="POST" id="form" back="{{ url('patients') }}" action="{{ url('patient/delete') }}">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Confirm Date</h4>
                </div>
                <div class="modal-body">
                    <p>
                    <div class="box-body">

                        <div class="row">

                            <div class="col-md-12">

                                <div class="form-group">
                                    <label for="">Date</label>
                                    <input type="date" class="form-control" id="date" name="status_date" required>
                                    <input type="hidden" class="form-control" id="status" name="status" required>
                                    <input type="hidden" class="form-control" id="pat_id" name="pat_id" required>


                                </div>
                            </div>

                        </div>
                        <div class="form-group">

                            <label for="">Remark</label>
                            <textarea name="status_remark" id="status_remark" class="form-control" placeholder="Enter Remark"> </textarea>
                        </div>

                    </div>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="save" class="btn btn-primary">Submit</button>

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form>

    </div>
</div>



<script>
    function showModal(pat_id, status) {
        $('#pat_id').val(pat_id);
        $('#status').val(status);

        $('#myModal').modal('show');

    }
    $(function() {


        $('#example1').DataTable({
            processing: true,
            serverSide: true,
            //  sScrollX: '100%',
            ajax: {
                url: "{{ route('patients') }}",
                type: "post",
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