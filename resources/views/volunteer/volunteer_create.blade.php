<form action="{{ url('/volunteer/save') }}" back="{{ url('/') }}/volunteers" id="form" method="POST">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">{{ ucfirst($view) }} Volunteer:</h3>
            <a href="{{ url('/') }}/volunteers" class="pull-right btn btn-success ajax-link"> <i class="fa fa-arrow-left"></i></a>

        </div>
        <!-- /.box-header -->
        <div class="box-body" style="padding-left: 20px; padding-bottom: 35px">


            <div class="row">

                <div class="col-sm-6">

                    <div class="col-sm-3"> <label>Name :</label></div>
                    <div class="col-sm-9">
                        <input type="hidden" name="id" id="id" class="form-control" value="{{ $volunteer->id ?? '' }}">
                        <input type="text" name="name" id="name" class="form-control" value="{{ $volunteer->name ?? '' }}" placeholder="Enter ..." required maxlength="40">
                    </div>
                </div>

                <div class="col-sm-6">


                    <div class="col-sm-3"> <label>Phone :</label></div>
                    <div class="col-sm-9">
                        <input type="number" name="phone" id="phone" class=" form-control" value="{{ $volunteer->phone ?? '' }}" placeholder="Enter ..." required>
                    </div>
                </div>
            </div>
            <div class="row">



                <div class="col-sm-6">

                    <div style="padding-top: 20px;" class="col-sm-3"> <label> Gender :</label></div>
                    <div class="col-sm-9" style="padding-top: 20px;">
                        <select name="gender" id="gender" class="form-control" required>
                            <option value="">Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-6">

                    <div style="padding-top: 20px;" class="col-sm-3"> <label> Driving :</label></div>
                    <div class="col-sm-9" style="padding-top: 20px;">
                        <div class="form-group">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="role" value="No" checked>
                                    No
                                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label>
                                    <input type="radio" name="role" value="Yes" @if($volunteer->role ?? '') @if($volunteer->role == "Yes" ) checked @endif @endif >
                                    Yes </label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
    


                <div class="col-sm-6">


                    <div class="col-sm-3" style="padding-top: 20px;"> <label>Address :</label></div>
                    <div class="col-sm-9" style="padding-top: 20px;">
                        <textarea name="address" id="address" class=" form-control" placeholder="Enter ..." required>{{ $volunteer->address ?? '' }}</textarea>
                    </div>
                </div>
                <!-- <div class="col-sm-6">

                    <div style="padding-top: 20px;" class="col-sm-3"> <label>Purchase Date :</label></div>
                    <div class="col-sm-9" style="padding-top: 20px;">
                        <input type="date" name="date_of_purchase" id="date_of_purchase" class="form-control" value="{{ $Medicine->date_of_purchase ?? '' }}" placeholder="Enter ..." required maxlength="40">
                    </div>
                </div> -->
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

        @if($view != 'create')

        $('#gender').val('{{$volunteer->gender}}')
        // $('#role').val('{{$volunteer->role}}')


        @endif

    })
</script>