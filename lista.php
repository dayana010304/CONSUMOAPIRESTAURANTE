<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags must come first in the head; any other head content must come after these tags -->

    <!-- Title -->
    <title >Restaurante</title>

    <!-- Favicon -->
    <link rel="icon" href="img/restaurant_food_hamburger__6614.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">

</head>

<body>

    <!-- ** Top Header Area Start ** -->
    <div class="top_header_area">
        <div class="container">
            <div class="row">
                <div class="col-5 col-sm-6">
                    <!--  Top Social bar start -->
                    <div class="top_social_bar">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!--  Login Register Area -->
                <div class="col-7 col-sm-6">
                    <div class="signup-search-area d-flex align-items-center justify-content-end">
                        <div class="login_register_area d-flex">
                            <div class="login">
                                <a href="register.html">Ingresa</a>
                            </div>
                            <div class="register">
                                <a href="register.html">Registrate</a>
                            </div>
                        </div>
                        <!-- Search Button Area -->
                        <div class="search_button">
                            <a class="searchBtn" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </div>
                        <!-- Search Form -->
                        <div class="search-hidden-form">
                            <form action="#" method="get">
                                <input type="search" name="search" id="search-anything" placeholder="Search Anything...">
                                <input type="submit" value="" class="d-none">
                                <span class="searchBtn"><i class="fa fa-times" aria-hidden="true"></i></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ** Top Header Area End ** -->
    <div class="breadcumb-area" style="background-image: url(img/restau.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumb-title text-center">
                        <h2>Registrar platos</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ** Header Area Start ** -->
    <header class="header_area">
        <div class="container">
            <div class="row">
                <!-- Logo Area Start -->
                <div class="col-12">
                    <div class="logo_area text-center" style="font-family: 'Poppins', sans-serif !important;">
                        <a href="producto.php" class="yummy-logo" ></a>
                    </div>
                </div>
            </div>


<?php

    //file_get_contents: Transmite un fichero completo a una cadena $data
    $data = json_decode(file_get_contents('http://localhost:80/APICRUDRESTAURANTEPHP/api/read.php'), true)

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#platos').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
        });
    });
</script>
<div class="container">
    <h2>Lista de platos</h2>
    <br>
    <table class="table table-hover table-bordered table-striped" id="platos">
        <thead>
            <th>Id plato</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
        </thead>
        <tbody>
            <?php
            foreach ($data['body'] as $row) { ?>
                <tr>
                    <td><?php echo $row['IdPlato']; ?></td>
                    <td><?php echo $row['Nombre']; ?></td>
                    <td><?php echo $row['Descripcion']; ?></td>
                    <td><?php echo $row['Precio']; ?></td>
                </tr>
            <?php
            } ?>
        </tbody>
    </table>
</div>
<!-- ** Footer Menu Area Start ** -->
<footer class="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-content">
                        <!-- Logo Area Start -->
                        <div class="footer-logo-area text-center">
                            <a href="producto.php" class="yummy-logo"></a>
                        </div>
                        <!-- Menu Area Start -->
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#yummyfood-footer-nav" aria-controls="yummyfood-footer-nav" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" aria-hidden="true"></i> Menu</button>
                            <!-- Menu Area Start -->
                            <div class="collapse navbar-collapse justify-content-center" id="yummyfood-footer-nav">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.html">Bienvenida</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="producto.php">Agregar platos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="lista.php">Lista de platos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="buscarplato.php">Buscar y actualizar platos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Acerca de Nosotros</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Contactanos</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Copywrite Text -->
                    <div class="copy_right_text text-center">
                        <p>Copyright @2021 All rights reserved</i> by <a href="img/core-img/BazardelMetal.ico" target="_blank">MetalHead</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- ** Footer Menu Area End ** -->

    <!-- Jquery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins JS -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
</body>