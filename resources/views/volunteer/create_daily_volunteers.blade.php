
<meta name="csrf-token" content="{{ csrf_token() }}">

<form action="{{ url('/daily_volunteers/save') }}" back="{{url('/daily_volunteers')}}" id="form" method="POST">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Volunteers</h3>
            <a href="{{ url('/') }}/daily_volunteers" class="pull-right btn btn-success ajax-link"> <i class="fa fa-arrow-left"></i></a>

        </div>
        <!-- /.box-header -->
        <div class="box-body" style="padding-left: 20px; padding-bottom: 35px">


            <div class="row">

                <div class="col-sm-6">

                    <div class="col-sm-3"> <label>Name :</label></div>
                    <div class="col-sm-9">
                        <input type="hidden" name="vol_id" id="vol_id" class="form-control">
                        <input type="text" name="name" id="volunteer" autocomplete="" class="form-control" placeholder="Enter..." required maxlength="40">
                    </div>
                </div>

                <div class="col-sm-6">


                    <div class="col-sm-3"> <label>Date :</label></div>
                    <div class="col-sm-9">
                        <input type="date" name="date" id="date" class=" form-control" placeholder="Enter ..." required>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-sm-6">

                    <div style="padding-top: 20px;" class="col-sm-3"> <label> Driving :</label></div>
                    <div class="col-sm-9" style="padding-top: 20px;">
                        <input name="role" id="role" class="form-control" placeholder="Enter ..." disabled required />

                    </div>
                </div>
                <div class="col-sm-6">


                    <div class="col-sm-3" style="padding-top: 20px;"> <label>Phone :</label></div>
                    <div class="col-sm-9" style="padding-top: 20px;">
                        <input type="number" name="phone" id="phone" class=" form-control" disabled placeholder="Enter ..." required>
                    </div>
                </div>
            </div>


            <div class="row">



                <div class="col-sm-6">


                    <div class="col-sm-3" style="padding-top: 20px;"> <label>Address :</label></div>
                    <div class="col-sm-9" style="padding-top: 20px;">
                        <textarea name="address" id="address" class=" form-control" placeholder="Enter ..." disabled required></textarea>
                    </div>
                </div>
                <div class="col-sm-6">

                    <div style="padding-top: 20px;" class="col-sm-3"> <label> Gender :</label></div>
                    <div class="col-sm-9" style="padding-top: 20px;">
                        <input type="text" name="gender" id="gender" class="form-control" placeholder="Enter ..." disabled required />

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

        @if($view != 'create')

        $('#gender').val('{{$volunteer->gender}}')
        $('#role').val('{{$volunteer->role}}')


        @endif



        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');



        $("#volunteer").autocomplete({
            source: function(request, response) {
                // Fetch data
                $.ajax({
                    url: "{{route('get/volunteers')}}",
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

                $('#volunteer').val(ui.item.label); 
                $('#vol_id').val(ui.item.value); 
                $('#role').val(ui.item.role); 
                $('#address').val(ui.item.address); 
                $('#phone').val(ui.item.phone); 
                $('#gender').val(ui.item.gender); 


                return false;
            }
        });

    })
</script>
