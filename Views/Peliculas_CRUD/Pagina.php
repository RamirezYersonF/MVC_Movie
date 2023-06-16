<?php
require_once '../../Controllers/peliculasController.php';
$obj = new PeliculasController();
$rows = $obj->index();

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .custom-div {
            text-align: center;
            padding: 20px;
            background-color: #f8f9fa;
            width: 100%;
            margin: 30px 0;
        }

        .custom-h2 {
            font-size: 36px;
            font-weight: bold;
            color: #333;
        }

        .custom-p {
            font-size: 24px;
            color: #555;
            text-align: justify;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background:#5D5A5A;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../../img/icono.png" width="70px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" style="color:white;" aria-current="page" href="#">Inicio</a>
                    <a class="nav-link" style="color:white;" href="#">Peliculas</a>
                    <a class="nav-link" style="color:white;" href="#">Productos</a>
                    <a class="nav-link disabled" style="color:white;">Contactos</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="custom-div">
                    <h2 class="custom-h2">Bienvenidos</h2>
                    <p class="custom-p">Las mejores películas las encuentras aquí, con una
                        amplia selección de géneros y emocionantes historias que te transportarán a nuevos mundos llenos
                        de aventuras y sorpresas. No importa si eres un amante del cine clásico o prefieres las últimas
                        producciones, nuestra colección tiene algo especial para cada cinéfilo. ¡Prepárate para
                        disfrutar de momentos inolvidables y sumergirte en la magia del séptimo arte</p>
                </div>
            </div>
        </div>
    </div>
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://cdn.milenio.com/uploads/media/2022/04/13/una-pelicula-live-action-ocupa.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://cdn.milenio.com/uploads/media/2022/04/13/una-pelicula-live-action-ocupa.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://cdn.milenio.com/uploads/media/2022/04/13/una-pelicula-live-action-ocupa.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="custom-div">
        <h2 class="custom-h2">Estrenos</h2>
        <p class="custom-p">Descubre las películas más recientes y de buena calidad en
            nuestra selección exclusiva. Nuestro equipo de expertos en cine se ha encargado de buscar y curar
            cuidadosamente los últimos estrenos de la industria cinematográfica. Desde emocionantes películas de acción
            y aventura hasta conmovedores dramas y emocionantes thrillers, encontrarás una amplia variedad de opciones
            para satisfacer tus gustos. Cada película ha sido seleccionada por su calidad cinematográfica, actuaciones
            destacadas y valor artístico. Prepárate para disfrutar de la mejor experiencia cinematográfica y sumérgete
            en historias cautivadoras que te harán reír, llorar y reflexionar</p>
    </div>
    <?php if ($rows) : ?>
        <div class="row" style="margin: 0 auto;">
            <?php foreach ($rows as $row) : ?>
                <div class="col-md-4">
                    <div class="card" style="margin-bottom: 30px;">
                        <img src="<?php echo $row[2] ?>" alt="Imagen de la película">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row[1] ?></h5>
                            <p class="card-text"><?php echo $row[3] ?></p>
                            <p class="card-text">Fecha de publicacion: <?php echo $row[4] ?></p>
                            <p class="card-text">Tipo de genero: <?php echo $row[5] ?></p>
                            <a href="#" class="btn btn-primary">Ver película</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <h1 class="text-center" style="margin: 30px 0;">No hay Peliculas actualmente</h1>
            </tr>
        </div>
    <?php endif; ?>
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Información de contacto</h5>
                    <p>Dirección: Calle Principal #123, Ciudad</p>
                    <p>Teléfono: 123-456-7890</p>
                    <p>Email: info@cineejemplo.com</p>
                </div>
                <div class="col-md-6">
                    <h5>Horarios</h5>
                    <p>Lunes a Viernes: 9:00 AM - 11:00 PM</p>
                    <p>Sábados y Domingos: 10:00 AM - 11:00 PM</p>
                </div>
            </div>
            <hr>
            <p class="text-center">© <?php echo date("Y"); ?> Cine Ejemplo. Todos los derechos reservados.</p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>