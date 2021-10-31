<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title><?php echo $titulo ?></title>
    <link rel="shortcut icon" class="rounded-circle" href="<?php echo base_url('assets/img/logo0.jpeg') ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fleur+De+Leah&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/imagehover.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/timeline.css') ?>">
    <title><?php echo $titulo ?></title>
</head>

<!-- MENU TALITA CUMI -->


<nav id="menu" class="menu-nav fixed-top navbar navbar-expand-lg navbar-dark bg-pri">
    <div class="container">
        <a href="<?php echo base_url() ?>"><img src="<?php echo base_url('assets/img/logo0.jpeg') ?>" class="rounded-circle" alt="" width="80"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars change-i"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav menu-talita" data-animation="to-left">
                <li class="nav-item active">
                    <a class="nav-link disabled" href="">Áreas de Formación</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link disabled" href="">Galería</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url('Historia') ?>">Historia de la Academia</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url('Mision_Vision') ?>">Misión y Visión</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="header">

    <div class="pagina-fondo"></div>


    <h1 class="tituloPagina text-center"> <?php echo $banner ?></h1>


</header>



<!-- FIN MENU -->



<body>