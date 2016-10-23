@extends('layouts.master')

@section('title')
    Developer's Best Friend
@stop

@section('nav')
    {{-- Bootstrap CSS/JS sticky nav bar--}}
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li class="active"><a href="http://p1.keeleypeck.me">Home<span class="sr-only">(current)</span></a></li>
                <li><a href='/lorem-ipsum'>Lorem Ipsum Generator</a></li>
                <li><a href='/user-generator'>Random User Generator</a></li>
                <li><a href='/password-generator'>XKCD Password Generator</a></li>
            </ul>
        </div>
    </nav>
@stop

@section('content')
    <div class="container-fluid text-center">
        <h1>Developer's Best Friend</h1>
        <div class="links">
            <a href='/lorem-ipsum' title="Click here to access the Lorem Ipsum Generator"><h2>Lorem Ipsum Generator</h2></a>
            <p>haskdfhnakshnfrjkshf</p>
            <a href='/user-generator' title="Click here to access the Random User Generator"><h2>Random User Generator</h2></a>
            <p>ertstysrtydrtydrtyrdty</p>
            <a href='/password-generator' title="Click here to access the xkcd-Style Password Generator"><h2>xkcd Password Generator</h2></a>
            <p>dbhhjnbrtvsrfsdrydfghjhu</p>
        </div>
    </div>
@stop