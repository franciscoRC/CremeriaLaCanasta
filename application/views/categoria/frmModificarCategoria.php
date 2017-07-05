<!doctype html>
<html lang="es-MX">
    <head>
        <meta charset="UTF-8">
        <title>Editar Carrera</title>
    </head>
    <body>
       <?php foreach ($categoria as $filas):?>
        <form action="../modificarCategoria" method="POST" >
            <label for="idCategoria">idCategoria</label>
            <input type="text" name="idCategoria"
                   value="<?php echo $filas->idCategoria; ?>">
            <br>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="<?php echo $filas->nombre; ?>">
            <br>
            <label for="status">Estatus</label>
            <input type="text" name="status" value="<?php echo $filas->status; ?>">
            <br>
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" value="<?php echo $filas->descripcion; ?>">
            <br>
            <input type="submit">
            
        </form>
        <?php endforeach; ?> 
    </body>
</html>  

