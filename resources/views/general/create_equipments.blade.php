

    <form action="{{ url('/equipment/save') }}" id="form" back="{{ url('/') }}/equipments" method="POST">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">{{ ucfirst($view) }} Equipment</h3>
                <a href="{{ url('/') }}/equipments" class="pull-right btn btn-success ajax-link"> <i class="fa fa-arrow-left"></i></a>

            </div>
            <!-- /.box-header -->
            <div class="box-body" style="padding-left: 20px; padding-bottom: 35px">


                <div class="row">

                    <div class="col-sm-6">

                        <div class="col-sm-3"> <label>Equipment :</label></div>
                        <div class="col-sm-9">
                            <input type="hidden" name="id" id="id" class="form-control" value="{{ $Equipment->id ?? '' }}">
                            <input type="text" name="equipment" id="equipment" class="form-control"
                                value="{{ $Equipment->equipment ?? '' }}" required maxlength="40" @if ($view != 'create')readonly @endif >
                        </div>
                    </div>

                    <div class="col-sm-6">


                        <div class="col-sm-3"> <label>Current Stock :</label></div>
                        <div class="col-sm-9">
                            <input type="number" id="current_stock" class=" form-control" @if ($view == 'create') value="0" @endif
                            value="{{ $Equipment->stock ?? '' }}" readonly placeholder="Enter ..." required>
                        </div>
                    </div>
                </div>
                @if ($view != 'view')
                    <div class="row">

                        <div class="col-sm-6">

                            <div class="col-sm-3" style="padding-top: 20px;"> <label>Add Stock :</label></div>
                            <div class="col-sm-9" style="padding-top: 20px;">

                                <input type="number" name="" id="add_stock" class="form-control" value=""
                                    placeholder="Enter ..." required maxlength="40" min="-{{ $Equipment->stock ?? '' }}">
                            </div>
                        </div>

                        <div class="col-sm-6">


                            <div class="col-sm-3" style="padding-top: 20px;"> <label>Total Stock :</label></div>
                            <div class="col-sm-9" style="padding-top: 20px;">
                                <input type="number" name="stock" id="total_stock" class=" form-control" readonly>
                            </div>
                        </div>
                    </div>
                @endif

            </div>

            <div class="box-footer">
                @if ($view != 'view')
                    <button type="submit" id="save" class="btn  btn-info pull-right" style="margin-right: 20px">Save</button>
                @endif
            </div>


        </div>
    </form>
    <script>
        $(function() {

            var current_stock = parseInt($('#current_stock').val());

            $('#add_stock').keyup(function() {

                var new_stock = parseInt($('#add_stock').val());
                var total_stock = new_stock + current_stock;
                $('#total_stock').val(total_stock);

            })
        })

    </script>

