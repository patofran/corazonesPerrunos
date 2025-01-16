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
    <br>

    <div class="container text-center" id="papel">
        <h1 id="titulo">Crear un nuevo usuario.</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>
                    <p id="texto">{{ $error }}</p>
                </li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('register.post') }}" method="POST" class="mt-4">
            @csrf
            <div class="mb-3">
                <label for="dni" class="form-label">
                    <h3 id="titulo">DNI.</h3>
                </label>
                <input type="text" class="form-control" id="dni" name="dni" placeholder="Introduce tu DNI" required>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">
                    <h3 id="titulo">Nombre.</h3>
                </label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduce tu nombre" required>
            </div>
            <div class="mb-3">
                <label for="apellidos" class="form-label">
                    <h3 id="titulo">Apellidos.</h3>
                </label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Introduce tus apellidos" required>
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">
                    <h3 id="titulo">Correo Electronico.</h3>
                </label>
                <input type="email" class="form-control" id="correo" name="correo" placeholder="Introduce tu correo" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">
                    <h3 id="titulo">Telefono.</h3>
                </label>
                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Introduce tu teléfono" required>
            </div>
            <div class="mb-3">
                <label for="contrasena" class="form-label">
                    <h3 id="texto">Contraseña (Debe tener al menos 6 caracteres.)</h3>
                </label>
                <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Introduce tu contraseña" required>
            </div>

            <button type="submit" class="btn btn-success p-3" id="titulo">
                <h2>Crear Cuenta</h2>
            </button>
        </form>

        <nav id="espacio">
        </nav>

        <h3 class="mt-3 text-center" id="titulo">¿Ya tienes una cuenta? <a href="{{ route('login') }}">Inicia sesion</a></h3>
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