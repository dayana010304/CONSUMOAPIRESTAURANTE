<?php 
    session_start();
    $datos_post = http_build_query(
        array(
            'IdPlato' => $_POST['IdPlato']
        )
    );
    $opciones = array('http' =>
        array(
            'method' => 'GET',
            'header' => 'Content-type: application/x-www-form-urlencoded',
            'content' => $datos_post
        )
        );
    $contexto = stream_context_create($opciones);
    $data = json_decode(file_get_contents('http://localhost/APICRUDRESTAURANTEPHP/api/single_read.php?'.$datos_post,true,$contexto));

    $_SESSION['IdPlato'] = $data->IdPlato;
    $_SESSION['Nombre'] = $data->Nombre;
    $_SESSION['Descripcion'] = $data->Descripcion;
    $_SESSION['Precio'] = $data->Precio;
    header('location: buscarplato.php');

?>