@extends('layout')

@section('content')
    <style>
        .panel-heading-custom {
            padding: 10px 15px;
            border-bottom: 1px solid transparent;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
            position: relative;
            height: 32px;
            line-height: 35px;
            letter-spacing: 0.2px;
            color: #000;
            font-size: 18px;
            font-weight: 400;
            padding: 0 16px;
            background: #ddede0;
            border-top-right-radius: 2px;
            border-top-left-radius: 2px;
            text-transform: uppercase;
            text-align: center;
            /*margin-bottom: 10px;*/
        }
        .form_section {
            border: solid 5px #ddede0; padding: 10px;
            margin-bottom: 16px;
        }

        #user_picture_modal .modal-content , #myModal .modal-content , #user_picture_modal .modal-dialog , #user_picture_modal .modal-dialog , #user_picture_modal {
            width: 800px !important;
        }

        .payment_input input{
            margin: 0px 15px;
        }
        .hide {
            display: none !important;
        }
    </style>
<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Bike
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" method="post" action="{{route('bike.store')}}">
                                    @csrf
                                    <header class="panel-heading-custom">Bike Details</header>
                                    <section class="form_section">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Bike Number</label>
                                            <input type="text" name="bike_no" class="form-control" id="bike_no" disabled value="{{$bike->bike_no}}" placeholder="Bike Number">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Engine Number</label>
                                            <input required name="engine_no" type="text" class="form-control" disabled value="{{$bike->bike_no}}" id="engine_no" placeholder="Engine Number">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Chassis Number</label>
                                            <input required name="chassis_no" type="text" class="form-control" disabled value="{{$bike->bike_no}}" id="chassis_no" placeholder="Chassis Number">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Color</label>
                                            <input required name="color" type="text" class="form-control" disabled value="{{$bike->bike_no}}" id="chassis_no" placeholder="color">
                                        </div>
                                    </section>


                                    <header class="panel-heading-custom">Purchase Details</header>
                                    <section class="form_section">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Purchase Price</label>
                                        <input name="purchase_price" type="number" onkeypress="return isNumber(event)" disabled value="{{$bike->bike_no}}" onchange="return isNumber(event)" class="form-control" id="chassis_no" placeholder="purchase_price">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Purchase Date</label>
                                        @php
                                            $created_at = new \DateTime($bike->purchase_date);
                                            $purchase_Date = date_format($created_at, "d-M-Y");
                                        @endphp
                                        <input name="purchase_date" type="text" class="form-control datepicker" disabled value="{{$purchase_Date}}" id="purchase_date" placeholder="purchase_date">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" for="inputSuccess">Purchase From</label>
                                        <div class="">
                                            <select class="form-control m-bot15" name="purchase_from" disabled>
                                                <option >Purchase From</option>
                                                @foreach($user_list as $user)
                                                    <option @if($user->id == $bike->purchase_from) selected @endif value="{{$user->id}}" >{{$user->first_name}} {{$user->last_name}} - Ph#{{$user->phone_no}} - CNIC#{{$user->cnic_no}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    </section>

                                    @if($bike->sold_to == null)
                                        <header class="panel-heading-custom">Sold Details</header>
                                        <section class="form_section sold_detail_section">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Sold Date</label>
                                                <input name="sold_date" type="date" class="form-control datepicker" id="sold_date" placeholder="sold_date">
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label" for="inputSuccess">Sold To</label>
                                                <div class="">
                                                    <select class="form-control m-bot15" name="sold_to">
                                                        <option selected disabled>Sold To</option>
                                                       @foreach($user_list as $user)
                                                           <option value="{{$user->id}}" >{{$user->first_name}} {{$user->last_name}} - Ph#{{$user->phone_no}} - CNIC#{{$user->cnic_no}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group" >
                                                <label for="exampleInputEmail1">Sold Price</label>
                                                <input name="sold_price" onkeypress="return isNumber(event)" onchange="return isNumber(event)" type="number" class="form-control" id="chassis_no" placeholder="sold_price">
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label" for="inputSuccess">Sold Type</label>
                                                <div class="">
                                                    <select class="form-control m-bot15 sold_type" name="sold_type">
                                                        <option selected disabled >Select Credit Or Payment</option>
                                                        <option value="Paid">Paid</option>
                                                        <option value="Credit">Credit</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="credit_section hide">
                                            <div class="form-group">
                                                <label class="control-label" for="inputSuccess">Credit Type</label>
                                                <div class="">
                                                    <select class="form-control m-bot15" name="credit_type">
                                                        <option selected disabled >Select Credit Type</option>
                                                        <option value="Cash Sale Credit">Cash Sale Credit</option>
                                                        <option value="Installment">Installment</option>
                                                    </select>
                                                </div>
                                            </div>

                                            {{--@for($key=0;$key<3;$key++)--}}
                                            <div class="form-group col-dmd-12 payment_block">
                                                <label class="control-label" for="inputSuccess">Payment</label>
                                                <div class="payment_input" style="display: inline-flex;">
                                                    <input  name="payment_price[]" type="number"  onkeypress="return isNumber(event)" onchange="return isNumber(event)" class="form-control col-md-f3" id="chassis_no" placeholder="purchase_price">
                                                    <input  name="payment_date[]" type="date" class="form-control datepicker col-mdf-3" id="sold_date" placeholder="sold_date">
                                                    <input readonly class="btn btn-success col-md-f" data-key="1"  id="add_payment_block" value="Add Another Payment">
                                                </div>
                                            </div>
                                            {{--@endfor--}}
                                            </div>
                                        </section>
                                    @endif

                                    <script>

                                        function delete_payment_block(key){
                                            $(".payment_block_"+key).remove();
                                        }


                                        $(document).ready(() => {
                                            $("#add_payment_block").click(function() {
                                                var key = parseInt($(this).attr('data-key'));
                                                $(this).attr('data-key' , key + 1) ;
                                                var payment_block = '<div class="form-group col-dmd-12 payment_block payment_block_'+key+' ">\n' +
                                                    '                                            <label class="control-label" for="inputSuccess">Payment</label>\n' +
                                                    '                                            <div class="payment_input" style="display: inline-flex;">\n' +
                                                    '                                                <input required name="payment_price[]" type="number" onkeypress="return isNumber(event)" onchange="return isNumber(event)" class="form-control col-md-f3" id="payment_price" placeholder="purchase_price">\n' +
                                                    '                                                <input required name="payment_date[]" type="date" class="form-control datepicker col-mdf-3" id="payment_date" placeholder="sold_date">\n' +
                                                    '                                                <input readonly class="btn btn-danger payment_block_delete_btn_'+key+' col-md-f" onclick="return delete_payment_block('+key+')"  data-delete_payment_block="'+key+'"  id="" value="Delete">\n' +
                                                    '                                            </div>\n' +
                                                    '                                        </div>';
                                                $(".sold_detail_section").append(payment_block);
                                            });



                                            $(".sold_type").change(function () {
                                              console.log($(this).val() , 'sss');

                                              if($(this).val() == "Credit"){
                                                  $(".credit_section").removeClass('hide');
                                              }
                                              else if($(this).val() == "Paid"){
                                                  $(".credit_section").addClass('hide');
                                              }

                                            });

                                        });

                                    </script>

                                    <button type="submit" class="btn btn-info">Submit</button>
                                    <a href="{{route('bike.index')}}" class="btn btn-danger">Cancel</a>
                                    <a href="#myModal" data-toggle="modal" class="btn btn-success">Add User</a>
                                </form>
                            </div>

                        </div>
                    </section>

                </div>
            </div>
            <!-- page end-->
        </div>
    </section>
</section>














    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 class="modal-title">Add User</h4>
                </div>
                <div class="modal-body">

                   {{-- <form role="form">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile3">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Check me out
                            </label>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>--}}


                    {{--@include('partials.add_user' , ['type' => 'add_bike' ])--}}
                </div>
            </div>
        </div>
    </div>


    @endsection

@push('script')

    @endpush


{{--
<p>This is a paragraph.</p>
<p>This is another paragraph.</p>

<a id="btn1">Add to the front</a>
<a id="btn3">Add to the back</a>

<ol>
    <li>List item 1</li>
    <li>List item 2</li>
    <li>List item 3</li>
</ol>

<a id="btn2">Add to the top</a>
<a id="btn4">Add to the back</a>

<script>
    $(document).ready(() => {
        $("#btn1").click(() => {
            $("p").prepend("<strong>Added to the front</strong>. ");
        });
        $("#btn2").click(() => {
            $("ol").prepend("<li>Added to the top</li>");
        });
        $("#btn3").click(() => {
            $("p").append(" <strong>Added to the back</strong>.");
        });
        $("#btn4").click(() => {
            $("ol").append("<li>Added to the back</li>");
        });
    });
</script>--}}
