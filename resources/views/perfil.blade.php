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

    @if ($usuario->id_usuarios == 10000000)
    <div class="alert alert-info text-center">
        <h2 id="Titulo">Apartado para administradores.</h2>
        <p id="texto">¿Quieres hacer alguna modificación sobre alguna de las mascotas? <br> puedes entrar <a href="{{route('listaMascotaAdmin')}}">aqui</a>.</p>
    </div>
    @endif

    <nav id="espacio">
    </nav>

    <div class="container text-center" id="papel">
        <h1 id="titulo">Hola de nuevo, {{ $usuario->nombre }}.</h1>
        <h3 id="texto">
            Aquí puedes ver el estado de las adopciones que has realizado junto con nosotros.
            <br><br>
            Gracias por el gran acto de adoptar. Ahora que ya has elegido a la mascota con la que quieres compartir una nueva vida, en unos pocos días recibirás un correo de la protectora para que puedas
            completar el proceso de adopción. ¡Muchas gracias!
        </h3>

        <h3 id="texto" class="mt-4">Mascotas Adoptadas:</h3>
        <br>
        <div class="row text-center justify-content-evenly">
            @forelse ($mascotasAdoptadas as $mascota)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ $mascota->foto_mascotas }}" class="card-img-top" alt="Foto de {{ $mascota->nombre }}" style="height: 250px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h3 id="texto">Dinos el motivo que te animó a adoptar a {{ $mascota->nombre }}:</h3>
                        <br>
                        <form action="{{ route('opinion.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id_usuario" value="{{ $usuario->id_usuarios }}">
                            <input type="hidden" name="idMascota" value="{{ $mascota->idMascota }}">
                            <input type="hidden" name="nombre_mascota" value="{{ $mascota->nombre }}">
                            <input type="hidden" name="foto_mascota" value="{{ $mascota->foto_mascotas }}">
                            <div class="mb-3">
                                <label class="form-label" id="texto">Tu nombre:</label>
                                <input type="text" class="form-control" value="{{ $usuario->nombre }}" disabled>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" id="texto">Nombre de la mascota</label>
                                <input type="text" class="form-control" value="{{ $mascota->nombre }}" disabled>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" id="texto">Comentario</label>
                                <textarea name="comentario" class="form-control" rows="3" placeholder="Escribe tu opinión aquí..." required></textarea>
                            </div>

                            <button type="submit" class="btn btn-success" id="texto">Danos tu opinion.</button>
                        </form>
                    </div>
                </div>
            </div>
            @empty
            <p>No tienes ninguna mascota en proceso de adopción.</p>
            @endforelse

        </div>
        <br><br>
        <h3 id="titulo">Muchas gracias por entrar a nuestra web esperamos que podamos acarcarte mas a una nueva mascota en tu vida.</h3>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <nav id="espacio">
    </nav>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

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