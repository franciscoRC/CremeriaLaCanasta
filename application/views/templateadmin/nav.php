<body>
    <div class="header">
<!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">
                    <img src="assets/img/logo.png" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
           </nav>
    

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                               
                            </div>
                            <div class="user-info">
                                <div>Canasta<strong>Miris</strong></div>
                                <div class="user-text-online">
                                   <!-- <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Conectado -->
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                   
                    
                    <li class="selected">
                        <a href="<?php echo base_url();?>index.php/Backend_controller/Admin"><i class="fa fa-dashboard fa-fw"></i>Productos</a>
                    </li>
                   
                     <li>
                        <a href=""><i class="fa fa-flask fa-fw"></i>Bienvenido</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/Productos_controller/listarProducto"><i class="fa fa-table fa-fw"></i>Productos</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/Categoria_controller/listarCategoria"><i class="fa fa-edit fa-fw"></i>Categorias</a>
                    </li>
                      <li>
                        <a href="<?php echo base_url();?>index.php/Proveedor_controller/listar"><i class="fa fa-edit fa-fw"></i>Proveedor</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/Oferta_controller/listar"><i class="fa fa-edit fa-fw"></i>Ofertas</a>
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
    </div>
        
</div>

