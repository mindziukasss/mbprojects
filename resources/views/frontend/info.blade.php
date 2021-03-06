@extends('frontend.onepage')
@section('content')
    <div class="row">
        <div class="jumbotron" id="jumb">
            <div class="container" id="text">
                <h1 class="slide">{{trans('app.welcome to my portfolio')}}</h1>
                <p class="slide">{{trans('app.you can view all my new works on this site')}}</p>
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
                        <a href="../document/MBernotasEN.pdf" download>{{trans('app.Download cv')}}.</a>
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
            <h1 id="portfolio">{{trans('app.portfolio')}}</h1>
            <div class="row">
                @foreach($works as $data)
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail" id="box">
                            @foreach($data as $key => $value)
                                @if($key == 'resources_conn' )
                                    @if(isset($value[0]['files']))
                                        @foreach($value[0]['files'] as $key => $value)
                                            <a href="{{route('app.frontend.show', [app()->getLocale(), $data['id']])}}"><img
                                                        src="{{asset($value['path'])}}" class="img-rounded zoom"
                                                        alt="Cinque Terre" width="100%"></a>
                                        @endforeach
                                    @else
                                        <img src="../image/no-image.jpg" class="img-rounded zoom" alt="Cinque Terre"
                                             width="78%">
                                    @endif
                                @endif
                            @endforeach
                            <div class="caption">
                                @foreach($data as $key => $value)
                                    @if($key == 'translation' )
                                        <h3>&nbsp;{{$value['title']}}</h3>
                                        <a href="{{route('app.frontend.show', [app()->getLocale(), $data['id']])}}"
                                           class="btn btn-primary pull-right"
                                           role="button">{{trans('app.more')}}</a>

                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
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
                        <a href="https://github.com/mindziukasss" target="blank"><i class="fa fa-github link_logo"
                                                                                    aria-hidden="true"></i></a>
                        <a href="https://www.facebook.com/mindaugas.bernotas.90?fref=ts" target="blank"><i
                                    class="fa fa-facebook link_logo" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="thumbnail" id="about">
                        <div class="form-area" id="form_size">

                            <form action="{{url('contact')}}" method="POST" id="contact">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name"
                                           placeholder="{{trans('app.name')}}" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" name="email"
                                           placeholder="{{trans('app.email')}}" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject"
                                           placeholder="{{trans('app.subject')}}" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" type="textarea" name="text" id="message"
                                              placeholder="{{trans('app.message')}}" maxlength="150"
                                              rows="5"></textarea>
                                    <span class="help-block"><p id="characterLeft" class="help-block "></p></span>
                                </div>
                                <div id="msg"></div>
                                <button type="submit" name="submit" id="submit_mail"
                                        class="btn btn-primary pull-right">{{trans('app.send message')}}</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function () {
            $('#submit_mail').click(function () {
                event.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: '/contact',
                    data: $('#contact').serialize(),
                    success: function (response) {
                        if (response) {
                            $('#msg').html('<div class="alert alert-success messages col-xs-6 col-md-4">{{trans('app.message sending')}}</div>');
                            $('input , textarea').val(function () {
                                return this.defaultValue;
                            });
                        } else {
                            $('#msg').html('<div class="alert alert-danger messages col-xs-6 col-md-4">{{trans('app.error message')}}</div>');
                        }
                    },
                    error: function () {
                        $('#msg').html('<div class="alert alert-danger messages col-xs-6 col-md-4">{{trans('app.error message')}}</div>');
                    }

                });
            });
        });
        var offsetHeight = 51;
        $('body').scrollspy({offset: offsetHeight});
        $('a[href*="#"]')
            .click(function (event) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 2500, function () {
                    });
                }
            });


    </script>
@endsection