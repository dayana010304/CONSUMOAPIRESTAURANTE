<?php
    $datos_post = http_build_query
    (
        array
        (
            'Nombre' => $_POST['Nombre'],
            'Descripcion' => $_POST['Descripcion'],
            'Precio' => $_POST['Precio'],
            'Imagen' => $_POST['Imagen'],
        )
    );
    //strean_context_create: crear un contexto de flujo (debe ser un arrejo asociativo)
    $opciones = array('http' =>
        array
        (
            'method' => 'GET',
            'header' => 'Content-type: aplication/x-www-form-urlencoded',
            'content' => $datos_post
        )
    );
    $contexto = stream_context_create($opciones);
    $resultado = file_get_contents('http://localhost:80/APICRUDRESTAURANTEPHP/api/create.php?'.$datos_post, false, $contexto);
    header('location: producto.php');
    
?>