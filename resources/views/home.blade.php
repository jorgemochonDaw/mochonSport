<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <header>
        <h1>MochonSport</h1>
    </header>
    @guest
        <nav>
            <ul>
                <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
                <li><a href="{{ route('register') }}">Registrar</a></li>
                <li><a href="{{ route('calzados.index') }}">Calzados</a></li>
                <li><a href="{{ route('ropas.index') }}">Ropas</a></li>
                <li><a href="{{ route('materiales.index') }}">Materiales deportivos</a></li>
            </ul>
        </nav>
    @else
        @if (session()->has('mensaje'))
            {{ session()->get('mensaje') }}
        @endif
        <ul>
            <li> <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
            @if (Auth::user()->role == 'Admin')
                <li><a href="{{ route('panelAdmin') }}">Panel de administracion</a></li>
            @else
                <li><a href="{{ route('calzados.index') }}">Calzados</a></li>
                <li><a href="{{ route('ropas.index') }}">Ropas</a></li>
                <li><a href="{{ route('materiales.index') }}">Materiales deportivos</a></li>
            @endif
        </ul>
    @endauth
</body>

</html>
