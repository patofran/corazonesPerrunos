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

    <nav class="container text-center mt-5" id="papel">
        <h1 id="titulo">Bienvenidos a coracones Perrunos.</h1>
        <br>
        <h3 id="texto">
            Una web en la que las personas puedan tener más facilidades para encontrar mascotas y compañeros de una manera más justa y responsable.
            Ayúdanos a dar un hogar a muchos de los miles de animales abandonados. Por desgracia, en nuestro país las cifras alcanzan números que no podemos imaginar.
            <br>
            Solo en 2023 se abandonaron 170.712 perros y 115.970 gatos. Necesitamos visibilizar que son seres vivos, no un negocio.
        </h3>
    </nav>

    <nav id="espacio">
    </nav>

    </nav>
    <nav class="container-fluid text-center" id="posites">
        <nav class="row justify-content-evenly">

            <nav class="col-3" id="posit">
                <img class="mt-n1" src="/imgs/bug.png" alt="" width="auto" height="80vh">
                <h1 id="titulo">Felicidad a cambio <br> de amor ❤️</h1>
            </nav>

            <nav class="col-3" id="positFoto">
                <img class="mt-n1" src="/imgs/bug.png" alt="" width="auto" height="80vh">
            </nav>

            <nav class="col-3" id="positFoto2">
                <img class="mt-n1" src="/imgs/bug.png" alt="" width="auto" height="80vh">
            </nav>

            <nav class="col-3" id="posit">
                <img class="mt-n1" src="/imgs/bug.png" alt="" width="auto" height="80vh">
                <h1 id="titulo">Encuentra a tu macota ideal ahora</h1>
            </nav>

        </nav>
    </nav>

    <nav id="espacio">
    </nav>

    <nav class="container text-center mt-5" id="papel">
        <h1 id="titulo">Urgente!!</h1>
        <br>
        <p id="texto">Ahora más que nunca necesitamos ayuda para todos nuestros refugios asociados afectados por la DANA. Si quieres ayudar, tenemos un apartado de donaciones justo <a href="{{ route('donaciones') }}">aquí</a>.</p>
    </nav>

    <nav id="espacio_peque">
    </nav>

    <div id="carusel" class="carousel slide mt-5" data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carusel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carusel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carusel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carusel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carusel" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carusel" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#carusel" data-bs-slide-to="6" aria-label="Slide 7"></button>
            <button type="button" data-bs-target="#carusel" data-bs-slide-to="7" aria-label="Slide 8"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="{{ route('listaMascota') }}"><img src="/imgs/gatos/gato9.jpg" class="d-block img-fluid carousel-img" alt="Gato"></a>
            </div>
            <div class="carousel-item">
                <a href="{{ route('listaMascota') }}"><img src="/imgs/perros/perro1.jpg" class="d-block img-fluid carousel-img" alt="Perro 1"></a>
            </div>

            <div class="carousel-item">
                <a href="{{ route('listaMascota') }}"><img src="/imgs/perros/perro10.jpg" class="d-block img-fluid carousel-img" alt="Perro 1"></a>
            </div>

            <div class="carousel-item">
                <a href="{{ route('listaMascota') }}"><img src="/imgs/gatos/gato7.jpg" class="d-block img-fluid carousel-img" alt="Perro 1"></a>
            </div>

            <div class="carousel-item">
                <a href="{{ route('listaMascota') }}"><img src="/imgs/perros/perro5.jpg" class="d-block img-fluid carousel-img" alt="Perro 1"></a>
            </div>

            <div class="carousel-item">
                <a href="{{ route('listaMascota') }}"><img src="/imgs/gatos/gato6.jpg" class="d-block img-fluid carousel-img" alt="Perro 1"></a>
            </div>

            <div class="carousel-item">
                <a href="{{ route('listaMascota') }}"><img src="/imgs/gatos/gato4.jpg" class="d-block img-fluid carousel-img" alt="Perro 1"></a>
            </div>

            <div class="carousel-item">
                <a href="{{ route('listaMascota') }}"><img src="/imgs/perros/perro2.jpg" class="d-block img-fluid carousel-img" alt="Perro 2"></a>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carusel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carusel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <nav id="espacio_peque">
    </nav>

    <nav class="container text-center mt-5 mb-5" id="papel">
        <br>
        <p id="texto"><a href="{{ route('listaMascota') }}">Aqui</a> tienes un listado de algunas de las mascotas de las protectoras con las que estamos trabajando.</p>
        <br>
    </nav>

    <nav id="espacio-peque">
    </nav>

    <nav class="container text-center mb-5" id="papel">
        <h1 id="titulo"> Aqui un bonito video de nuestros amigos de la asociacion de gatos de pratraix diciendo muchas cosas interesantes sobre los gatos.</h1>

        <iframe width="auto" height="auto" src="https://www.youtube.com/embed/Y__shwHnH7Q?si=aI_OGNSQ-XJd6MDV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </nav>

    @if (session('success'))
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="successModalLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{ session('success') }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    @endif

    <nav id="espacio-peque">
    </nav>

    <section class="container text-center mb-5">
        <h2 class="text-center" id="titulo">Opiniones de nuestros usuarios</h2>

        <div class="row mt-4 justify-content-center">
            @forelse ($opiniones as $opinion)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="{{ $opinion->foto_mascota }}" class="card-img-top" alt="Foto de {{ $opinion->nombre_mascota }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body" id="papel">
                        <h3 class="card-title" id="texto">hola soy {{ $opinion->nombre_usuario }}</h3>
                        <p class="card-text" id="texto">
                            Estoy intentando adoptar a {{$opinion->nombre_mascota}} <br>
                            y pienso que:
                            {{ $opinion->comentario }}
                        </p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-md-4 mb-4">
                <p class="text-center" id="texto">Aún no hay opiniones. Sé el primero en compartir tu experiencia.</p>
            </div>
            @endforelse
        </div>
    </section>

    <nav id="espacio">
    </nav>

    <div class="accordion accordion-flush m-5 text-center" id="accordionFlush">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed custom-accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <h3 id="titulo">Quienes somos</h3>
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
                <div class="accordion-body text-justify" id="texto">
                    En Corrazones Perrunos queremos iniciar una pequeña iniciativa que busca marcar la diferencia en el mundo de la adopción de mascotas.
                    Nuestro principal objetivo es brindar visibilidad a aquellas protectoras de animales menos conocidas, ayudándolas a destacar y alcanzar un público más amplio.
                    <br> <br>
                    A través de nuestra web, creamos un puente entre estas protectoras y las personas que desean adoptar una mascota, fomentando el amor y el cuidado responsable por los animales.
                    Confiamos en que, al darles una mayor exposición, más personas se animen a abrir sus hogares y corazones, ofreciendo segundas oportunidades a quienes más lo necesitan.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed custom-accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    <h3 id="titulo">Intereses</h3>
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
                <div class="accordion-body" id="texto">
                    En Corazones Perrunos, nos preocupamos profundamente por las protectoras de animales y entendemos los desafíos económicos que enfrentan en su labor diaria.
                    Por ello, hemos diseñado nuestra plataforma pensando en ellos, cobrando lo mínimo posible por nuestros servicios.
                    <br> <br>
                    Nuestro modelo de sostenibilidad se basa principalmente en colaboraciones con terceros y en ingresos generados a través de publicidad responsable, lo que nos permite mantener operativa la plataforma sin trasladar una carga económica significativa a las protectoras.
                    Así, aseguramos que la mayor parte de los recursos y beneficios posibles se destinen directamente al bienestar de los animales.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed custom-accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    <h3 id="titulo">Adopciones</h3>
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
                <div class="accordion-body" id="texto">
                    Estamos trabajando día a día para hacer nuestras adopciones de una manera más dinámica y fácil, pensando no solo en facilitar el proceso para las protectoras, sino también en garantizar la seguridad de nuestras mascotas.
                    Nos aseguramos de que el nuevo hogar que les encontremos sea el adecuado, brindándoles la estabilidad y el cariño que merecen.
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
    <script>
        const successModal = new bootstrap.Modal(document.getElementById('successModal'));
        successModal.show();
    </script>
</body>

</html>