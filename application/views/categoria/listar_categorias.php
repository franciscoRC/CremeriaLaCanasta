<!doctype html>
<html lang="es-MX">
    <head>
        <meta charset="UTF-8">
        <title>Categorias</title>
        <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css">
        <script src="<?php echo base_url();?>js/jquery-3.1.1.js"></script>
    </head>
    <body>
    <div class="container"> 
      <div class="row">
        <div class="text-center"><h1 class="h1">Lista de Categorias</h1></div>
<!--                "<?php //echo base_url(); ?>index.php/Alumnos_controller/mostrarFormulario"
                ../mostrarFormulario -->
        <a href="mostrarFormulario" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span>Nuevo</a>
       <br />
        <table class="table table-bordered table-striped table-hover" >
		<thead>
                    <td>#</td>
                    <td><h3>Nombre</h3></td>
                    <td><h3>Descripcion</h3></td>
                    <td><h3>Estatus</h3></td>
                    <td><h3>id</h3></td>
                    <td colspan="2"><h3>Acciones</h3></td>
                   
		</thead>	
		<tbody>
            
        <?php
        $i= 1;
        foreach ($categorias as $filas):
            
            if($filas->status == 1){
                $glyphicon = "glyphicon-eye-open";
                $btn = "btn-success";
            }else{
                $glyphicon = "glyphicon-eye-close";
                $btn = "btn-danger";
            }
?>
        <tr>
                <td><?php echo $i; ?></td>	
                <td><?php echo $filas->nombre;?></td>
		<td><?php echo $filas->descripcion;?></td>       
                <td><a href="modificarStatus/<?php echo $filas->nombre."/".$filas->status; ?>"  class="btn <?= $btn;  ?>" > <span class="glyphicon <?=$glyphicon?>"> </span></a></td>
                <td><?php echo $filas->idCategoria;?></td>
                
                
		<td>  
		<a href="frmModificarCategoria/<?php echo $filas->nombre?>" class="btn btn-warning" ><span class="glyphicon glyphicon-edit">Editar</span></a>
                </td>
                
                <td>
		<a href="eliminarCategoria/<?php echo $filas->nombre?>" class="btn btn-danger" ><span class="glyphicon glyphicon-trash">Eliminiar</span></a>
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
