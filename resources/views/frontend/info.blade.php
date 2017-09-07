@extends('frontend.onepage')
@section('content')
    <div class="row">
        <div class="jumbotron" id="jumb">
            <div class="container" id="text">
                <h1 class="slide">{{trans('app.welcome to my portfolio site')}}</h1>
                <p class="slide">{{trans('app.you can view all my recent work on this site')}}</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-4">
                    <div class="thumbnail" id="about">
                        <h1>{{trans('app.about')}}</h1>
                        <h3>{{trans('app.I am Mindaugas - a developer from Lithuania.')}}</h3>
                        <p>{{trans('app.I like to create different websites, programs and more.Thoroughness
, consistency and perseverance are just a few features that allow you to succeed in various projects and more.')}}</p>
                        {{--</div>--}}
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="thumbnail" id="skills">
                        <h1>{{trans('app.skills')}}</h1>
                        <div class="row">
                            <img class="logo" src="../image/apache-and-nginx.jpg">
                            <img class="logo" src="../image/bootstrap.jpg">
                            <img class="logo" src="../image/c_cplus.png">
                            <img class="logo" src="../image/django-logo.png">
                            <img class="logo" src="../image/html-css-js.png">
                            <img class="logo" src="../image/jquery.png">
                            <img class="logo" src="../image/prestashop.png">
                            <img class="logo" src="../image/rsz_angular.png">
                            <img class="logo" src="../image/rsz_laravel.png">
                            <img class="logo" src="../image/rsz_mysql.png">
                            <img class="logo" src="../image/rsz_nodejs.png">
                            <img class="logo" src="../image/rsz_php.png">
                            <img class="logo" src="../image/rsz_sass.png">
                            <img class="logo" src="../image/rsz_wordpress.png">
                            <img class="logo" src="../image/ruby_on_rails.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h1 id="port_title">{{trans('app.portfolio')}}</h1>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail" id="box">
                        <img src="../image/gg.png">
                        <div class="caption">
                            <h3>Test site title</h3>
                            <p class="more"><a href="#" class="btn btn-primary" role="button">{{trans('app.more')}}</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="../image/gg.png">
                        <div class="caption" id="box">
                            <h3>Test site title</h3>
                            <p class="more"><a href="#" class="btn btn-primary" role="button">{{trans('app.more')}}</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail" id="box">
                        <img src="../image/gg.png">
                        <div class="caption">
                            <h3>Test site title</h3>
                            <p class="more"><a href="#" class="btn btn-primary" role="button">{{trans('app.more')}}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

            </div>
        </div>
    </div>

@endsection