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
                    <ul class="dropdown-menu text-center">
                        <li><a id="listaEnlaces" class="dropdown-item" href="{{ route('donaciones') }}">Donaciones</a></li>
                        <li><a id="listaEnlaces" class="dropdown-item" href="{{ route('listaMascota') }}">Listado de las mascotas</a></li>
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

    <div class="container text-center" id="papel">
        <h1 id="titulo">Que cosas quieres cambiar de {{$mascota->nombre}}</h1>
        <br>
        <img src="{{$mascota-> foto_mascotas}}" alt="" id="fotoDetalle">

        @if ($errors->any())
        <div class="alert alert-danger p-5">
            <p id="texto">Algo no esta puesto como lo esperado, por favor revise los datos.</p>
            <ul>
                @foreach ($errors->all() as $error)
                <li>
                    <p id="texto">error({{$error}})</p>
                </li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('detalleAdmin.update', ['id' => $fichaSalud->idMascota]) }}" method="POST" class="mt-4 p-5">
            @csrf

            <div class="p-5">
                <label for="esterilizacion" class="form-label">
                    <h2 id="titulo">Estado de la esterilizacion.</h2>
                </label>
                <select class="form-select text-center" id="esterilizacion" name="esterilizacion">
                    <option value="1">Esterilizado</option>
                    <option value="0">No esterilizado</option>
                </select>
            </div>

            <div class="p-5">
                <label for="desparasitacion" class="form-label">
                    <h2 id="titulo">Estado de la desparasitacion.</h2>
                </label>
                <select class="form-select text-center" id="desparasitacion" name="desparasitacion">
                    <option value="1">Esta desparasitado</option>
                    <option value="0">No esta desparasitado</option>
                </select>
            </div>

            <div class="p-5">
                <label for="peso" class="form-label">
                    <h2 id="titulo">Peso de la Mascota</h2>
                </label>
                <input type="number" class="form-control text-center" id="peso" name="peso" placeholder="{{$fichaSalud->peso}}" step="0.01" min="0">
            </div>

            <div class="p-5">
                <label for="alergias" class="form-label">
                    <h2 id="titulo">Estado de las alergias de la mascota</h2>
                    <p id="texto">(En caso de no tener ninguna por favor escriba ninguna.)</p>
                </label>
                <input type="text" class="form-control text-center" id="alergias" name="alergias" placeholder="Ejemplo (lacteos, polen)" required>
            </div>

            <div class="p-5">
                <label for="vPuestas" class="form-label">
                    <h2 id="titulo">Estado de las vacunas puestas de la mascota</h2>
                </label>
                <input type="text" class="form-control text-center" id="vPuestas" name="vPuestas" placeholder="Ejemplo (Rabia, Moquillo)" required>
            </div>

            <div class="p-5">
                <label for="vPendientes" class="form-label">
                    <h2 id="titulo">Estado de las vacunas pendientes de la mascota</h2>
                </label>
                <input type="text" class="form-control text-center" id="vPendientes" name="vPendientes" placeholder="Ejemplo (Rabia, Moquillo)">
            </div>

            <div class="d-flex justify-content-evenly mt-5">

                <button id="titulo" type="submit" class="btn btn-success p-3">Guardar Cambios</button>
            </div>

        </form>

        <form action="{{ route('detalleAdmin.delete', ['id' => $fichaSalud->idMascota]) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta mascota? Esta acción no se puede deshacer.');" style="display: inline;">
            @csrf
            <button id="titulo" type="submit" class="btn btn-danger p-3">Eliminar Mascota</button>
        </form>

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


    @if(session('mascota_adoptada'))
    <script>
        window.onload = function() {
            var myModal = new bootstrap.Modal(document.getElementById('mascotaAdoptadaModal'));
            myModal.show();
        };
    </script>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>