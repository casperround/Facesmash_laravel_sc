@extends('layouts.auth', ["title" => "Register", "sidebar" => false])

@section('content')
    <img style="height:25%;" src="{{ URL::to("assets/img/logo_back.png") }}"/>

    <h2>Registration</h2>
    <form action="{{ URL::route("auth.doRegister") }}" method="POST">

        <label for="username">Username</label>
        <input type="text" id="username" name="username" class="username" required>

        <label for="email">Email</label>
        <input type="text" id="email" name="email" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>

        <input type="submit" name="login" value="Get Started!" class="button">

        <br>

        <a href="{{ URL::route("index") }}"><p class="button_side">Or Login</p></a>
    </form>
@stop