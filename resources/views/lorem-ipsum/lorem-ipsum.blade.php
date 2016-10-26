@extends('layouts.master')

@section('title')
    Lorem Ipsum Generator
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
            @foreach ($errors->all() as $errormsg)
            <p class="error">{{ $errormsg }}</p>
            @endforeach
        </div>
    @endif
    
    {{-- User input form --}}
    <form method='POST' action="/lorem-ipsum-generator">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="paragraphs">Number of paragraphs</label>
            <input type="text" class="form-control" name="paragraphs" id="paragraphs" placeholder="Please enter a number between 1-20" maxlength="2" required>
        </div>
        <button type="submit" class="btn btn-default">Generate Lorem Ipsum</button>
    </form>
    
    {{-- Provide user with appropriate number of lorem ipsum paragraphs based on user input --}}    
    <div class="text-center">
        @if(isset($paragraphs))
            <?php
                $generator = new Badcow\LoremIpsum\Generator();
                $NumParagraphs = $generator->getParagraphs($paragraphs);
                echo '<p>'.implode('<p>', $NumParagraphs);
            ?>
        @endif
    </div>
@stop