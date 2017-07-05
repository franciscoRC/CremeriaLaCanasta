<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Proveedor_controller extends CI_Controller{
   function __construct() {
       parent::__construct();
       $this->load->model('Proveedor_model');
   }
   public function listar(){
       $data['pro'] = $this->Proveedor_model->listar();
       $this->load->view('proveedores/listar_view', $data);
   }
   
    public function formulario(){
       $this->load->view('proveedores/FormAgrega');
   }

   public function agregar() {
    $nombre = $this->input->post('nombre'); 
	$email = $this->input->post('email');
    $telefono = $this->input->post('telefono');
    $empresa = $this->input->post('empresa');  	
	
	
    $this->Proveedor_model->guardar($nombre,$email,$telefono,$empresa);
    redirect('Carrera_controller/listar');
   }
   
   public function eliminar($idPro) {
       $this->Proveedor_model->borrar($idPro);
       redirect('Carrera_controller/listar');
   }
   
   public function editar($idCarr) {
       $data ['pro'] =$this->Proveedor_model->listarUna($idCarr);
      $this->load->view('proveedores/FormEdita',$data);  
   }
    
   public function modificar() {
	$idProveedor = $this->input->post('idProveedor');   
    $nombre = $this->input->post('nombre'); 
	$email = $this->input->post('email');
    $telefono = $this->input->post('telefono');
    $empresa = $this->input->post('empresa');  
	
	
    $this->Proveedor_model->modificar($idProveedor,$nombre,$email,$telefono,$empresa);
    redirect('Carrera_controller/listar');  
   }
   
   
   public function modificarStatus($idPro, $status) {
   if($status == 1){
       $status = 0;
   }else{
       $status = 1;
   } 
   $this->Proveedor_model->modificarStatus($idPro, $status);
   redirect('Carrera_controller/listar');
   }
}
