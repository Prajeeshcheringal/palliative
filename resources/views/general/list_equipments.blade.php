
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Equipments</h3>
        <a href="{{ url('/equipment/create/0') }}" class="pull-right btn btn-success ajax-link"> <i class="fa fa-plus "></i></a>

    </div>
    <!-- /.box-header -->
    <div class="box-body" style="padding-left: 20px; padding-bottom: 15Ppx">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Sl No </th>
                    <th>Equipments</th>
                    <th>Current Stock</th>
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
                url: "{{ route('equipments') }}",
                type: "post",
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'equipment',
                    name: 'equipment'
                },

                {
                    data: 'stock',
                    name: 'stock'
                },

                {
                    data: 'action',
                    name: 'action'
                },
            ]
        });

    })
</script>
