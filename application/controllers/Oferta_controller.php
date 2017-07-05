<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Oferta_controller extends CI_Controller{
   function __construct() {
       parent::__construct();
       $this->load->model('ofertas_model');
       
      // $this->load->model('Productos_model');
   }
   public function listar(){
       $data['ofertas'] = $this->Ofertas_model->listarOferta();//el nombre del array //'alumnos' es productos
       $this->load->view('Ofertas/listar_view', $data);
   }
    public function mostrarFormulario(){
       $this->load->view('Ofertas/frmAgregarProducto');
   }

   //aqui me quede
   public function guardarOferta() {
    $ofer = $this->input->post('ofertas'); //nombre de la tabla
    $this->Ofertas_model->guardarOferta($ofer);
    redirect('Ofertas_controller/listar');
   }
   public function eliminarOferta($ofer) {
       $this->Oferta_model->borrar($ofer);
       redirect('Oferta_controller/listar');
   }
   
}
