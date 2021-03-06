@extends('layout')

@section('content')
    <style>
        .hr_margin hr {
            margin: 10px !important;
        }

        .market-update-block {
            fpadding: 5px !important;
        }

        .text_haeding {
            text-align: center;
            font-size: 37px;
            line-height: 47px;
            letter-spacing: 3px;
            font-weight: 900;
            font-style: normal;
        }

        .report_section {
            margin: 10px;
            padding: 0px 0px 20px 0px;
            background: rgb(246, 246, 246);
            background: radial-gradient(circle, rgb(246, 246, 246) 0%, rgb(168, 168, 168) 66%);
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        }

        .margin_bottom_dashboard {
            margin-bottom: 25px !important;
        }

        .bike_listing_dashboard {
            padding: 0px 15px !important;
        }
    </style>


    <section id="main-content">
        <section class="wrapper">
            <div class="">
                <div class="report_section">
                    <div class="text_haeding">Overall Summary</div>
                    <span class="hr_margin"><hr/></span><br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="market-updates123">
                                <div class="col-md-3 market-update-gd">
                                    <div class="market-update-block clr-block-4">
                                        <div class="col-md-4 market-update-right">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-md-8 market-update-left">
                                            <h4>Total Purchased Bikes</h4>
                                            <h3>{{$data['total_purchased_bikes']}}</h3>
                                            <p>Total Purchased Bikes</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>


                                <div class="col-md-3 market-update-gd">
                                    <div class="market-update-block clr-block-1">
                                        <div class="col-md-4 market-update-right">
                                            <i style="font-size: 59px;color: white;" class="fa fa-motorcycle"></i>
                                        </div>
                                        <div class="col-md-8 market-update-left">
                                            <h4>Total Sold</h4>
                                            <h3>{{$data['total_sold_bikes']}}</h3>
                                            <p>Total Sold Bikes</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>


                                <div class="col-md-3 market-update-gd">
                                    <div class="market-update-block clr-block-3">
                                        <div class="col-md-4 market-update-right">
                                            <i class="fa fa-usd"></i>
                                        </div>
                                        <div class="col-md-8 market-update-left">
                                            <h4>Stock</h4>
                                            <h3>{{$data['total_purchased_bikes_stock']}}</h3>
                                            <p>Total Stock</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                                <div class="col-md-3 market-update-gd">
                                    <div class="market-update-block clr-block-1">
                                        <div class="col-md-4 market-update-right">
                                            <i style="font-size: 59px;color: white;" class="fa fa-usd"></i>
                                        </div>
                                        <div class="col-md-8 market-update-left">
                                            <h4>Sold On Cash</h4>
                                            <h3>{{$data['total_sold_bikes_on_cash']}}</h3>
                                            <p>Total Sold Bikes On Cash/Paid</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="market-updates123">
                                <div class="col-md-3 market-update-gd">
                                    <div class="market-update-block clr-block-4">
                                        <div class="col-md-4 market-update-right">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-md-8 market-update-left">
                                            <h4>Sold On Credit</h4>
                                            <h3>{{$data['total_sold_bikes_on_credit']}}</h3>
                                            <p>Total Sold Bikes On Credit</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>


                                <div class="col-md-3 market-update-gd">
                                    <div class="market-update-block clr-block-1">
                                        <div class="col-md-4 market-update-right">
                                            <i style="font-size: 59px;color: white;" class="fa fa-motorcycle"></i>
                                        </div>
                                        <div class="col-md-8 market-update-left">
                                            <h4>Purchased Amount</h4>
                                            <h3>{{$data['total_purchased_bikes_amount']}}</h3>
                                            <p>{{$data['total_purchased_bikes']}} Bikes Purchased Amount</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>


                                <div class="col-md-3 market-update-gd">
                                    <div class="market-update-block clr-block-3">
                                        <div class="col-md-4 market-update-right">
                                            <i class="fa fa-usd"></i>
                                        </div>
                                        <div class="col-md-8 market-update-left">
                                            <h4>Sold Amount</h4>
                                            <h3>{{$data['total_sold_bikes_amount']}}</h3>
                                            <p>{{$data['total_sold_bikes']}} Bikes Sold Amount</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                                <div class="col-md-3 market-update-gd">
                                    <div class="market-update-block clr-block-2">
                                        <div class="col-md-4 market-update-right">
                                            <i style="font-size: 59px;color: white;" class="fa fa-usd"></i>
                                        </div>
                                        <div class="col-md-8 market-update-left">
                                            <h4>Total Credit</h4>
                                            <h3>{{$data['total_credit']}}</h3>
                                            <p>{{$data['total_sold_bikes_on_credit']}} Sold Bikes Credit</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="market-updates123">
                                <div class="col-md-3 market-update-gd">
                                    <div class="market-update-block clr-block-1">
                                        <div class="col-md-4 market-update-right">
                                            <i class="fa fa-usd" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-md-8 market-update-left">
                                            <h4>Total Paid Amount</h4>
                                            <h3>{{$data['total_paid_amount']}}</h3>
                                            <p>Total Paid Amount</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="report_section">
                    @if(@$_GET['from'] != null && @$_GET['to'] != null)
                        <div class="text_haeding">Report | {{date_format( new \DateTime($_GET['from']), "d-M-Y")}}
                            - {{date_format( new \DateTime($_GET['to']), "d-M-Y")}}</div>
                    @elseif(@$_GET['from'] != null && @$_GET['to'] == null)
                        <div class="text_haeding">Report | {{date_format( new \DateTime($_GET['from']), "d-M-Y")}}
                            - {{date_format(today(), "d-M-Y")}}</div>
                    @else
                        <div class="text_haeding">Daily Report | {{date_format(today(), "d-M-Y")}}</div>
                    @endif

                    <hr/>
                    <br>
                    <form method="get" action="?">
                        <div class="text_haeding">
                            <div class="col-md-3 form-group">
                                <input value="{{@$_GET['from']}}" name="from" type="date"
                                       placeholder=".col-md-3 from_date_search_filter" class="form-control">
                            </div>
                        </div>
                        <div class="text_haeding">
                            <div class="col-md-3 form-group">
                                <input value="{{@$_GET['to']}}" name="to" type="date"
                                       placeholder=".col-md-3 to_date_search_filter" class="form-control">
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-3">
                                <button class="form-control btn btn-primary">Get Report</button>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-3">
                                <a href="{{route('dashboard.index')}}" class="form-control btn btn-danger">Clear
                                    Filter</a>
                            </div>
                        </div>
                    </form>
                    <br><br>
                    <hr/>
                    <br>

                    <div class="row margin_bottom_dashboard">
                        <div class="col-lg-12">

                            <div class="market-updates123">

                                <div class="col-md-3 market-update-gd">
                                    <div class="market-update-block clr-block-4">
                                        <div class="col-md-4 market-update-right">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-md-8 market-update-left">
                                            <h4>Purchase</h4>
                                            <h3>{{$data['total_purchase_bikes_today']}}</h3>
                                            <p>Total Purchase Bikes</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>


                                <div class="col-md-3 market-update-gd">
                                    <div class="market-update-block clr-block-3">
                                        <div class="col-md-4 market-update-right">
                                            <i class="fa fa-usd"></i>
                                        </div>
                                        <div class="col-md-8 market-update-left">
                                            <h4>Purchase Amount</h4>
                                            <h3>{{$data['total_purchase_amount_today']}}</h3>
                                            <p>{{$data['total_purchase_bikes_today']}} Bikes Purchase Amount</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                                <div class="col-md-3 market-update-gd">
                                    <div class="market-update-block clr-block-1">
                                        <div class="col-md-4 market-update-right">
                                            <i style="font-size: 59px;color: white;" class="fa fa-motorcycle"></i>
                                        </div>
                                        <div class="col-md-8 market-update-left">
                                            <h4>Sold</h4>
                                            <h3>{{$data['total_sold_bikes_today']}}</h3>
                                            <p>Total Sold Bikes</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                                <div class="col-md-3 market-update-gd">
                                    <div class="market-update-block clr-block-1">
                                        <div class="col-md-4 market-update-right">
                                            <i style="font-size: 59px;color: white;" class="fa fa-usd"></i>
                                        </div>
                                        <div class="col-md-8 market-update-left">
                                            <h4>Sold Amount</h4>
                                            <h3>{{$data['total_sold_amount_today']}}</h3>
                                            <p>{{$data['total_sold_bikes_today']}} Bikes Sold Amount</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>


                    <div class="row margin_bottom_dashboard">
                        <div class="col-lg-12">
                            <div class="market-updates123">
                                <div class="col-md-3 market-update-gd">
                                    <div class="market-update-block clr-block-4">
                                        <div class="col-md-4 market-update-right">
                                            <i style="font-size: 59px;color: white;" class="fa fa-motorcycle"></i>
                                        </div>
                                        <div class="col-md-8 market-update-left">
                                            <h4>On Credit</h4>
                                            <h3>{{$data['total_sold_on_credit']}}</h3>
                                            <p>Total Sold On Credit</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>


                                <div class="col-md-3 market-update-gd">
                                    <div class="market-update-block clr-block-5">
                                        <div class="col-md-4 market-update-right">
                                            <i style="font-size: 59px;color: white;" class="fa fa-usd"></i>
                                        </div>
                                        <div class="col-md-8 market-update-left">
                                            <p>Cash Sale Credit / Installment</p>
                                            <h3>CSC: {{$data['total_sold_on_cash_sale_credit']}}</h3>
                                            <h3>Ins: {{$data['total_sold_on_installment']}}</h3>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                                <div class="col-md-3 market-update-gd">
                                    <div class="market-update-block clr-block-5">
                                        <div class="col-md-4 market-update-right">
                                            <i style="font-size: 59px;color: white;" class="fa fa-usd"></i>
                                        </div>
                                        <div class="col-md-8 market-update-left">
                                            <h4>Credit Paid Amount</h4>
                                            <h3>{{$data['total_credit_paid_amount']}}</h3>
                                            <p>{{$data['total_sold_bikes_today']}} Bike Credit Paid Amount</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                                <div class="col-md-3 market-update-gd">
                                    <div class="market-update-block clr-block-2">
                                        <div class="col-md-4 market-update-right">
                                            <i class="fa fa-usd"></i>
                                        </div>
                                        <div class="col-md-8 market-update-left">
                                            <h4>Credit Amount</h4>
                                            <h3>{{$data['total_credit_amount_today']}}</h3>
                                            <p>{{$data['total_sold_bikes_today']}} Bike Credit Amount</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <hr/>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="market-updates123">

                                <div class="col-md-3 market-update-gd">
                                    <div class="market-update-block clr-block-3">
                                        <div class="col-md-4 market-update-right">
                                            <i style="font-size: 59px;color: white;" class="fa fa-motorcycle"></i>
                                        </div>
                                        <div class="col-md-8 market-update-left">
                                            <h4>Sold On Cash/Paid</h4>
                                            <h3>{{$data['total_sold_on_cash']}}</h3>
                                            <p>Total Bikes Sold On Cash</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                                <div class="col-md-3 market-update-gd">
                                    <div class="market-update-block clr-block-1">
                                        <div class="col-md-4 market-update-right">
                                            <i style="font-size: 59px;color: white;" class="fa fa-usd"></i>
                                        </div>
                                        <div class="col-md-8 market-update-left">
                                            <h4>Paid Amount</h4>
                                            <h3>{{$data['total_paid_amount_today']}}</h3>
                                            <p>{{$data['total_sold_on_cash']}} Bike On Cash/Paid Amount</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <br>
                <div class="report_section">
                    @if(@$_GET['from'] != null && @$_GET['to'] != null)
                        <div class="text_haeding">Bikes
                            | {{date_format( new \DateTime($_GET['from']), "d-M-Y")}}
                            - {{date_format( new \DateTime($_GET['to']), "d-M-Y")}}</div>
                    @elseif(@$_GET['from'] != null && @$_GET['to'] == null)
                        <div class="text_haeding">Bikes
                            | {{date_format( new \DateTime($_GET['from']), "d-M-Y")}}
                            - {{date_format(today(), "d-M-Y")}}</div>
                    @else
                        <div class="text_haeding">Bikes | {{date_format(today(), "d-M-Y")}}</div>
                    @endif
                    <hr/>
                    <br>


                    <div class="row margin_bottom_dashboard">
                        <div class="col-lg-12">
                            <div class="market-updates123">
                                <div class="row bike_listing_dashboard">

                                    @foreach($data['total_purchased_bikes_in_date_range'] as $bike)
                                        <div class="col-sm-12 col-md-6 col-lg-3">
                                            <div class="thumbnail">
                                                {{--<img src="..." alt="...">--}}
                                                <div class="caption">
                                                    {{--<h3>Thumbnail label</h3>--}}
                                                    <p>
                                                    <ul class="list-group">

                                                        <li class="list-group-item active">Bike Detail</li>
                                                        <li class="list-group-item">
                                                            <span class="badge badge-primary"
                                                                  style="font-size: 14px; line-height: 16px;">Bike Number</span>{{$bike->bike_no}}
                                                        </li>
                                                        <li class="list-group-item">
                                                            <span class="badge badge-primary"
                                                                  style="font-size: 14px; line-height: 16px;">Engine Number</span>{{$bike->engine_no}}
                                                        </li>
                                                        <li class="list-group-item">
                                                            <span class="badge badge-primary"
                                                                  style="font-size: 14px; line-height: 16px;">Chassis Number</span>{{$bike->chassis_no}}
                                                        </li>
                                                        <li class="list-group-item">
                                                            <span class="badge badge-primary"
                                                                  style="font-size: 14px; line-height: 16px;">Color</span>{{$bike->color}}
                                                        </li>


                                                        <li class="list-group-item list-group-item-warning">Purchase
                                                            Details
                                                        </li>
                                                        <li class="list-group-item">
                                                            <span class="badge badge-warning"
                                                                  style="font-size: 14px; line-height: 16px;">Name</span>{{$bike->purchaseFrom->first_name}} {{$bike->purchaseFrom->last_name}}
                                                        </li>
                                                        <li class="list-group-item">
                                                            <span class="badge badge-warning"
                                                                  style="font-size: 14px; line-height: 16px;">CNIC</span>{{$bike->purchaseFrom->cnic_no}}
                                                        </li>
                                                        <li class="list-group-item">
                                                            <span class="badge badge-warning"
                                                                  style="font-size: 14px; line-height: 16px;">Phone</span>{{$bike->purchaseFrom->phone_no}}
                                                        </li>
                                                        <li class="list-group-item">
                                                            <span class="badge badge-warning"
                                                                  style="font-size: 14px; line-height: 16px;">Price</span>{{$bike->purchase_price}}
                                                            Pkr
                                                        </li>
                                                        <li class="list-group-item">
                                                            <span class="badge badge-warning"
                                                                  style="font-size: 14px; line-height: 16px;">Purchase Date</span>{{\App\CommonHelper::humanDate($bike->purchase_date)}}
                                                        </li>

                                                        @if($bike->soldTo)
                                                            <li class="list-group-item list-group-item-success">Sold
                                                                Details
                                                            </li>
                                                            <li class="list-group-item">
                                                                <span class="badge badge-primary"
                                                                      style="font-size: 14px; line-height: 16px;">Name</span>{{$bike->soldTo->first_name}} {{$bike->soldTo->last_name}}
                                                            </li>
                                                            <li class="list-group-item">
                                                                <span class="badge badge-primary"
                                                                      style="font-size: 14px; line-height: 16px;">CNIC</span>{{$bike->soldTo->cnic_no}}
                                                            </li>
                                                            <li class="list-group-item">
                                                                <span class="badge badge-primary"
                                                                      style="font-size: 14px; line-height: 16px;">Phone</span>{{$bike->soldTo->phone_no}}
                                                            </li>
                                                            <li class="list-group-item">
                                                                <span class="badge badge-primary"
                                                                      style="font-size: 14px; line-height: 16px;">Price</span>{{$bike->sold_price}}
                                                                Pkr
                                                            </li>
                                                            <li class="list-group-item">
                                                                <span class="badge badge-primary"
                                                                      style="font-size: 14px; line-height: 16px;">Sold Date</span>{{\App\CommonHelper::humanDate($bike->sold_date)}}
                                                            </li>
                                                            <li class="list-group-item">
                                                                @if($bike->sold_type == "Paid")
                                                                    <span class="badge badge-primary"
                                                                          style="font-size: 14px; line-height: 16px; background: green">Sold Type</span>
                                                                    <span class="btn btn-success"
                                                                          disabled>{{$bike->sold_type}}</span>
                                                                @else
                                                                    <span class="badge badge-success"
                                                                          style="font-size: 14px; line-height: 16px;">Sold Type</span>
                                                                    <span class="btn btn-danger"
                                                                          disabled>{{$bike->sold_type}}</span>
                                                                @endif
                                                            </li>
                                                            @if($bike->credit_type)
                                                                <li class="list-group-item">
                                                                    <span class="badge badge-success"
                                                                          style="font-size: 14px; line-height: 16px;">Credit Type</span>{{$bike->credit_type}}
                                                                </li>
                                                            @endif
                                                            @if($bike->sold_type === "Credit")
                                                                <li class="list-group-item list-group-item-danger">
                                                                    Credit List
                                                                </li>
                                                                @php
                                                                    $unpaid = 0;
                                                                    $paid = 0;
                                                                @endphp
                                                                @foreach($bike->credit as $credit)
                                                                    <li class="list-group-item">
                                                                        @if($credit->is_paid == 0)
                                                                            @php $unpaid += $credit->payment_price; @endphp
                                                                            <span class="badge badge-danger"
                                                                                  style="font-size: 14px; line-height: 16px; background: #fb5710;">UPaid</span>
                                                                        @else
                                                                            @php $paid += $credit->payment_price; @endphp
                                                                            <span class="badge badge-primary"
                                                                                  style="font-size: 14px; line-height: 16px; background: #1F811F">Paid</span>
                                                                        @endif
                                                                        {{$credit->payment_price}}
                                                                        - {{\App\CommonHelper::humanDate($credit->payment_date)}}
                                                                    </li>
                                                                @endforeach
                                                                @if((int)$unpaid > 0)
                                                                    <li class="list-group-item active"
                                                                        style="background: #fb5710">Total Credit Amount
                                                                        Left To Pay = {{$unpaid}}</li>
                                                                @else
                                                                    <li class="list-group-item active"
                                                                        style="background: #1F811F">Total Credit Paid
                                                                        = {{$paid}}</li>
                                                                @endif
                                                            @endif
                                                        @else
                                                            <li class="list-group-item active">In Stock</li>
                                                        @endif
                                                    </ul>
                                                    </p>
                                                    <p><a href="{{route('bike.detail' , $bike->id)}}" target="_blank" class="btn btn-primary" role="button">Detail Page</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>


                </div>


            </div>
        </section>
    </section>

















    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">??</button>
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


    <script></script>

@endsection
