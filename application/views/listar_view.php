<!doctype html>
<html lang="es-MX">
    <head>
        <meta charset="UTF-8">
        <title>Carreras</title>
        <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css">
        <script src="<?php echo base_url();?>js/jquery-3.1.1.js"></script>
    </head>
    <body>
    <div class="container">
      <div class="row">
        <div class="text-center"><h1 class="h1">Lista de Carreras</h1></div>
        
        <a href="formulario" class="btn btn-default"><span class="glyphicon glyphicon-pencil">Nuevo</span></a></br>
        
        
        <table class="table" >
		<thead>
                <td><h3 class="h3">idCarrera</h3></td>
                    <td><h3>Carrera</h3></td>
	            <td><h3>statusC</h3></td>
		    <td><h3>Acciones</h3></td>
		</thead>	
		<tbody>
            
        <?php 
        foreach ($carreras as $filas):   
?>
        <tr>

		<td><?php echo $filas->idCarrera;?></td>
		<td><?php echo $filas->Carrera;?></td>
		<td><?php echo $filas->statusC;?></td>
		<td>
		<form action="" method="post">
		<input type="hidden" name="id2" value="">							
		<input type="submit" value="Actualizar" class="alert alert-warning">
                
                <input type="hidden" name="id3" value="">
		<input type="submit" value="Eliminar" class="alert alert-danger">
		</form>	
		</td>
                
	</tr>  
           <?php endforeach; ?> 
		</tbody>
	</table>
        </div>
      </div>  
    </body>
</html>                     

