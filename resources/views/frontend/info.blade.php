@extends('frontend.onepage')
@section('content')
    <div class="jumbotron" id="jumb">
        <div class="container" id="text">
            <h1 class="slide">{{trans('app.welcome to my portfolio site')}}</h1>
            <p class="slide">{{trans('app.you can view all my recent work on this site')}}</p>
        </div>
    </div>
    <div class="container">
        <div id="about">
            <h1>{{trans('app.about')}}</h1>
            <h3>{{trans('app.I am Mindaugas - a developer from Lithuania.')}}</h3>
            <p>{{trans('app.I like to create different websites, programs and more.Thoroughness
, consistency and perseverance are just a few features that allow you to succeed in various projects and more.')}}</p>

        </div>
        <div id="skills">
            <h1>{{trans('app.skills')}}</h1>
            <p></p>
        </div>
    </div>

@endsection