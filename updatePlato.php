<?php 
$datos_post = http_build_query(
    array(
        'IdPlato' => $_POST['IdPlatou'],
        'Nombre' => $_POST['Nombreu'],
        'Descripcion' => $_POST['Descripcionu'],
        'Precio' => $_POST['Preciou']
    )
    );

$opciones = array('http'=>
    array(
        'method' => 'GET',
        'header' => 'Content-type: application/x-www-form-urlencoded',
        'content' => $datos_post
    )    
    );

$contexto = stream_context_create($opciones);
$resultado = file_get_contents('http://localhost/APICRUDRESTAURANTEPHP/api/update.php?'.$datos_post, false, $contexto);
header('location: buscarplato.php');

?>