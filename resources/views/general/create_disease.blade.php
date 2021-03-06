

<form action="{{ url('/disease/save') }}" back="{{ url('/diseases') }}" id="form" method="POST">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">{{ ucfirst($view) }} Disease:</h3>
            <a href="{{ url('/') }}/diseases" class="pull-right btn btn-success ajax-link"> <i class="fa fa-arrow-left"></i></a>

        </div>
        <!-- /.box-header -->
        <div class="box-body" style="padding-left: 20px; padding-bottom: 35px">


            <div class="row">

                <div class="col-sm-6">

                    <div class="col-sm-3"> <label>Disease :</label></div>
                    <div class="col-sm-9">
                        <input type="hidden" name="id" id="id" class="form-control" value="{{ $Disease->id ?? '' }}">
                        <input type="text" name="disease" id="disease" class="form-control" value="{{ $Disease->disease ?? '' }}" placeholder="Enter ..." required maxlength="40">
                    </div>
                </div>

                <div class="col-sm-6">


                    <div class="col-sm-3"> <label>Details :</label></div>
                    <div class="col-sm-9">
                        <input type="text" name="details" id="details" class=" form-control" value="{{ $Disease->details ?? '' }}" placeholder="Enter ...">
                    </div>
                </div>
            </div>


        </div>

        <div class="box-footer">
            @if ($view != 'view')
            <button type="submit" class="btn  btn-info pull-right" id="save" style="margin-right: 20px">Save</button>
            @endif
        </div>


    </div>
</form>



