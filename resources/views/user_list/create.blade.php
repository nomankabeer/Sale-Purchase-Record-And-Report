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
    </style>
<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            User
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                @include('partials.add_user',  ['type' => 'user_list' ])
                            </div>
                        </div>
                    </section>

                </div>
            </div>
            <!-- page end-->
        </div>
    </section>
</section>

    @endsection
