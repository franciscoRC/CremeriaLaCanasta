<!doctype html>
<html lang="es-MX">
    <head>
        <meta charset="UTF-8">
        <title>Modificar Producto</title>    
    </head>
    <body>
        <div class="container">
      <div class="row">
       <?php foreach ($producto as $filas):?> 
        <form action="../modificarProducto" method="POST" >
            
            <label for="producto">producto</label>
            <input type="text" name="producto" value="<?= $filas->producto; ?>">
            <br>
            <label for="precio">Precio</label>
            <input type="text" name="precio" value="<?= $filas->precio; ?>">
            <br>
            <label for="status">Estatus</label>
            <input type="text" name="status" value="<?= $filas->status; ?>">
            <br>
            <select name="categoria">
                <option> Seleciona una categoria</option>
                <?php foreach($categoria as $fil): ?>
                <option  <?php if ($filas->idCategoria == $fil->idCategoria){ echo "selected='selected'"; }?> value=" <?php echo $fil->idCategoria; ?>">
                 
                <?php echo $fil->nombre;?>
                </option>
                <?php endforeach;?>
            </select>
            <br>
            <input type="submit" class="btn btn-success">
            
        </form>
        <?php endforeach; ?> 
      </div>
        </div>
    </body>
</html> 
