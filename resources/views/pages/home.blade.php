@extends('layouts.main-layout')
@section('content')

    @auth
        <h1>Ciao {{ Auth::user() -> name }}</h1>
        <a href="{{ route('logout') }}">LOGOUT</a>
    @else
        <h2>Esegui il login oppure registrati</h2>

        <br><hr><br>
    @endauth

    @guest

    <h2>Registrazione</h2>
    <form action="{{ route('register') }}" method="POST">
        @method('POST')
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name"><br>
        <label for="email">E-mail</label>
        <input type="text" name="email"><br>
        <label for="password">Password</label>
        <input type="password" name="password"><br>
        <label for="password_confirmation">Password confirmation</label>
        <input type="password" name="password_confirmation"><br>
        <br>
        <input type="submit" value="REGISTER">
    </form>

    <br><hr><br>

    <h2>Login</h2>
    <form action="{{ route('login') }}" method="POST">
        @method('POST')
        @csrf

        <label for="email">E-mail</label>
        <input type="text" name="email"><br>
        <label for="password">Password</label>
        <input type="password" name="password"><br>
        <br>
        <input type="submit" value="LOGIN">
    </form>

    @endguest

@endsection