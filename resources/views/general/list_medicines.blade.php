
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Medicines</h3>
        <a href="{{ url('/medicine/create/0') }}" class="pull-right btn btn-success ajax-link"> <i class="fa fa-plus "></i></a>

    </div>
    <!-- /.box-header -->
    <div class="box-body" style="padding-left: 20px; padding-bottom: 15Ppx">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Sl No </th>
                    <th>Medicines</th>
                    <th>Batch No</th>
                    <th>Date of Purchase</th>
                    <th>From</th>
                    <th>Expiry Date</th>
                    <th>Quantity</th>
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
                url: "{{ route('medicines') }}",
                type: "post",
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'medicine',
                    name: 'medicine'
                },

                {
                    data: 'batch_no',
                    name: 'batch_no'
                },
                {
                    data: 'date_of_purchase',
                    name: 'date_of_purchase'
                }, {
                    data: 'from',
                    name: 'from'
                },
                {
                    data: 'exp_date',
                    name: 'exp_date'
                }, {
                    data: 'quantity',
                    name: 'quantity'
                },

                {
                    data: 'action',
                    name: 'action'
                },
            ]
        });

    })
</script>
