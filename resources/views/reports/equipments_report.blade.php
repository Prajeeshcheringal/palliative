
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Equipments Report</h3>
             <a href="{{ url('/reports/equipments/create/0') }}" class="pull-right btn btn-success ajax-link">
                <i class="fa fa-plus "></i></a>

        </div>
        <!-- /.box-header -->
        <div class="box-body" style="padding-left: 20px; padding-bottom: 15Ppx">
            <form type="post">

                {{ csrf_field() }}

                <div class="row">

                    <div class="col-sm-3">

                    </div>
                    <!-- <div class="col-xs-2">
                        <label for="">Start Date</label>
                        <input type="date" id="start_date" value="{{ date('Y-m-d') }}" class="form-control input-sm filter">

                    </div>
                    <div class="col-xs-2">
                        <label for="">End Date</label>
                        <input type="date" id="end_date" value="{{ date('Y-m-d') }}" class="form-control input-sm filter">

                    </div> -->
                    <div class="col-xs-2">
                        <label for=""> Equipments</label>
                        <select name="equip_id" id="equip_id" class=" form-control filter" required>
                            <option value="">Select</option>
                            @foreach($equipments as $equipment)

                            <option value="{{$equipment->id}}" stock="{{$equipment->stock}}">{{$equipment->equipment}}</option>

                            @endforeach
                        </select>
                    </div>
                    <div class="col-xs-2">
                    <label for=""> Return Status</label>
                        <select name="type" id="return_status" class="form-control filter" value="" placeholder="Enter ..." required>
                            <option value="">Select</option>
                            <option value="3">Out of Date</option>
                            <option value="0">No Return</option>
                            <option value="1">Pending</option>
                            <option value="2">Returned</option>

                        </select>
                    </div>
                    <div class="col-xs-2">
                    <label for=""> Usage Type </label>
                        <select name="type" id="usage_type" class="form-control filter" value="" placeholder="Enter ..." required>
                            <option value="">Select</option>
                            <option value="Permanent">Permanent</option>
                            <option value="Temperory">Temperory</option>
                        </select>
                    </div>
                   

                </div><br>

            </form>

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Sl No </th>
                        <th>Reg No</th>
                        <th>Patient</th>
                        <th>Phone</th>
                        <th>date</th>
                        <th>Equipment</th>
                        <th>Nos</th>
                        <th>End Date</th>
                        <th>Usage Type</th>
                        <th>Return Status</th>

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
                    url: "{{ route('reports/equipments') }}",
                    type: "post",
                    data: function(data) {
                            //data.start_date = $('#start_date').val(),
                            //data.end_date = $('#end_date').val(),
                            data.return_status = $('#return_status').val()
                            data.usage_type = $('#usage_type').val()
                            data.equip_id = $('#equip_id').val()
                    }
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
                        data: 'date',
                        name: 'date'
                    },

                    {
                        data: 'equipment',
                        name: 'equipment'
                    },
                    {
                        data: 'nos',
                        name: 'nos'
                    },
                    {
                        data: 'end_date',
                        name: 'end_date'    
                    },
                    {
                        data: 'type',
                        name: 'type'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    }
                ]
            });

        })

    </script>

