

<form action="{{ url('/medicine/save') }}" id="form" back="{{ url('/medicines') }}" method="POST">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">{{ ucfirst($view) }} Medicine:</h3>
            <a href="{{ url('/') }}/medicines" class="pull-right btn btn-success ajax-link"> <i class="fa fa-arrow-left"></i></a>

        </div>
        <!-- /.box-header -->
        <div class="box-body" style="padding-left: 20px; padding-bottom: 35px">


            <div class="row">

                <div class="col-sm-6">

                    <div class="col-sm-3"> <label>Medicine :</label></div>
                    <div class="col-sm-9">
                        <input type="hidden" name="id" id="id" class="form-control" value="{{ $Disease->id ?? '' }}">
                        <input type="text" name="medicine" id="medicine" class="form-control" value="{{ $Medicine->medicine ?? '' }}" placeholder="Enter ..." required maxlength="40">
                    </div>
                </div>

                <div class="col-sm-6">


                    <div class="col-sm-3"> <label>Batch No :</label></div>
                    <div class="col-sm-9">
                        <input type="text" name="batch_no" id="batch_no" class=" form-control" value="{{ $Medicine->batch_no ?? '' }}" placeholder="Enter ..." required>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-sm-6">

                    <div style="padding-top: 20px;" class="col-sm-3"> <label>Expiry Date :</label></div>
                    <div class="col-sm-9" style="padding-top: 20px;">
                        <input type="hidden" name="id" id="id" class="form-control" value="{{ $Medicine->id ?? '' }}">
                        <input type="date" name="exp_date" id="exp_date" class="form-control" value="{{ $Medicine->exp_date ?? '' }}" placeholder="Enter ..." required maxlength="40">
                    </div>
                </div>

                <div class="col-sm-6">


                    <div class="col-sm-3" style="padding-top: 20px;"> <label>Quantity :</label></div>
                    <div class="col-sm-9" style="padding-top: 20px;">
                        <input type="number" name="quantity" id="quantity" class=" form-control" value="{{ $Medicine->quantity ?? '' }}" placeholder="Enter ..." required>
                    </div>
                </div>
            </div>

            <div class="row">



                <div class="col-sm-6">


                    <div class="col-sm-3" style="padding-top: 20px;"> <label>From :</label></div>
                    <div class="col-sm-9" style="padding-top: 20px;">
                        <input type="text" name="from" id="from" class=" form-control" value="{{ $Medicine->from ?? '' }}" placeholder="Enter ..." required>
                    </div>
                </div>
                <div class="col-sm-6">

                    <div style="padding-top: 20px;" class="col-sm-3"> <label>Purchase Date :</label></div>
                    <div class="col-sm-9" style="padding-top: 20px;">
                        <input type="date" name="date_of_purchase" id="date_of_purchase" class="form-control" value="{{ $Medicine->date_of_purchase ?? '' }}" placeholder="Enter ..." required maxlength="40">
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
