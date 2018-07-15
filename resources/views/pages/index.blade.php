@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is my first laravel application, Enjoy.</p>
            <p>
                <a class="btn btn-primary btn-lg" href="{{ route('login') }}">{{ __('Login') }}</a>
                <a class="btn btn-success btn-lg" href="{{ route('register') }}">{{ __('Register') }}</a>
            </p>
    </div>﻿
@endsection
