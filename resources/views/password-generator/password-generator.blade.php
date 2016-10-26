@extends('layouts.master')

@section('title')
    xkcd Password Generator
@stop

@section('head')
	<link rel="stylesheet" href="css/p2.css">
@stop

@section('nav')
    {{-- Bootstrap CSS/JS sticky nav bar--}}
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li><a href='/'>Home</a></li>
                <li><a href='/lorem-ipsum'>Lorem Ipsum Generator</a></li>
                <li><a href='/user-generator'>Random User Generator</a></li>
                <li class="active"><a href='/password-generator'>xkcd Password Generator<span class="sr-only">(current)</span></a></li>
            </ul>
        </div>
    </nav>
@stop

@section('content')
    <h1 class="text-center">xkcd Password Generator</h1>
@stop

@section('body')
    
    {{-- Provide user with appropriate error message --}}
    @if(count($errors) > 0)
        <div class="text-center error">
            @foreach ($errors->all() as $errormsg)
            <p class="error">{{ $errormsg }}</p>
            @endforeach
        </div>
    @endif
    
    {{-- User input form --}}
    <form method='POST' action="/password-generator">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="numWord">Number of words</label>
            <input type="text" class="form-control" name="numWord" id="numWord" placeholder="Please enter a number between 2-10" maxlength="2" required>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="symbol">Include a symbol
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="number">Include a number
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="case" id="lowCase" value="low" checked>Lowercase
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="case" id="upCase" value="up">Uppercase
            </label>
        </div>
        <button type="submit" class="btn btn-default">Generate Password</button>
    </form>
    
    {{-- Provide user with appropriate password based on user input --}}
    <div class="text-center">
        @if(isset($password))
            <h2><?php echo $password; ?></h2>
        @else
            <h2>default-password-four-numbers</h2>
        @endif
    </div>
    
    <div class="text-center" id="info">
        <p>This is an xkcd-style password generator. Please enter a number of words (between 2 and 10). Then, select whether or not you want to append a symbol and/or number to the generated password, and whether or not you'd like to make the password all lowercase (default) or all uppercase. By selecting "Generate Password," a random password containing however many words you asked for and any of the other options you may have chosen will be displayed to you.</p>
        <a href="http://xkcd.com/936/"><img src="images/xkcd.png" alt="xkcd_pw_pic"></a>
@stop