<!doctype html>
<html lang="es-MX">
    <head>
        <meta charset="UTF-8">
        <title>Productos</title>
        <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css">
        <script src="<?php echo base_url();?>js/jquery-3.1.1.js"></script>
    </head>
    <body>
    <div class="container">
      <div class="row">
        <div class="text-center"><h1 class="h1">Lista de Productos</h1></div>
        
        <a href="../Productos_controller/mostrarFormulario" class="btn btn-success"><span class="glyphicon glyphicon-pencil">Nuevo</span></a>
       
        
        <table class="table table-bordered table-striped table-hover" >
		<thead>
                    
                    <td><h3>#</h3></td>
                    <td><h3>Nombre</h3></td> 
                    <td><h3>Precio</h3></td>
	            <td><h3>Estatus</h3></td> 	      
                    <td><h3>Categoria</h3></td>
                   
                    <td colspan="2"><h3>Acciones</h3></td>
		</thead>	
		<tbody>
            
        <?php 
        $i= 1;
        foreach ($productos as $filas):
            if($filas->status == 1){
                $glyphicon = "glyphicon-ok-sign";
                $btn = "btn-success";
            }else{
                $glyphicon = "glyphicon-remove-sign";
                $btn = "btn-danger";
            }
?>
        <tr>
               
		<td><?php echo $i; ?></td>
                <td><?php echo $filas->producto;?></td>
                <td><?php echo $filas->precio;?></td>
                <td><a href="../modificarStatus/<?php echo $filas->producto."/".$filas->status; ?>" class="btn <?php echo $btn; ?>">
                        <span class="glyphicon <?php echo $glyphicon; ?>"></span></a></td>
               <td><?php echo $filas->nombre;?></td>
               
		<td>  
		<a href="../Productos_controller/frmModificarProducto/<?php echo $filas->producto?>" class="btn btn-warning" ><span class="glyphicon glyphicon-edit">Editar</span></a>
                </td>
                
                <td>
		<a href="../Productos_controller/eliminarProducto/<?php echo $filas->producto?>" class="btn btn-danger" ><span class="glyphicon glyphicon-trash">Eliminiar</span></a>
		</td>
                
 
           </tr> 
           <?php $i = $i+1; 
           endforeach; ?> 
		</tbody>
	</table>
        </div>
      </div>  
    </body>
</html> 
