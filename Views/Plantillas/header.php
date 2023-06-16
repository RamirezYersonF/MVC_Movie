<?php $mostrar_menu = true ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img width="70px" src="data:image/png;base64,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" alt="Icono de la empresa"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php if ($mostrar_menu) { ?>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Opciones
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="Views/Peliculas_CRUD/index.php">Visualizar Pelicula</a>
                                </li>
                                <li><a class="dropdown-item" href="Views/Peliculas_CRUD/crear.php">Registrar Pelicula</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            <?php } ?>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>