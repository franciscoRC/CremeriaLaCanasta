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
        <form class="form-horizontal form-label-left default-behavior" action="agregar" method="POST" >
              <div class="form-group">
               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nombre
               </label>
               <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" class="form-control" required name="nombre"><br>
			   </div>
              </div>
			    <div class="form-group">
               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email
               </label>
               <div class="col-md-6 col-sm-6 col-xs-12">
			
			 <input type="text" class="form-control"   name="email"><br>
			 
			   </div>
              </div>
			  <div class="form-group">
               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Telefono
               </label>
               <div class="col-md-6 col-sm-6 col-xs-12">
			
			    <input type="text" class="form-control"  name="telefono"><br>
				   </div>
              </div>
			   <div class="form-group">
               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Empresa
               </label>
               <div class="col-md-6 col-sm-6 col-xs-12">
		
				<input type="text" class="form-control"  name="empresa"><br>
				   </div>
              </div>
			  
			  <div class="form-group">
               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">
               </label>
               <div class="col-md-6 col-sm-6 col-xs-12">
           <button type="submit" class="btn btn-primary">Guardar</button>
		   		   </div>
              </div>
        </form>
		


    </body>
</html>  
