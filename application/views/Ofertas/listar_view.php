<!doctype html>
<html lang="es-MX">
    <head>
        <meta charset="UTF-8">
        <title>Ofertas</title>
        <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css">
        <script src="<?php echo base_url();?>js/jquery-3.1.1.js"></script>
    </head>
    <body>
    <div class="container">
      <div class="row">
        <div class="text-center"><h1 class="h1">Lista de Ofertas</h1></div>
        
       
        
	 <hr>
        
        <table class="table table-bordered table-striped table-hover" >
		<thead>
                    
                    <td><h3>IdOfertas</h3></td>
                    <td><h3>Nombre</h3></td> 
	            <td><h3>Descripcion</h3></td> 
		    <td><h3>Estatus</h3></td>  
                    <td><h3>Accion</h3></td>
                    
                    
                  
		</thead>	
		<tbody>
            
        <?php 
        foreach ($ofertas as $filas):
            
?>
        <tr>

	        <td><?php echo $filas->idOfertas;?></td>	
                <td><?php echo $filas->nombre;?></td>
		<td><?php echo $filas->descripcion;?></td>
                <td><?php echo $filas->status;?></td>
                
              
                <td>
		<a href="eliminarOferta/<?php echo $filas->idOferta?>" class="btn btn-danger" ><span class="glyphicon glyphicon-trash">Eliminiar</span></a>
		</td>
                
	</tr>  
           <?php endforeach; ?> 
		</tbody>
	</table>
        </div>
      </div>  
    </body>
</html> 

