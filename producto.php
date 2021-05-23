<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<div class="container">
    <h2>Platos del restaurante</h2>
    <form method="POST" action="guardar.php">
        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="Nombre" name="Nombre">
        </div>
        <div class="mb-3">
            <label for="Descripcion" class="form-label">Descripcion</label>
            <input type="text" class="form-control" id="Descripcion" name="Descripcion">
        </div>
        <div class="mb-3">
            <label for="Precio" class="form-label">Precio</label>
            <input type="text" class="form-control" id="Precio" name="Precio">
        </div>
        <div class="mb-3">
            <label for="Imagen" class="form-label">Imagen</label>
            <input type="text" class="form-control" id="Imagen" name="Imagen">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>