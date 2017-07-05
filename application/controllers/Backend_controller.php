<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend_Controller extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
        $this->load->model('Productos_model');
    }
    
    public function Admin()
	{
        $data['productos']=  $this->Productos_model->consultarProducto();
        $data['tabla']='producto/listar_productos';
        $this->load->view('Admin', $data);
	}
  }
