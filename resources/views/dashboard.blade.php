@extends('layout')

@section('content')

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







                                    <div class="market-updates">

                                        <div class="col-md-3 market-update-gd">
                                            <div class="market-update-block clr-block-1">
                                                <div class="col-md-4 market-update-right">
                                                    <i class="fa fa-usd" ></i>
                                                </div>
                                                <div class="col-md-8 market-update-left">
                                                    <h4>Purchase</h4>
                                                    <h3>1,250</h3>
                                                    <p>Other hand, we denounce</p>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 market-update-gd">
                                            <div class="market-update-block clr-block-3">
                                                <div class="col-md-4 market-update-right">
                                                    <i class="fa fa-usd"></i>
                                                </div>
                                                <div class="col-md-8 market-update-left">
                                                    <h4>Sales</h4>
                                                    <h3>1,500</h3>
                                                    <p>Other hand, we denounce</p>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 market-update-gd">
                                            <div class="market-update-block clr-block-4">
                                                <div class="col-md-4 market-update-right">
                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                </div>
                                                <div class="col-md-8 market-update-left">
                                                    <h4>Orders</h4>
                                                    <h3>1,500</h3>
                                                    <p>Other hand, we denounce</p>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>



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
