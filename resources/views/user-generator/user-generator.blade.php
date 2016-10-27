@extends('layouts.master')

@section('title')
    Random User Generator
@stop

@section('head')
	<link rel="stylesheet" href="css/user-generator.css">
@stop

@section('nav')
    {{-- Bootstrap CSS/JS sticky nav bar--}}
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li><a href='/'>Home</a></li>
                <li><a href='/lorem-ipsum'>Lorem Ipsum Generator</a></li>
                <li class="active"><a href='/user-generator'>Random User Generator<span class="sr-only">(current)</span></a></li>
                <li><a href='/password-generator'>xkcd Password Generator</a></li>
            </ul>
        </div>
    </nav>
@stop

@section('content')
    <h1 class="text-center">Random User Generator</h1>
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
    <form method='POST' action="/user-generator">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="numberOfUsers">Number of users</label>
            <input type="text" class="form-control" name="numberOfUsers" id="numberOfUsers" placeholder="Please enter a number between 1-20" maxlength="2" required>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="birthdate">Include a birthdate
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="phoneNumber">Include a phone number
            </label>
        </div>
        <button type="submit" class="btn btn-default">Generate Users</button>
    </form>
     
    {{-- Provide user with appropriate random user info based on user input --}}   
    @if(isset($numberOfUsers))
        <?php $faker = Faker\Factory::create(); ?>
        @for ($i = 0; $i < $numberOfUsers; $i++)
            <div class="userInfo">
                <p>
                    <strong>Name: </strong> <?php echo $faker->name; ?>
                </p>
                
                @if(isset($birthdate))
                    <p>
                        <strong>Birthdate: </strong> <?php echo $faker->dateTimeThisCentury->format('Y-m-d') ?>
                    </p>
                @endif
                
                @if(isset($phoneNumber))
                    <p>
                        <strong>Phone Number: </strong> <?php echo $faker->phoneNumber ?>
                    </p>
                @endif
            </div>
        @endfor
    @endif
@stop