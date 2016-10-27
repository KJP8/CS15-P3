@extends('layouts.master')

@section('title')
    Lorem Ipsum Generator
@stop

@section('head')
	<link rel="stylesheet" href="css/lorem-ipsum.css">
@stop

@section('nav')
    {{-- Bootstrap CSS/JS sticky nav bar--}}
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li><a href='/'>Home</a></li>
                <li class="active"><a href='/lorem-ipsum'>Lorem Ipsum Generator<span class="sr-only">(current)</span></a></li>
                <li><a href='/user-generator'>Random User Generator</a></li>
                <li><a href='/password-generator'>xkcd Password Generator</a></li>
            </ul>
        </div>
    </nav>
@stop

@section('content')
    <h1 class="text-center">Lorem Ipsum Generator</h1>
@stop

@section('body')
    
    {{-- Provide user with appropriate error message --}}
    @if(count($errors) > 0)
        <div class="text-center error">
            @foreach ($errors->all() as $error)
            <p class="error">{{ $error }}</p>
            @endforeach
        </div>
    @endif
    
    {{-- User input form --}}
    <form method='POST' action="/lorem-ipsum">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="numberOfParagraphs">Number of paragraphs</label>
            <input type="text" class="form-control" name="numberOfParagraphs" id="numberOfParagraphs" placeholder="Please enter a number between 1-20" maxlength="2" required>
        </div>
        <button type="submit" class="btn btn-default">Generate Lorem Ipsum</button>
    </form>
    
    {{-- Provide user with appropriate number of lorem ipsum paragraphs based on user input --}}    
    
        @if(isset($numberOfParagraphs))
            <div class="loremIpsum">
                <?php
                    $generator = new Badcow\LoremIpsum\Generator();
                    $NumParagraphs = $generator->getParagraphs($numberOfParagraphs);
                    echo '<p>'.implode('<p>', $NumParagraphs);
                ?>
             </div>
        @endif
   
@stop