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
            @foreach ($errors->all() as $errormsg)
            <p class="error">{{ $errormsg }}</p>
            @endforeach
        </div>
    @endif
    
    {{-- User input form --}}
    <form method='POST' action="/user-generator">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="users">Number of users</label>
            <input type="text" class="form-control" name="users" id="users" placeholder="Please enter a number between 1-20" maxlength="2" required>
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
        <button type="submit" class="btn btn-default">Generate User</button>
    </form>
     
    {{-- Provide user with appropriate random user info based on user input --}}   
    @if(isset($users))
        <?php $faker = Faker\Factory::create(); ?>
        @for ($i = 0; $i < $users; $i++)
            <div class="text-center userInfo">
                <p>
                    <?php echo $faker->name; ?>
                </p>
                
                @if(isset($birthdate))
                    <p>
                        <?php echo $faker->dateTimeThisCentury->format('Y-m-d') ?>
                    </p>
                @endif
                
                @if(isset($phoneNumber))
                    <p>
                        <?php echo $faker->phoneNumber ?>
                    </p>
                @endif
            </div>
        @endfor
    @endif
@stop