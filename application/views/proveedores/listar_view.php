<!doctype html>
<html lang="es-MX">
    <head>
        <meta charset="UTF-8">
        <title>Proveedores</title>
        <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css">
        <script src="<?php echo base_url();?>js/jquery-3.1.1.js"></script>
    </head>
    <body>
    <div class="container">
      <div class="row">
        <div class="text-center"><h1 class="h1">Proveedores</h1></div>
        
        <a href="formulario" class="btn btn-success"><span class="glyphicon glyphicon-pencil">Nuevo</span></a>
       
	<br />
        
        <table class="table table-bordered table-striped table-hover" >
		<thead>
                    <td><h3>idProveedor</h3></td>
                    <td><h3>Nombre</h3></td>
					 <td><h3>Email</h3></td>
					 <td><h3>Telefono</h3></td>
					  <td><h3>Empresa</h3></td>
	            <td><h3>statusC</h3></td>
		    <td><h3>Acciones</h3></td>
                    <td></td>
		</thead>	
		<tbody>
            
        <?php 
        foreach ($pro as $filas):
            if($filas->statusC == 1){
                $glyphicon = "glyphicon-eye-open";
                $btn = "btn-success";
            }else{
                $glyphicon = "glyphicon-eye-close";
                $btn = "btn-danger";
            }
?>
        <tr>
		<td><?php echo $filas->idProveedor;?></td>
		<td><?php echo $filas->nombreproveedor;?></td>
		<td><?php echo $filas->email;?></td>
		<td><?php echo $filas->telefono;?></td>
		<td><?php echo $filas->empresa;?></td>
                <td> <a href="modificarStatus/<?php echo $filas->idProveedor."/".$filas->statusC; ?>" class="btn <?php echo $btn; ?>">
                        <span class="glyphicon <?php echo $glyphicon; ?>"></span></a></td>
		<td>  
		<a href="editar/<?php echo $filas->idProveedor?>" class="btn btn-warning" ><span class="glyphicon glyphicon-edit">Editar</span></a>
                </td>
                
                <td>
		<a href="eliminar/<?php echo $filas->idProveedor?>" class="btn btn-danger" ><span class="glyphicon glyphicon-trash">Eliminiar</span></a>
		</td>
                
	</tr>  
           <?php endforeach; ?> 
		</tbody>
	</table>
        </div>
      </div>  
    </body>
</html> 
<!--<a href="borrar.php?id=1&nombre=juan">Enlace</a> PHP
<a href="borrar.php?id=1">Enlace</a> PHP
<a href="borrar/1">Enlace</a> CI -->
