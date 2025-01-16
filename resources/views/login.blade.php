<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Corazones Perrunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jua&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>
    <nav class="navbar container-fluid" id="barraInicial">
        <div class="row align-items-center w-100">
            <div class="col-auto">
                <a class="navbar-brand" href="/">
                    <img src="/imgs/nombre.png" alt="Logo" width="70%" height="90%">
                </a>
            </div>

            <div class="col-auto ms-3">
                <div class="dropdown">
                    <button class="btn btn-lg dropdown-toggle btn-outline-Dark" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Donde quieres ir?
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/">Inicio.</a></li>
                        <li><a class="dropdown-item" href="{{ route('donaciones') }}">Donaciones.</a></li>
                        <li><a class="dropdown-item" href="{{ route('listaMascota') }}">Listado de las mascotas.</a></li>
                    </ul>
                </div>
            </div>

            <div class="col ms-auto text-end pe-3">
                @if (!Session::has('usuario'))
                <a href="{{ route('login') }}" class="btn btn-secondary" id="titulo">Iniciar Sesion</a>
                @else
                <div class="d-inline">
                    <a href="{{ route('perfil') }}" class="btn btn-success" id="titulo">Ir al Perfil</a>
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-danger" id="titulo">Cerrar Sesion</button>
                    </form>
                </div>
                @endif

            </div>
    </nav>

    <nav id="espacio">
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <div class="card shadow">
                    <div class="card-body" id="papel">
                        <h3 class="card-title text-center" id="titulo">Iniciar Sesion</h3>
                        <form action="{{ route('login.post') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="correo" class="form-label" id="texto">Correo Electronico</label>
                                <input type="email" class="form-control" id="correo" name="correo" placeholder="Introduce tu correo" value="{{ old('correo') }}" required>
                                @error('correo')
                                <div class="text-danger mt-1" id="titulo">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label" id="texto">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Introduce tu contraseña" required>
                                @error('password')
                                <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <br>
                            <button type="submit" class="btn btn-success p-3" id="titulo">
                                <h2>Iniciar Sesion.</h2>
                            </button>
                        </form>

                        <br>
                        <h3 class="text-center" id="titulo">¿No tienes una cuenta? <a href="{{ route('register') }}">Crear una cuenta</a></h3>
                        <br>
                        @if (session('success'))
                        <div class="alert alert-success" id="titulo">
                            {{ session('success') }}
                        </div>
                        @endif

                        @if ($errors->has('auth'))
                        <div class="alert alert-danger" id="titulo">
                            {{ $errors->first('auth') }}
                        </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav id="espacio">
    </nav>
    
    <footer class="container-fluid py-4">
        <div class="row justify-content-between align-items-center text-center text-md-start">
            <div class="col-md-4 mb-3 mb-md-0">
                <img src="/imgs/logo.png" id="iconos" class="me-2" alt="Logo">
                <img src="/imgs/nombre.png" id="iconos" alt="Nombre">
            </div>

            <div class="col-md-4 mb-3 mb-md-0 text-center">
                <h3 id="titulo">Redes sociales:</h3>
                <img src="/imgs/iconos.png" id="iconos" alt="Iconos de redes sociales">
            </div>

            <div class="col-md-4 text-md-end">
                <h3 id="titulo">Páginas Legales:</h3>
                <a href="" class="d-block">Política de Cookies</a>
                <a href="" class="d-block">Política de Privacidad</a>
                <a href="" class="d-block">Términos y Condiciones de Uso</a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>