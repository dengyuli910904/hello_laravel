@extends('layouts.default')
@section('title', '主页')
@section('content')
    <div class="jumbotron">
        <h1>Hello Laravel</h1>
        <p class="lead">
            你现在所看到的是<a href="https://laravel-china.org/courses/laravel0essential-training-5.5">Laravel 入门教程</a>
        </p>
        <p>一起，将从这里开始。</p>
        <p><a class="btn btn-lg btn-succcess" href="{{ route('signup')}}" role="button">现在注册</a>
    </div>
@stop