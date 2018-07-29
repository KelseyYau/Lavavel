@extends('layouts.default')
@section('title','欢迎来到主页');
@section('content')
  <div class="jumbotron">
    <h1>欢迎，请登录/注册</h1>
    <p class="lead">
      现在所在的位置是<a href="https://laravel-china.org/courses/laravel-essential-training-5.1">Laravel</a>的实例项目主页
    </p>
    <p>我们从这里起航。</p>
    <p>
      <a href="{{route('sigup')}}" class="btn btn-lg btn-success" role="button">现在注册</a>
    </p>
  </div>
@stop