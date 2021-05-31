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
                        <h2>Buscar y actualizar platos</h2>
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
    session_start();
    session_destroy();
    if (isset($_SESSION['IdPlato'])){
        $IdPlato = $_SESSION['IdPlato'];
    }else{
        $IdPlato = '';
    }
    if (isset($_SESSION['Nombre'])){
        $Nombre = $_SESSION['Nombre'];
    }else{
        $Nombre = '';
    }
    if (isset($_SESSION['Descripcion'])){
        $Descripcion = $_SESSION['Descripcion'];
    }else{
        $Descripcion = '';
    }
    if (isset($_SESSION['Precio'])){
        $Precio = $_SESSION['Precio'];
    }else{
        $Precio = '';
    }


?>
<script>
    function updatePlato()
    {
        document.getElementById('IdPlatou').value = document.getElementById('IdPlato').value;
        document.getElementById('IdPlatod').value = document.getElementById('IdPlato').value;
        document.getElementById('Nombreu').value = document.getElementById('Nombre').value;
        document.getElementById('Preciou').value = document.getElementById('Precio').value;
        document.getElementById('Descripcionu').value = document.getElementById('Descripcion').value;
    }
</script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<div class="container">
    <form method="POST" action="encontrarplato.php">
        <div class="col-3">
            <label for="IdPlato" class="form-label">IdPlato</label>
            <input type="text" class="form-control" id="IdPlato" name="IdPlato" 
                value="<?php echo $IdPlato; ?>">
                <br>
            <button type="submit" class="btn btn-warning">Buscar plato</button>
        </div>
        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="Nombre" name="Nombre"
            value="<?php echo $Nombre; ?>">
        </div>
        <div class="mb-3">
            <label for="Descripcion" class="form-label">Descripcion</label>
            <input type="text" class="form-control" id="Descripcion" name="Descripcion"
            value="<?php echo $Descripcion; ?>">
        </div>
        <div class="mb-3">
            <label for="Precio" class="form-label">Precio</label>
            <input type="text" class="form-control" id="Precio" name="Precio"
            value="<?php echo $Precio; ?>">
        </div>
        </form>
        <form action="updatePlato.php" method="post" name="plmupdate" id="plupdate">
            <input type="hidden"  class="form-control" id="IdPlatou" name="IdPlatou">
            <input type="hidden"  class="form-control" id="Nombreu" name="Nombreu">
            <input type="hidden"  class="form-control" id="Preciou" name="Preciou">
            <input type="hidden"  class="form-control" id="Descripcionu" name="Descripcionu">
            <button type="submit" class="btn btn-warning" style="float:left;"
             onclick="updatePlato()" >Actualizar</button>
        </form>
        <form action="deletePlato.php" method="POST">
            <input type="hidden"  class="form-control" id="IdPlatod" name="IdPlatod">           
            <button type="submit" class="btn btn-warning" style="float:left;margin-left:20px;"
            onclick="updatePlato(); return confirm('Seguro deseas borrar este registro?');"
            >Eliminar</button>
        </form>
        
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
                                        <a class="nav-link" href="index.html">Bienvenida<span class="sr-only">(current)</span></a>
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
                        <p>Copyright @2018 All rights reserved</i> by <a href="img/core-img/BazardelMetal.ico" target="_blank">MetalHead</a></p>
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