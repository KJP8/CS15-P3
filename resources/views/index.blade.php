@extends('layouts.master')

@section('title')
    Developer's Best Friend
@stop

@section('nav')
    {{-- Bootstrap CSS/JS sticky nav bar--}}
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li class="active"><a href='/'>Home<span class="sr-only">(current)</span></a></li>
                <li><a href='/lorem-ipsum'>Lorem Ipsum Generator</a></li>
                <li><a href='/user-generator'>Random User Generator</a></li>
                <li><a href='/password-generator'>xkcd Password Generator</a></li>
            </ul>
        </div>
    </nav>
@stop

@section('content')
    <div class="text-center">
        <h1>Developer's Best Friend</h1>
        <h3>This is website is a developer's best friend. It allows a developer to generate all of the random "filler" information he could ever need, including lorem ipsum, random users, and random passwords. Click the links below or in the navigation bar to find out more.</h3>
        <div class="links">
            <a href='/lorem-ipsum' title="Click here to access the Lorem Ipsum Generator"><h2>Lorem Ipsum Generator</h2>
            <p>This is a lorem ipsum generator. You can enter a number of paragraphs (between 1 and 20) and by selecting "Generate Lorem Ipsum," however many paragraphs of lorem ipsum you requested will be displayed to you.</p></a>
        </div>
        <div class="links">
            <a href='/user-generator' title="Click here to access the Random User Generator"><h2>Random User Generator</h2>
            <p>This is a random user generator. You can enter a number of users (between 1 and 20) and select whether or not you want to include a birthdate and/or a phone number for each user. By selecting "Generate Users," however many random users you requested will be displayed to you and include any information you requested.</p></a>
        </div>
        <div class="links">
            <a href='/password-generator' title="Click here to access the xkcd-Style Password Generator"><h2>xkcd Password Generator</h2>
            <p>This is an xkcd-style password generator. You can enter a number of words (between 2 and 10) and select whether or not you want to append a symbol and/or number to the generated password. You can also choose to make the password all lowercase (default) or all uppercase. By selecting "Generate Password," a random password containing however many words you asked for and any of the other options you may have chosen will be displayed to you.</p></a>
        </div>
    </div>
@stop