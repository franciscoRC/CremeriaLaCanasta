<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contacto_controller extends CI_Controller{
   function __construct() {
       parent::__construct();
       $this->load->model('Contacto_model');
       
      // $this->load->model('Productos_model');
   }
   public function listar(){
       $data['contacto'] = $this->Contacto_model->listar();//el nombre del array //'alumnos' es productos
       $this->load->view('Contacto/listar_view', $data);
   }
    public function mostrarFormulario(){
       $this->load->view('Contacto/frmAgregarProducto');
   }

   //aqui me quede
   public function guardarContacto() {
    $con = $this->input->post('contacto'); //nombre de la tabla
    $this->Contacto_model->guardarContacto($con);
    redirect('Contacto_controller/listar');
   }
   public function eliminarContacto($con) {
       $this->Contacto_model->borrar($con);
       redirect('Contacto_controller/listar');
   }
   
}
