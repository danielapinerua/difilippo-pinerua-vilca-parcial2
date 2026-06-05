<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
</head>
<body>

    <header>
        <h1>Mi Sistema</h1>

        <nav>
            <a href="{{ route('home') }}">Inicio</a> |
            <a href="{{ route('about') }}">Acerca de Nosotros</a>
            <a href="{{ route('clientes.index') }}">Clientes</a> |
            <a href="{{ route('marcas.index') }}">Marcas</a> |
            <a href="{{ route('celulares.index') }}">Celulares</a> |
            <a href="{{ route('reparaciones.index') }}">Reparaciones</a> |

            @auth
                <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit">Cerrar Sesión</button>
                </form>
            @else
                <a href="{{ route('login') }}">Iniciar Sesión</a>
            @endauth
        </nav>
    </header>

    <hr>

    <main>
        @yield('content')
    </main>

    <hr>

    <footer>
        <p>© 2026 - Da Vinci</p>
    </footer>

</body>
</html>