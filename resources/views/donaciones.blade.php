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

    <nav class="container text-center mt-5" id="papel">
        <h1 id="titulo">❤️ Donaciones ❤️</h1>
        <br>
        <p id="texto">Sabemos que hay muchas personas a las que les gustaría ayudarnos, pero que no tienen el espacio o los recursos necesarios para poder adoptar en estos momentos.</p>

        <p id="texto">
            Por eso, hemos habilitado tanto un PayPal como un Bizum para que todo aquel que quiera hacer una aportación monetaria en ayuda de nuestros compañeros perrunos
            pueda hacerlo.
        </p>

        <p id="texto">
            También queremos implementar varios puntos de recogida de alimentos y productos relacionados con las mascotas, ya que, debido a los grandes daños producidos por la DANA, nos hemos quedado bastante
            cortos de material, tanto en algunas protectoras como en los materiales básicos necesarios para efectuar las adopciones.
        </p>

        <h3 id="texto">
            Ahora más que nunca, toda ayuda es poca ❤️❤️
        </h3>

    </nav>

    <nav class="container-fluid text-center" id="posites">
        <nav class="row">

            <nav class="col-3" id="posit">
                <img class="mt-n1" src="/imgs/bug.png" alt="" width="auto" height="80vh">
                <h1 id="titulo">Nuestro PayPal</h1>
                <a href="https://www.paypal.com/es/home"><img src="/imgs/paypal-logo.png" alt="" width="70%" height="70%"></a>
            </nav>

            <nav class="col-3" id="posit">
                <img class="mt-n1" src="/imgs/bug.png" alt="" width="auto" height="80vh">
                <h1 id="titulo">Nuestro nuevo patreon.</h1>
                <a href="https://www.patreon.com/es-ES"><img src="/imgs/Patreon_logo.png" alt="" width="70%" height="70%"></a>
            </nav>

            <nav class="col-3" id="posit">
                <img class="mt-n1" src="/imgs/bug.png" alt="" width="auto" height="80vh">
                <h1 id="titulo">Nuestro Bizzum</h1>
                <a href="https://bizum.com/es/donar/"><img src="/imgs/bizum-logo.png" alt="" width="70%" height="70%"></a>
            </nav>

        </nav>
    </nav>

    <nav id="espacio">
    </nav>

    <nav class="container text-center" id="papel">
        <p id="texto">Aqui tambien te dejamos algunas con las protectoras con las que estamos trabajando como puntos de recojida.</p>
        <br>
        <div class="row justify-content-around">
            <div class="col m-2">
                <p id="texto">Modepran Valencia.</p>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58583.90586949622!2d-0.46989165295533664!3d39.49333376134694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604570ed201961%3A0x4927a3e062dcf93!2sModepran%20Valencia!5e0!3m2!1ses!2ses!4v1736012206060!5m2!1ses!2ses" width="400" height="300" style="border:1px solid black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col m-2">
                <p id="texto">La Perrita Valiente - protectora de animales.</p>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d98648.66595584802!2d-0.718493977039403!3d39.40669089999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604ffe4ad392f1%3A0x7ea1d214a2b68597!2sLa%20Perrita%20Valiente%20-%20Protectora%20de%20animales!5e0!3m2!1ses!2ses!4v1736012505292!5m2!1ses!2ses" width="400" height="300" style="border:1px solid black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col m-2">
                <p id="texto">Asociación Patraix gats.</p>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d98647.11794847409!2d-0.513946602734375!3d39.407785200000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604ff9603b5bc3%3A0x5b2fd9fa51b1ce4c!2sAsociaci%C3%B3n%20Patraix%20gats!5e0!3m2!1ses!2ses!4v1736014091327!5m2!1ses!2ses" width="400" height="300" style="border:1px solid black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col m-2">
                <p id="texto">Petjades Trobades protectora de animales Valencia.</p>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d98647.11794847409!2d-0.513946602734375!3d39.407785200000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd605b8543adf483%3A0x998de98e5453a9cc!2sPetjades%20Trobades%20protectora%20de%20animales%20Valencia!5e0!3m2!1ses!2ses!4v1736014260617!5m2!1ses!2ses" width="400" height="300" style="border:1px solid black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col m-2">
                <p id="texto">Asociación Defensa Animal de Torrent - ADAT.</p>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d98646.97135811539!2d-0.4770393936082646!3d39.407888824692776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6051acaa689d37%3A0x5b65d2d366816f23!2sAsociaci%C3%B3n%20Defensa%20Animal%20de%20Torrent%20-%20ADAT!5e0!3m2!1ses!2ses!4v1736123017286!5m2!1ses!2ses" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </nav>

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