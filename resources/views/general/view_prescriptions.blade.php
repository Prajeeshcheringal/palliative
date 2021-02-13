@extends('layouts.app')

@section('content')

<form action="{{ url('/medicine/billing/save') }}" method="POST">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"> Prescriptions :</h3>
            <a href="{{ url('/') }}/prescriptions" class="pull-right btn btn-success"> <i class="fa fa-arrow-left"></i></a>

        </div>
        <!-- /.box-header -->
        <div class="box-body" style="padding-left: 20px; padding-bottom: 35px">
        <input type="hidden" name="pat_id" value={{$pat_id}}>
        <input type="hidden" name="bok_id" value={{$bok_id}}>



            <div class="row">
                <div class="col-sm-4">
                    <label for="">Reg_no :</label> &nbsp; {{$patient->reg_no}} &nbsp; <label style="margin-left:45px;" for="">Date : </label>&nbsp;{{Date('d-M-y')}} <br><br>
                    <label for="">Name : </label> &nbsp; {{$patient->name}} &nbsp; <label style="margin-left:45px;" for="">Phone : </label>&nbsp;{{$patient->phone}} <br><br>
                </div>
                <div class="col-sm-6">

                    <strong> Prescriptions </strong> <br><br>
                    <table class="table table-bordered table-stripped " style="margin-left: 15px; margin-right:30px">
                        <thead>
                            <th>Medicine</th>
                            <th>Dose</th>
                            <th>Period</th>
                            <th>Purpose</th>
                            <th></th>

                        </thead>
                        <tbody>
                            @foreach($prescription as $presc)

                            <tr>
                                <td>{{$presc->medicine}}</td>
                                <td>{{$presc->dose }}</td>
                                <td>{{$presc->period }}</td>
                                <td>{{$presc->purpose}}</td>
                                <td></td>
                            </tr>

                            @endforeach
                        </tbody>

                    </table>


                </div>
                <div class="col-sm-2"></div>



            </div>

            <hr style="height:1px;border-width:0;color:gray;background-color:#b3b3b3">

            <div class="row">
                <div class="col-sm-2">
                    <strong> Billing : </strong>

                </div>
                <div class="col-sm-8">

                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>Medicine</th>
                                <th>Current Stock</th>
                                <th>Quantity</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="prescrow">

                            <tr id="add">
                                <td class="col-lg-3"><input id="medicine" type="text" class="form-control " placeholder="Medicine" />
                                    <input id="medicine_id" type="hidden"/>
                                </td>
                                <td class="col-lg-2">
                                    <input id="current_stock" type="text" readonly class="form-control" placeholder="Current Stock" />

                                </td>
                                <td class="col-lg-3"><input id="quantity" type="number" class="form-control" placeholder="Numbers" /></td>


                                <td class="col-lg-1">
                                    <a title="Add To save" class="btn btn-success prescbtn" href="#">
                                        <span class="glyphicon glyphicon-plus"></span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="col-sm-2"></div>


            </div>


        </div>

        <div class="box-footer">
            <button type="submit" class="btn  btn-info pull-right" style="margin-right: 20px">Save</button>
        </div>


    </div>
</form>
<script>
    $(function() {

        $('.prescbtn').click(function() {

            var medicine = $('#medicine').val();
            var medicine_id = $('#medicine_id').val();
            var current_stock =parseInt($('#current_stock').val());
            var quantity =parseInt($('#quantity').val());

            if (medicine && quantity && medicine_id) {

                if(quantity > current_stock){

                    alert('Warning : Quantity must be less than stock');

                    return false;

                }

                presc(medicine, medicine_id, current_stock, quantity);

                $('#medicine').val('');
                $('#medicine_id').val('');
                $('#current_stock').val('');
                $('#quantity').val('');
            }else{

                alert('Warning : Enter all fields');


            }

        });

        function presc(medicine, medicine_id, current_stock, quantity) {

            var newrow =
                '<tr id="add">' +
                '<td class="col-lg-3"><input  type="text" class="form-control"  placeholder="Medicine" value="' + medicine + '" readonly /></td>' +
                '<td class="col-lg-1"><input  value="' + current_stock + '"  class="form-control" readonly/></td>' +
                '<td class="col-lg-2"><input name ="quantity[]" value="' + quantity + '"  class="form-control col-lg-1" readonly>' +
                '<input  name="medicine_id[]" value="' + medicine_id + '"  type="hidden" class="form-control" placeholder="Purpose" readonly /></td>' +
                '<td><button data-toggle="tooltip" type="button" title="Remove" class="btn btn-danger remove" href="#"><span class="glyphicon glyphicon-remove"></span></button></td></tr>';
            $('#prescrow').append(newrow);

        }
        $(document).on('click', '.remove', function() {
            $(this).closest('tr').remove();

        });


$("#medicine").autocomplete({
        source: function(request, response) {
            // Fetch data
            $.ajax({
                url: "{{route('get/medicines')}}",
                type: 'post',
                dataType: "json",
                data: {
                    _token: '{{csrf_token()}}', 
                    search: request.term
                },
                success: function(data) {
                    response(data);
                }
            });
        },
        select: function(event, ui) {
            // Set selection
            $('#medicine').val(ui.item.label); // display the selected text
            $('#medicine_id').val(ui.item.value); // save selected id to input
            $('#current_stock').val(ui.item.stock);
            if(ui.item.stock <= 0){

                alert('Warning : Selected medicine is out of stock');
            }

            return false;
        }
    });


    })
</script>
@endsection