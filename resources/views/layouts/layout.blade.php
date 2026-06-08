<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    @stack('styles')
</head>
<body>

    <header>
        <div class="header-brand">
            <a href="{{ route('home') }}">
                <h1>Servicio Técnico</h1>
            </a>
        </div>
        
        <nav class="nav-links">
            <a href="{{ route('home') }}">Inicio</a>
            <a href="{{ route('about') }}">Acerca de Nosotros</a>
            
            @auth
                <a href="{{ route('reparaciones.index') }}">Reparaciones</a>
                <a href="{{ route('clientes.index') }}">Clientes</a>
                <a href="{{ route('celulares.index') }}">Celulares</a>
                <a href="{{ route('marcas.index') }}">Marcas</a>
            @endauth
        </nav>

        <div class="header-actions">
            @auth
                <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn-logout" title="Cerrar Sesión">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-logout-2"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M10 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2" /><path d="M15 12h-12l3 -3" /><path d="M6 15l-3 -3" /></svg>
                        <span>Salir</span>
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="btn-login">Iniciar Sesión</a>
            @endauth
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>© 2026 - Da Vinci</p>
    </footer>

</body>
</html>