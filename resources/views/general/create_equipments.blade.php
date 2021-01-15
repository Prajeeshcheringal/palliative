@extends('layouts.app')

@section('content')

<form action="{{ url('/equipment/save') }}" method="POST">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">{{ ucfirst($view) }} Equipment</h3>
            <a href="{{ url('/') }}/equipments" class="pull-right btn btn-success"> <i
                    class="fa fa-arrow-left"></i></a>

        </div>
        <!-- /.box-header -->
        <div class="box-body" style="padding-left: 20px; padding-bottom: 35px">


            <div class="row">

                <div class="col-sm-6">

                    <div class="col-sm-3"> <label>Equipment :</label></div>
                    <div class="col-sm-9">
                        <input type="hidden" name="id" id="id" class="form-control"
                            value="{{ $Equipment->id ?? '' }}">
                        <input type="text" name="equipment" id="equipment" class="form-control"
                            value="{{ $Equipment->equipment ?? '' }}" placeholder="Enter ..."
                            required maxlength="40">
                    </div>
                </div>

                <div class="col-sm-6">


                    <div class="col-sm-3"> <label>Numbers :</label></div>
                    <div class="col-sm-9">
                        <input type="number" name="numbers" id="numbers" class=" form-control"
                            value="{{ $Equipment->numbers ?? '' }}" placeholder="Enter ..." required>
                    </div>
                </div>
            </div>
            <!-- <div class="row">

                <div class="col-sm-6">

                    <div style="padding-top: 20px;" class="col-sm-3"> <label>Expiry Date :</label></div>
                    <div class="col-sm-9" style="padding-top: 20px;">
                        <input type="hidden" name="id" id="id" class="form-control"
                            value="{{ $Medicine->id ?? '' }}">
                        <input type="date" name="exp_date" id="exp_date" class="form-control"
                            value="{{ $Medicine->exp_date ?? '' }}" placeholder="Enter ..."
                            required maxlength="40">
                    </div>
                </div>

                <div class="col-sm-6">


                    <div class="col-sm-3" style="padding-top: 20px;"> <label>Quantity :</label></div>
                    <div class="col-sm-9" style="padding-top: 20px;">
                        <input type="number" name="quantity" id="quantity" class=" form-control"
                            value="{{ $Medicine->quantity ?? '' }}" placeholder="Enter ..." required>
                    </div>
                </div>
            </div> -->


        </div>

        <div class="box-footer">
            @if($view != 'view')
                <button type="submit" class="btn  btn-info pull-right" style="margin-right: 20px">Save</button>
            @endif
        </div>


    </div>
</form>
@endsection
