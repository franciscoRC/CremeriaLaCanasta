<!doctype html>
<html lang="es-MX">
    <head>
        <meta charset="UTF-8">
        <title>Agregar Producto</title>
        <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css">
        <script src="<?php echo base_url();?>js/jquery-3.1.1.js"></script>
    </head>
    <body>
    <div class="container">
      <div class="row">
        <div class="text-center"><h1 class="h1">Agregar Nuevo Producto</h1></div>
        <form action="guardarProducto" method="post" >
            
            <label for="producto">Nombre</label>
            <input type="text" name="producto">
            <br>
            <label for="precio">Precio</label>
            <input type="text" name="precio">
            <br>
            <label for="status">Estatus</label>
            <input type="text" name="status">
            <br>
            <label for="categoria">Categoria</label>
            <select name="categoria">
                <option value="0"> Seleciona una categoria</option>
                <?php foreach($categorias as $filas):?>
                <option value="<?php echo $filas->idCategoria;?>">
                    <?php echo $filas->nombre;?>
                </option>
                <?php endforeach; ?>
           
            </select>
            <br>
            <input type="submit" class="btn btn-success">
        </form>
      </div>
    </div>
    </body>
</html> 