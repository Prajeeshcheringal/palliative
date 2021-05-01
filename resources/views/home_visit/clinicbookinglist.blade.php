<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Out Patients</h3>
        <!-- <a href="{{ url('/patient/create/0') }}" class="pull-right btn btn-success"> <i class="fa fa-plus "></i></a> -->
        <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">
            <i class="fa fa-plus">&nbsp; New Registration</i> </button>
    </div>
    <!-- /.box-header -->
    <div class="box-body" style="padding-left: 20px; padding-bottom: 15Ppx">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Sl No </th>
                    <th>Reg No</th>
                    <th>Name</th>
                    <!-- <th>Phone</th> -->
                    <th>Location</th>
                    <th>Care Of</th>
                    <!-- <th>Date</th> -->
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
    <form role="form" method="POST" id="form" action="{{ url('booking/save') }}" back="{{ url('dailypatients') }}">

        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Booking</h4>
                </div>
                <div class="modal-body">
                    <p>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="pat_id" name="pat_id"  readonly>
                                    <input type="hidden" class="form-control" value="clinic" name="bok_type">
                                    <label>Name / Reg No</label>
                                    <input type="text" class="form-control" id="patient" required placeholder="Enter reg no or name">
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="">Date</label>
                                    <input type="date" class="form-control" value="{{date('Y-m-d')}}" id="date" name="date" required>

                                </div>
                            </div>
                        </div>

                        <div class="form-group">

                            <label for="">Purpose</label>
                            <textarea name="bok_note" id="" class="form-control" placeholder="Enter Note"> </textarea>
                        </div>

                    </div>
                    <!-- /.box-body -->

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="save" class="btn btn-primary">Submit</button>

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </form>

</div>
<script>
    $(function() {
    $('#example1').DataTable({
        processing: true,
        serverSide: true,
        //  sScrollX: '100%',
        ajax: {
            url: "{{ route('dailypatients') }}",
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
            // {
            //     data: 'get_patient_relation.phone',
            //     name: 'phone'
            // },

            {
                data: 'get_patient_relation.location',
                name: 'location'
            },
            {
                data: 'get_patient_relation.care_of',
                name: 'care_of'
            },
            // {
            //     data: 'date',
            //     name: 'date'
            // },
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
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    $("#patient").autocomplete({
        source: function(request, response) {
            // Fetch data
            $.ajax({
                url: "{{route('get/patients')}}",
                type: 'post',
                dataType: "json",
                data: {
                    _token: CSRF_TOKEN,
                    search: request.term
                },
                success: function(data) {
                    response(data);
                }
            });
        },
        appendTo: "#myModal",
        select: function(event, ui) {
            // Set selection
            $('#patient').val(ui.item.label); // display the selected text
            $('#pat_id').val(ui.item.value); // save selected id to input
            return false;
        }
    });

    $("#patient").click(function() {

        $("#patient").autocomplete("search", " ");

    })

    })

</script>