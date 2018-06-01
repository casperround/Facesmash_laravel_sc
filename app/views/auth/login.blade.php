@extends('layouts.auth', ["title" => "Login", "sidebar" => false])

@section('content')
    <img style="height:25%;" src="{{ URL::to("assets/img/logo_back.png") }}"/>

    <h2>Login</h2>
    <form action="{{ URL::route("auth.doLogin") }}" method="POST">

        <label for="username">Username</label>
        <input type="text" id="username" name="username" class="username" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>

        <input type="submit" name="login" value="Login" class="button">

        <a href="{{ URL::route("register") }}"><p class="button_side">Or Register</p></a>
    </form>

    <a href="discover.php">
        <input type="submit" name="login" value="Discover?" class="button">
    </a>
@stop