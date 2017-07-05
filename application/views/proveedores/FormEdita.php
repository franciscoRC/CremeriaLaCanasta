<!doctype html>
<html lang="es-MX">
    <head>
        <meta charset="UTF-8">
        <title>Form proveedores</title>
		    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css">
			<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
        <script src="<?php echo base_url();?>js/jquery-3.1.1.js"></script>
    
	</head>
    <body>
	<div align="center">
	 <h2> Ingresa los datos del Proveedor</h2>
	 </div>
       <?php foreach ($pro as $filas):?>
        <form class="form-horizontal form-label-left default-behavior" action="../modificar" method="POST" >
		    <div class="form-group">
               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">id
               </label>
               <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" name="idProveedor" class="form-control" value="<?php echo $filas->idProveedor?>"><br/>
			  </div>
              </div>
			    <div class="form-group">
               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nombre
               </label>
               <div class="col-md-6 col-sm-6 col-xs-12">
         
            <input type="text" name="nombre" class="form-control" value="<?php echo $filas->nombreproveedor?>"><br/>
			  </div>
              </div>
			    <div class="form-group">
               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email
               </label>
               <div class="col-md-6 col-sm-6 col-xs-12">
			    
            <input type="text" name="email" class="form-control" value="<?php echo $filas->email?>"><br/>
			  </div>
              </div>
			    <div class="form-group">
               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Telefono
               </label>
               <div class="col-md-6 col-sm-6 col-xs-12">
			    
            <input type="text" name="telefono" class="form-control"  value="<?php echo $filas->telefono?>"><br/>
			  </div>
              </div>
			    <div class="form-group">
               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Empresa
               </label>
               <div class="col-md-6 col-sm-6 col-xs-12">
			   
            <input type="text" name="empresa" class="form-control" value="<?php echo $filas->empresa?>"><br/>
            
           
     	  <div class="form-group">
               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">
               </label>
               <div class="col-md-6 col-sm-6 col-xs-12">
           <button type="submit" class="btn btn-primary">Guardar</button>
		   		   </div>
              </div>
        </form>
        <?php endforeach; ?> 
    </body>
</html>  

          