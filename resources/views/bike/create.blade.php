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
                                <form role="form" method="post">

                                    <header class="panel-heading-custom">Bike Details</header>
                                    <section class="form_section">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Bike Number</label>
                                            <input required type="text" name="bike_no" class="form-control" id="bike_no" placeholder="Bike Number">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Engine Number</label>
                                            <input required name="engine_no" type="text" class="form-control" id="engine_no" placeholder="Engine Number">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Chassis Number</label>
                                            <input required name="chassis_no" type="text" class="form-control" id="chassis_no" placeholder="Chassis Number">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Color</label>
                                            <input required name="color" type="text" class="form-control" id="chassis_no" placeholder="color">
                                        </div>
                                    </section>


                                    <header class="panel-heading-custom">Purchase Details</header>
                                    <section class="form_section">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Purchase Price</label>
                                        <input name="purchase_price" type="number" onkeypress="return isNumber(event)" onchange="return isNumber(event)" class="form-control" id="chassis_no" placeholder="purchase_price">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Purchase Date</label>
                                        <input name="purchase_price" type="date" class="form-control datepicker" id="purchase_date" placeholder="purchase_date">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" for="inputSuccess">Purchase From</label>
                                        <div class="">
                                            <select class="form-control m-bot15" name="purchase_from">
                                                <option selected >Purchase From</option>
                                                @foreach($user_list as $user)
                                                    <option value="{{$user->id}}" >{{$user->first_name}} {{$user->last_name}} - Ph#{{$user->phone_no}} - CNIC#{{$user->cnic_no}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                        <div class="form-group">
                                            <label class="control-label" for="inputSuccess">Purchase From</label>
                                            <div class="">
                                              <textarea name="about_user"></textarea>
                                            </div>
                                        </div>
                                    </section>


                                    <header class="panel-heading-custom">Sold Details</header>
                                    <section class="form_section">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Sold Price</label>
                                        <input name="sold_price" onkeypress="return isNumber(event)" onchange="return isNumber(event)" type="number" class="form-control" id="chassis_no" placeholder="sold_price">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Sold Date</label>
                                        <input name="sold_date" type="date" class="form-control datepicker" id="sold_date" placeholder="sold_date">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" for="inputSuccess">Sold To</label>
                                        <div class="">
                                            <select class="form-control m-bot15" name="sold_to">
                                                <option selected>Sold To</option>
                                               @foreach($user_list as $user)
                                                   <option value="{{$user->id}}" >{{$user->first_name}} {{$user->last_name}} - Ph#{{$user->phone_no}} - CNIC#{{$user->cnic_no}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    </section>

                                    <div class="form-group">
                                        <label for="exampleInputFile">File input</label>
                                        <input type="file" id="exampleInputFile">
                                        <p class="help-block"></p>
                                    </div>

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
                    @include('partials.add_user' , ['type' => 'add_bike' ])
                </div>
            </div>
        </div>
    </div>


    @endsection
