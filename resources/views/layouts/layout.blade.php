<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    @stack('styles')
</head>
<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Servicio Técnico</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                    @auth
                        <li class="nav-item"><a class="nav-link" href="{{ route('reparaciones.index') }}">Reparaciones</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('clientes.index') }}">Clientes</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('celulares.index') }}">Celulares</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('marcas.index') }}">Marcas</a></li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Acerca de Nosotros</a></li>
                    @endauth
                </ul>

                <div class="d-flex align-items-center">
                    @auth
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn-logout">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2"/><path d="M15 12h-12l3 -3"/><path d="M6 15l-3 -3"/></svg>
                                Salir
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="btn-login">Iniciar Sesión</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>© 2026 - Da Vinci</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>