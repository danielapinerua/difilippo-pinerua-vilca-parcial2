@extends('layouts.layout')
@section('title', 'Login')


@section('content')


<h2>Login</h2>

@if(session('error'))
    <p>{{ session('error') }}</p>
@endif

<form method="POST" action="{{ route('login') }}">
    @csrf

    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>

    <button type="submit">Ingresar</button>
</form>

@endsection
