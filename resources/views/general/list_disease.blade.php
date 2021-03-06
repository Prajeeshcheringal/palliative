
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Diseases</h3>
        <a href="{{ url('/disease/create/0') }}" class="pull-right btn btn-success ajax-link"> <i class="fa fa-plus "></i></a>

    </div>
    <!-- /.box-header -->
    <div class="box-body" style="padding-left: 20px; padding-bottom: 15Ppx">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Sl No </th>
                    <th>Disease</th>
                    <th>Details</th>
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
        $('#example1').DataTable({
            processing: true,
            serverSide: true,
            //  sScrollX: '100%',
            ajax: {
                url: "{{ route('diseases') }}",
                type: "post",
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'disease',
                    name: 'disease'
                },

                {
                    data: 'details',
                    name: 'details'
                },

                {
                    data: 'action',
                    name: 'action'
                },
            ]
        });

    })
</script>
