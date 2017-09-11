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
                <h1 id="port_title">{{trans('app.contact')}}</h1>
                <div class="col-lg-6 col-md-4">
                    <div class="thumbnail" id="about">
                        <h1>Mindaugas Bernotas</h1>
                        <h3>Vilnius, LT</h3>
                        <h3>mindaugasbernotas2@gmail.com</h3>
                        <h3>8-609-35011</h3>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="thumbnail" id="about">
                        <div class="form-area" id="form_size">
                            <form role="form">
                                <div class="form-group" >
                                    <input type="text" class="form-control" id="name" name="name" placeholder="{{trans('app.name')}}" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="{{trans('app.email')}}" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="{{trans('app.subject')}}" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" type="textarea" id="message" placeholder="{{trans('app.message')}}" maxlength="140" rows="5"></textarea>
                                    <span class="help-block"><p id="characterLeft" class="help-block "></p></span>
                                </div>
                                <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">{{trans('app.send message')}}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection