

<form method="POST" action="{{ route('register') }}" id="form" back="{{ url('/') }}/users">
    @csrf

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Create User</h3>
            <a href="{{ url('/') }}/users" class="pull-right btn btn-success"> <i class="fa fa-arrow-left"></i></a>

        </div>
        <!-- /.box-header -->
        <div class="box-body" style="padding-left: 20px; padding-bottom: 35px">


            <div class="row">


                <div class="col-sm-6">

                    <div class="col-sm-3"> <label>Name :</label></div>
                    <div class="col-sm-9">

                        <!-- <input type="hidden" name="id" id="id" class="form-control" value="{{ $Disease->id ?? '' }}"> -->
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                </div>
                <div class="col-sm-6">


                    <div class="col-sm-3" > <label>User Role :</label></div>
                    <div class="col-sm-9" >
                        <select id="role" class="form-control" name="role" required autocomplete="role">
                            <option value="">Select</option>
                            <option value="Doctor">Doctor</option>
                            <option value="Nurse">Nurse</option>
                            <option value="Pharmacist">Pharmacist</option>
                            <option value="Volunteer">Volunteer</option>
                            <option value="Admin">Admin</option>

                        </select>
                    </div>
                </div>


            </div>


            <div class="row">


                <div class="col-sm-6">

                    <div class="col-sm-3" style="padding-top: 20px;"> <label>Username :</label></div>
                    <div class="col-sm-9" style="padding-top: 20px;">

                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="error" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                </div>

                <div class="col-sm-6">


                    <div class="col-sm-3" style="padding-top: 20px;"> <label>Password :</label></div>
                    <div class="col-sm-9" style="padding-top: 20px;">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="error" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>


            </div>

            <div class="row">


                <div class="col-sm-6">

                    <div class="col-sm-3" style="padding-top: 20px;"> <label>Phone :</label></div>
                    <div class="col-sm-9" style="padding-top: 20px;">

                        <input id="phone" type="number" class="form-control" name="phone" value="{{ old('phone') }}" required autocomplete="phone">


                    </div>

                </div>
                <div class="col-sm-6">


                    <div class="col-sm-3" style="padding-top: 20px;"> <label>Confirm Password :</label></div>
                    <div class="col-sm-9" style="padding-top: 20px;">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>



            </div>


        </div>

        <div class="box-footer">

            <button type="submit" id="save" class="btn  btn-info pull-right" style="margin-right: 20px">Save</button>
        </div>


    </div>
</form>
