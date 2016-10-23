@extends('layouts.master')

@section('title')
    Developer's Best Friend
@stop

@section('nav')
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
                <li><a href="#">Lorem Ipsum Generator</a></li>
                <li><a href="#">Random User Generator</a></li>
                <li><a href="#">XKCD Password Generator</a></li>
            </ul>
        </div>
    </nav>
@stop

@section('content')
    <h1>Developer's Best Friend</h1>
    <a href='/lorem-ipsum'><h2>Lorem Ipsum Generator</h2></a>
    <p>haskdfhnakshnfrjkshf</p>
    <a href='/user-generator'><h2>Random User Generator</h2></a>
    <p>ertstysrtydrtydrtyrdty</p>
    <a href='/password-generator'><h2>XKCD Password Generator</h2></a>
    <p>dbhhjnbrtvsrfsdrydfghjhu</p>
@stop