@extends('layout')

@section('content')
    <style>
        .hr_margin hr {
            margin: 10px !important;
        }
        .market-update-block{
            fpadding: 5px !important;
        }
    </style>
    <section id="main-content">
        <section class="wrapper">
            <div class="">




                <div class="row">
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
                                        <p>Total Bikes Purchase Amount</p>
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
                                        <p>Total Sold Bikes Amount</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <span class="hr_margin"><hr/></span>






                <div class="row">
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
                                        <p>Total Bikes Purchase Amount</p>
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
                                        <p>Total Sold Bikes Amount</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <span class="hr_margin"><hr/></span>

                <div class="row">
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
                                        <p>Paid Amount</p>
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
                                        <p>Total Credit Amount</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <span class="hr_margin"><hr/></span>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="market-updates123">

                            <div class="col-md-3 market-update-gd">
                                <div class="market-update-block clr-block-3">
                                    <div class="col-md-4 market-update-right">
                                        <i style="font-size: 59px;color: white;" class="fa fa-motorcycle"></i>
                                    </div>
                                    <div class="col-md-8 market-update-left">
                                        <h4>On Cash/Paid</h4>
                                        <h3>{{$data['total_sold_on_cash']}}</h3>
                                        <p>Total Sold On Cash</p>
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
