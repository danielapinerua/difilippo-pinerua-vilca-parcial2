@extends('layouts.layout')
@section('title', 'Login')

@section('content')

<h2>Login</h2>

<form method="POST" action="{{ route('login') }}">
    @csrf

    <input 
        type="email" 
        name="email" 
        placeholder="Email" 
        value="{{ old('email') }}"
        required
    >

    <input 
        type="password" 
        name="password" 
        placeholder="Password" 
        required
    >

    @error('login')
    <p>{{ $message }}</p>
    @enderror

    <button type="submit">Ingresar</button>
</form>

@endsection