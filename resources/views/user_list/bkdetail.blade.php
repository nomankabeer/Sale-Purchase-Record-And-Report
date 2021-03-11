@extends("layout")
@section('content')
    <style>

        .container_user_card {
            position: relative;
            /*top: 100px;*/
            left: 10px;
            /*transform: translate(-125%, 40%);*/
            background-color: #ECEFF1;
            width: 100%;
            height: 250px;
            border-radius: 10px;
            overflow: hidden;
        }

        .menu-icon {
            position: absolute;
            right: 0;
            width: 53px;
            height: 53px;
            filter: invert(40%) sepia(57%) saturate(2228%) hue-rotate(189deg) brightness(96%) contrast(87%);
        }

        .svg-background {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            background-color: #1E88E5;
            -webkit-clip-path: polygon(0 0, 14% 0, 48% 100%, 0% 100%);
            clip-path: polygon(0 0, 14% 0, 48% 100%, 0% 100%);
        }

        .svg-background2 {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 20px;
            background-color: rgba(0,0,0,0.12);
            z-index: -9;
            -webkit-clip-path: polygon(0 0, 14% 0, 48% 100%, 0% 100%);
            clip-path: polygon(0 0, 14% 0, 48% 100%, 0% 100%);
        }

        .profile-img-card-user-detail {
            position: absolute;
            width: 150px;
            height: 150px;
            margin-top: 55px;
            margin-left: 40px;
            border-radius: 50%;
        }

        .circle {
            position: absolute;
            width: 162px;
            height: 161px;
            left: 0;
            top: 0;
            background-color: #ECEFF1;
            border-radius: 50%;
            margin-top: 50.5px;
            margin-left: 35px;
        }

        .text-container {
            position: absolute;
            right: 0;
            margin-right: 40px;
            margin-top: 5px;
            max-width: 1037px;
            text-align: center;
        }

        .title-text {
            color: #263238;
            font-size: 28px;
            font-weight: 600;
            margin-top: 5px;
        }

        .info-text {
            margin-top: 10px;
            font-siize: 18px;
        }

        .desc-text {
            font-size: 14px;
            margin-top: 10px;
        }
    </style>


    <section id="main-content">



<section class="wrapper">
    <div class="container_user_card">
        <div class="svg-background"></div>
        <div class="svg-background2"></div>
        <div class="circle"></div>
        {{--<img class="menu-icon" src="https://pngimage.net/wp-content/uploads/2018/06/white-menu-icon-png-8.png">--}}
        @if($data['user']->user_picture != null)
            <img class="profile-img-card-user-detail" src="{{asset($data['user']->user_picture)}}">
        @else
            <img class="profile-img-card-user-detail" src="data:image/png;base64,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">
        @endif
        <div class="text-container">
            <p class="title-text">{{$data['user']->first_name}} {{$data['user']->last_name}}</p>
            <p class="info-text">{{$data['user']->about_user}}</p>
            {{--<p class="desc-text">Hello, I am Austin May and I enjoy front-end web development. I fell in love with software development at Marshall University, where I graduated with a Bachelor's in Computer Science. </p>--}}
        </div>
    </div>
    <!-- //market-->
    <div class="market-updates">
        {{--<div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-2">
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-eye"> </i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4>Visitors</h4>
                    <h3>13,500</h3>
                    <p>Other hand, we denounce</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-1">
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-users" ></i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4>Users</h4>
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
        </div>--}}
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





    <!-- //market-->
    <div class="row">
        <div class="panel-body">
            <div class="col-md-12 w3ls-graph">
                <!--agileinfo-grap-->
                <div class="agileinfo-grap">
                    <div class="agileits-box">
                        <header class="agileits-box-header clearfix">
                            <h3>{{$data['user']->first_name}} {{$data['user']->last_name}} Gallery</h3>
                            <div class="toolbar">







                                        <!-- gallery -->
                                        <div class="gallery">
                                            <h2 class="w3ls_head">Gallery</h2>
                                            <div class="gallery-grids">
                                                <div class="gallery-top-grids">
                                                    <div class="col-sm-4 gallery-grids-left">
                                                        <div class="gallery-grid">
                                                            <a class="example-image-link" href="{{asset('theme/images/g1.jpg')}}" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
                                                                <img src="{{asset('theme/images/g1.jpg')}}" alt="" />
                                                                <div class="captn">
                                                                    <h4>Visitors</h4>
                                                                    <p>Aliquam non</p>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 gallery-grids-left">
                                                        <div class="gallery-grid">
                                                            <a class="example-image-link" href="{{asset('theme/images/g2.jpg')}}" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
                                                                <img src="{{asset('theme/images/g2.jpg')}}" alt="" />
                                                                <div class="captn">
                                                                    <h4>Visitors</h4>
                                                                    <p>Aliquam non</p>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 gallery-grids-left">
                                                        <div class="gallery-grid">
                                                            <a class="example-image-link" href="{{asset('theme/images/g3.jpg')}}" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
                                                                <img src="{{asset('theme/images/g3.jpg')}}" alt="" />
                                                                <div class="captn">
                                                                    <h4>Visitors</h4>
                                                                    <p>Aliquam non</p>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                                <div class="gallery-top-grids">
                                                    <div class="col-sm-4 gallery-grids-left">
                                                        <div class="gallery-grid">
                                                            <a class="example-image-link" href="{{asset('theme/images/g5.jpg')}}" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
                                                                <img src="{{asset('theme/images/g5.jpg')}}" alt="" />
                                                                <div class="captn">
                                                                    <h4>Visitors</h4>
                                                                    <p>Aliquam non</p>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 gallery-grids-left">
                                                        <div class="gallery-grid">
                                                            <a class="example-image-link" href="{{asset('theme/images/g6.jpg')}}" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
                                                                <img src="{{asset('theme/images/g6.jpg')}}" alt="" />
                                                                <div class="captn">
                                                                    <h4>Visitors</h4>
                                                                    <p>Aliquam non</p>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 gallery-grids-left">
                                                        <div class="gallery-grid">
                                                            <a class="example-image-link" href="{{asset('theme/images/g7.jpg')}}" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
                                                                <img src="{{asset('theme/images/g7.jpg')}}" alt="" />
                                                                <div class="captn">
                                                                    <h4>Visitors</h4>
                                                                    <p>Aliquam non</p>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="clearfix"> </div>
                                                </div>
                                                <div class="gallery-top-grids">
                                                    <div class="col-sm-4 gallery-grids-left">
                                                        <div class="gallery-grid">
                                                            <a class="example-image-link" href="{{asset('theme/images/g8.jpg')}}" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
                                                                <img src="{{asset('theme/images/g8.jpg')}}" alt="" />
                                                                <div class="captn">
                                                                    <h4>Visitors</h4>
                                                                    <p>Aliquam non</p>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 gallery-grids-left">
                                                        <div class="gallery-grid">
                                                            <a class="example-image-link" href="{{asset('theme/images/g9.jpg')}}" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
                                                                <img src="{{asset('theme/images/g9.jpg')}}" alt="" />
                                                                <div class="captn">
                                                                    <h4>Visitors</h4>
                                                                    <p>Aliquam non</p>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 gallery-grids-left">
                                                        <div class="gallery-grid">
                                                            <a class="example-image-link" href="{{asset('theme/images/g4.jpg')}}" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
                                                                <img src="{{asset('theme/images/g4.jpg')}}" alt="" />
                                                                <div class="captn">
                                                                    <h4>Visitors</h4>
                                                                    <p>Aliquam non</p>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="clearfix"> </div>
                                                </div>
                                                <div class="clearfix"> </div>
                                                <script src="{{asset('theme/js/lightbox-plus-jquery.min.js')}}"> </script>
                                            </div>
                                        </div>
                                        <!-- //gallery -->








                            </div>
                        </header>
                        <div class="agileits-box-body clearfix">
                            <div id="hero-area"></div>
                        </div>
                    </div>
                </div>
                <!--//agileinfo-grap-->

            </div>
        </div>
    </div>






</section>
<!-- footer -->
{{--<div class="footer">
    <div class="wthree-copyright">
        <p>©UmerKazim</p>
    </div>
</div>--}}
<!-- / footer -->
</section>

@endsection