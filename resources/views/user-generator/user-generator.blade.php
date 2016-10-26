@extends('layouts.master')

@section('title')
    Random User Generator
@stop

@section('nav')
    {{-- Bootstrap CSS/JS sticky nav bar--}}
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li><a href='/'>Home</a></li>
                <li><a href='/lorem-ipsum'>Lorem Ipsum Generator</a></li>
                <li class="active"><a href='/user-generator'>Random User Generator<span class="sr-only">(current)</span></a></li>
                <li><a href='/password-generator'>XKCD Password Generator</a></li>
            </ul>
        </div>
    </nav>
@stop

@section('content')
    
@stop