<meta name="csrf-token" content="{{ csrf_token() }}">
<form action="{{ url('/reports/equipments/save') }}" back="{{ url('/reports/equipments') }}" id="form" method="POST">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">{{ ucfirst($view) }} Equipment Report :</h3>
            <a href="{{ url('/') }}/reports/equipments" class="pull-right btn btn-success ajax-link"> <i class="fa fa-arrow-left"></i></a>

        </div>
        <!-- /.box-header -->
        <div class="box-body" style="padding-left: 20px; padding-bottom: 35px">


            <div class="row">
                @csrf
                <div class="col-sm-6">

                    <div class="col-sm-3"> <label>Patient :</label></div>
                    <div class="col-sm-9">
                        <input type="text" name="" id="patient" class="form-control" value="" placeholder="Enter ..." required maxlength="40">
                        <input type="hidden" name="pat_id" id="pat_id" class="form-control" value="" placeholder="Enter ..." required maxlength="40">
                    </div>
                </div>

                <div class="col-sm-6">


                    <div class="col-sm-3"> <label>Usage Type :</label></div>
                    <div class="col-sm-9">
                        <select name="type" id="usage_type" class="form-control" value="" placeholder="Enter ..." required>
                            <option value="Permanent">Permanent</option>
                            <option value="Temperory">Temperory</option>
                        </select>
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col-sm-6">


                    <div class="col-sm-3" style="padding-top: 20px;"> <label>Equipment :</label></div>
                    <div class="col-sm-9" style="padding-top: 20px;">
                        <select name="equip_id" id="equipmets" class=" form-control" required>
                            <option value="">Select</option>
                            @foreach($equipments as $equipment)

                            <option value="{{$equipment->id}}" stock="{{$equipment->stock}}">{{$equipment->equipment}}</option>

                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-sm-6">


                    <div class="col-sm-3" style="padding-top: 20px;"> <label>Number :</label></div>
                    <div class="col-sm-9" style="padding-top: 20px;">
                        <input type="number" name="nos" id="quantity" min="1" class="form-control" value="{{ $Medicine->quantity ?? '' }}" placeholder="Enter ..." required>
                    </div>
                </div>
            </div>

            <div class="row">


                <div class="col-sm-6">

                    <div style="padding-top: 20px;" class="col-sm-3"> <label>Current Stock :</label></div>
                    <div class="col-sm-9" style="padding-top: 20px;">
                        <input type="text" id="current_stock" class="form-control" value="{{ $Medicine->exp_date ?? '' }}" placeholder="0.0" disabled maxlength="40">
                    </div>
                </div>
                <div class="col-sm-6" id="end_date_row">

                    <div style="padding-top: 20px;" class="col-sm-3"> <label>End Date :</label></div>
                    <div class="col-sm-9" style="padding-top: 20px;">
                        <input type="date" name="end_date" id="end_date" class="form-control" value="" placeholder="Enter ..." maxlength="40">
                        <input type="hidden" name="return_status" id="return_status" class="form-control" maxlength="40">

                    </div>
                </div>

            </div>


        </div>

        <div class="box-footer">
            @if($view != 'view')
            <button type="submit" id="save" class="btn  btn-info pull-right" style="margin-right: 20px">Save</button>
            @endif
        </div>


    </div>
</form>
<script>
    $(function() {

        $('#end_date_row').hide();
        $('#return_status').val(0);

        $('#usage_type').change(function() {
            if ($('#usage_type').val() == 'Temperory') {

                $('#end_date_row').show();
                $('#end_date_row').prop("required", "true");
                $('#return_status').val(1);


            } else {
                $('#end_date_row').hide();
                $('#end_date_row').prop("required", "false");
                $('#return_status').val(0);

            }

        })

        $('#equipmets').change(function() {

            var current_stock = $("#equipmets option:selected").attr('stock');
            if (current_stock <= 0) {

                alert($("#equipmets option:selected").text() + '  is out of stock')
                $('#equipmets').val('');
            }
            $('#current_stock').val(current_stock);
            $('#quantity').attr('max', current_stock);

        })

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