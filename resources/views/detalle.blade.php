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

    <br><br>

    <div class="container" id="papel">
        <div class="container text-center">
            <div class="row align-items-start">
                <div class="col 3">
                    <p id="texto">Buenas soy {{$mascota-> nombre}}, aqui te cuanto todo sobre mi.</p>

                    <p id="texto"> Tengo un peso apoximado de unos {{$fichaSalud-> peso}} Kilos.</p>

                    @if(($fichaSalud->esterilizacion) == 1)
                    <p id="texto"> Estoy esterilizado. </p>
                    @else
                    <p id="texto"> Aun no estoy esterilizado. </p>
                    @endif

                    @if(($fichaSalud->desparasitacion) == 1)
                    <p id="texto"> Estoy completamente desparasitado y libre de infecciones. </p>
                    @else
                    <p id="texto"> Aun estoy en el proceso de desparasitacion. </p>
                    @endif

                    @if (!empty($fichaSalud-> MicroChip))
                    <p id="texto"> Si tengo un Micro Chip puesto y funcionando.</p>
                    @else
                    <p id="texto"> Estoy pendiente de la colocacion de un micro chip.</p>
                    @endif
                </div>

                <div class="col">
                    <img src="{{$mascota-> foto_mascotas}}" alt="" id="fotoDetalle">
                </div>
            </div>

            <br> <br>

            <div class="row align-items-start">
                <div class="col 2">
                    <p id="texto">Estas son las vacunas que ya tengo puestas:</p>
                    @if (!empty($fichaSalud->vacunasPuestas))
                    <ul>
                        @foreach (explode(',', $fichaSalud->vacunasPuestas) as $vacuna)
                        <li id="texto">{{$vacuna}}.</li>
                        @endforeach
                    </ul>
                    @endif
                </div>

                <div class="col 2">
                    <p id="texto">Estas son algunas de las vacunas que tengo pendientes:</p>
                    @if (!empty($fichaSalud->vacunasPendientes))
                    <ul>
                        @foreach (explode(',', $fichaSalud->vacunasPendientes) as $vacuna)
                        <li id="texto">{{$vacuna}}.</li>
                        @endforeach
                    </ul>
                    @else
                        <ul>
                            <li id="texto">No tiene ninguna vacuna pendiente.</li>
                        </ul>
                    @endif
                </div>
            </div>

            <div class="row align-items-start">
                <div class="col">
                    <p id="texto"> si quieres adoptarme lo puedes hacer ahora: </p>

                </div>

                <div class="col">
                    <a class="btn btn-outline-danger p-4" href="{{ route('adopciones', $mascota->idMascota) }}" role="button" id="titulo">¡ADOPTAME AHORA!</a>
                </div>
            </div>

        </div>
    </div>

    <nav id="espacio">
    </nav>

    <div class="modal fade" id="mascotaAdoptadaModal" tabindex="-1" aria-labelledby="mascotaAdoptadaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mascotaAdoptadaModalLabel">Mascota ya adoptada</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Esta mascota ya ha sido adoptada por otro usuario. ¡Gracias por tu interés!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

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