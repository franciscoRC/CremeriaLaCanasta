<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Productos_controller extends CI_Controller{
   function __construct() {
       parent::__construct();
       $this->load->model('Productos_model');
       $this->load->model('Categoria_model');
   }
    public function listarUno($producto){
  //$sql = SELECT * FROM carrera WHERE idCarrera = $idCarr;
  //$consulta = $mysqli_query($sql);
  $this->db->where('idCategoria',$producto);
  $sql = $this->db->get("productos");
  return $sql->result();
 }
   public function listarProducto(){
       $data['productos'] = $this->Productos_model->consultarProducto();
       $this->load->view('producto/listar_productos', $data);
       
   }
       public function mostrarFormulario(){
        $data['categorias'] = $this->Categoria_model->consultaCategoria();
        $this->load->view("producto/frmAgregarProducto", $data);
       }

   //aqui me quede
   public function guardarProducto(){  
        $producto = $this->input->post('producto');
        $precio = $this->input->post('precio');
        $status = $this->input->post('status');
        $idCategoria = $this->input->post('categoria');
        $this->Productos_model->guardarProducto( $producto,
                $precio, $status, $idCategoria);
        redirect('Productos_controller/listarProducto');
    }
  
   public function eliminarProducto($producto) {
       $this->Productos_model->borrar($producto);
       redirect('Productos_controller/listarProducto');
   }

   public function modificarProducto() {
       //$_post['carrera'];
      // $idProducto = $this->input->post("idProducto");
       $producto = $this->input->post("producto");
       $precio = $this->input->post("precio");
       $status = $this->input->post("status");
       $categoria = $this->input->post("categoria");
      
       
       $this->Productos_model->modificarProducto($producto, $precio, $status, $categoria);
        redirect('Backend_controller/Admin');
  
   }
    public function frmModificarProducto($producto) {
        $data['categoria'] = $this->Categoria_model->listar();
        $data['producto'] = $this->Productos_model->listarUno($producto);
        $this->load->view('producto/frmModificarProducto', $data);
    }
   public function modificarStatus($producto, $status) {
   if($status == 1){
       $status = 0;
   }else{
       $status = 1;
   } 
   $this->Productos_model->modificarStatus($producto, $status);
   redirect('Backend_controller/listarProducto');
   }
}
