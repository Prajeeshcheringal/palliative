
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Daily Volunteers</h3>
        <a href="{{ url('/daily_volunteers/create/0') }}" class="pull-right btn btn-success ajax-link"> <i class="fa fa-plus "></i></a>

    </div>
    <!-- /.box-header -->
    <div class="box-body" style="padding-left: 20px; padding-bottom: 15Ppx">
        <div class="row">

            <div class="col-sm-4">

            </div>
            <div class="col-xs-2">
                <label for="">Booked Date</label>
                <input type="date" id="date" value="{{ date('Y-m-d') }}" class="form-control input-sm filter">

            </div>


        </div>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Sl No </th>
                    <th>Volunteer Id</th>
                    <th>Name</th>
                    <th>phone</th>
                    <th>Address</th>
                    <th>Driving</th>
                    <th>Gender</th>
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
                url: "{{ route('daily_volunteers') }}",
                type: "post",
                data: function(data) {

                    data.date = $('#date').val()

                }
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'vol_id',
                    name: 'vol_id'
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
                    data: 'address',
                    name: 'address'
                }, {
                    data: 'role',
                    name: 'role'
                },
                {
                    data: 'gender',
                    name: 'gender'
                },
                {
                    data: 'action',
                    name: 'action'
                },
            ]
        });

    })
</script>
