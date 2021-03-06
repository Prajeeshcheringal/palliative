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
                    <th>Education</th>
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
            ajax: {
                url: "{{ route('studentreport') }}",
                type: "post"
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
                    data: 'name',
                    name: 'name'
                },

                {
                    data: 'education',
                    name: 'education'
                },
                {
                    data: 'get_patient_relation.category',
                    name: 'category'
                }, {
                    data: 'get_patient_relation.financial_status',
                    name: 'financial_status'
                },
            ]
        });

    })
</script>