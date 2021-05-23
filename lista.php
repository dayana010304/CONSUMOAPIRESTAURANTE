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
    <h2>Employee List From API REST</h2>
    <br>
    <table class="table table-hover table-bordered table-striped" id="platos">
        <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th colspan="2">Action</th>
        </thead>
        <tbody>
            <?php
            foreach ($data['body'] as $row) { ?>
                <tr>
                    <td><?php echo $row['IdPlato']; ?></td>
                    <td><?php echo $row['Nombre']; ?></td>
                    <td><?php echo $row['Descripcion']; ?></td>
                    <td><?php echo $row['Precio']; ?></td>
                    <td><a href="#">Update</a></td>
                    <td><a href="#">Delete</a></td> 
                </tr>
            <?php
            } ?>
        </tbody>
    </table>
</div>