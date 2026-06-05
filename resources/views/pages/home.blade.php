@extends('layouts.layout')

@section('title', 'Inicio')

@section('content')
    <h2>Sistema de Gestión de Reparaciones</h2>

    <p>Aplicación para administrar reparaciones de celulares en un servicio técnico.</p>

    @auth
        <p>Bienvenido al sistema 👋</p>

        <a href="{{ route('reparaciones.index') }}">
            Ir al listado de reparaciones
        </a>
    @else
        <p>Para acceder al sistema, iniciá sesión.</p>

        <a href="{{ route('login') }}">
            Iniciar sesión
        </a>
    @endauth
@endsection