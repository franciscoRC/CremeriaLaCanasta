<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Categoria_controller extends CI_Controller{
   function __construct() {
       parent::__construct();
       $this->load->model('Categoria_model');
       //$this->load->model('Productos_model');
   }
   public function listarCategoria(){
       $data['categorias'] = $this->Categoria_model->consultaCategoria();
       $this->load->view('categoria/listar_categorias', $data);
   }
   
    public function mostrarFormulario(){
        //$data['productos'] = $this->Productos_model->consultaProducto();
        $this->load->view("categoria/frmAgregarCategoria");
    }
    public function agregarCategoria(){
        //$idCategoria = $this->input->post('idCategoria');
        $nombre = $this->input->post('nombre');
       //$status = $this->input->post('status');
       $descripcion = $this->input->post('descripcion');
        
        $this->Categoria_model->guardarCategoria($nombre,$descripcion);
        redirect('Categoria_controller/listarCategoria');
    }
    
   public function eliminarCategoria($nombre) {
       $this->Categoria_model->borrar($nombre);
       redirect('Categoria_controller/listarCategoria');
   }

   
    public function editarCategoria($nombre) {
       $data ['categoria'] =$this->Carrera_model->listarUna($nombre);
      $this->load->view('categoria/frmModificarCategoria', $data);  
   }


   public function modificarCategoria() { 
       //$_post['carrera'];
       $idCategoria = $this->input->post("idCategoria");
       $nombre = $this->input->post("nombre");
       $descripcion = $this->input->post("descripcion");
       //$status = $this->input->post("status");
              
       $this->Categoria_model->modificarCategoria($idCategoria, $nombre, $descripcion);
        redirect('Categoria_controller/listarCategoria');
  
   }
    // modificar alumno
//    public function frmModificarCategoria($nombre) {
//        $data['categoria'] = $this->Categoria_model->listar();
//        $data['producto'] = $this->Productos_model->listarUna($nombre);
//        $this->load->view('categoria/frmModificarCategoria', $data);
//    }

   public function modificarStatus($nombre, $status) {
   if($status == 1){
       $status = 0;
   }else{
       $status = 1;
   } 
   $this->Categoria_model->modificarStatus($nombre, $status);
   redirect('Categoria_controller/listarCategoria');
   }
}
