
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Pending Home Care</h3>
        <!-- <a href="{{ url('/patient/create/0') }}" class="pull-right btn btn-success"> <i class="fa fa-plus "></i></a> -->

    </div>
    <!-- /.box-header -->
    <div class="box-body" style="padding-left: 20px; padding-bottom: 15Ppx">




        <div class="row">

            <!-- <div class="col-sm-4">

            </div> -->
            <!-- <div class="col-xs-2">
                <label for="">Booked Date</label>
                <input type="date" id="start_date" value="{{ date('Y-m-d') }}" class="form-control input-sm filter">

            </div> -->
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
                    <th>Purpose</th>
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

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
    <form role="form" method="POST" id="form" back="{{ url('bookings/pendings') }}" action="{{ url('bookings/rebook') }}">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Re-Booking</h4>
            </div>
            <div class="modal-body">
                <p>
                    <div class="box-body">

                        <div class="row">

                            <div class="col-md-12">

                                <div class="form-group">
                                    <label for="">Date</label>
                                    <input type="date" class="form-control" id="date" name="date" required>
                                    <input type="hidden" class="form-control" id="bok_id" name="bok_id" required>


                                </div>
                            </div>

                        </div>
                        <div class="form-group">

                            <label for="">Purpose</label>
                            <textarea name="bok_note" id="bok_note" class="form-control" placeholder="Enter Note"> </textarea>
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
    function showModal(bok_id, bok_note) {
        $('#bok_id').val(bok_id);
        $('#bok_note').val(bok_note);

        $('#myModal').modal('show');

    }




    $(function() {

        var mytable = $('#example1').DataTable({
            processing: true,
            serverSide: true,
            //  sScrollX: '100%',
            ajax: {
                url: "{{ route('pendings') }}",
                type: "post",
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
