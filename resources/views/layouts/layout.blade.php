<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
</head>
<body>
    <h1>Mi Sistema</h1>
    
    <nav>
        <a href="{{ route('home') }}">Inicio</a> |
        <a href="{{ route('clientes.index') }}">Clientes</a> |
        <a href="{{ route('marcas.index') }}">Marcas</a> |
        <a href="{{ route('celulares.index') }}">Celulares</a> |
        <a href="{{ route('reparaciones.index') }}">Reparaciones</a>
    </nav>

    <hr>

    @yield('content')
    <hr>

    <h1>Mi Sistema</h1>

   <nav>
    <a href="{{ route('home') }}">Inicio</a> |
    <a href="{{ route('reparaciones.index') }}">Reparaciones</a> |
    <a href="{{ route('reparaciones.create') }}">Nueva Reparación</a> 

    @auth
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit">Cerrar Sesión</button>
        </form>
    @else
        <a href="{{ route('login') }}">Iniciar Sesión</a>
    @endauth
   </nav>

    <hr>

    @yield('content')

    <hr>

    <footer>
        <p>© 2026 - Da Vinci</p>
    </footer>

</body>