<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos_model extends CI_Model{
    //put your code here

 function __construct(){
     parent::__construct();

 }
  
public function listarUno($producto){ //matricula- idproducto
  //$sql = SELECT * FROM carrera WHERE idCarrera = $idCarr;
  //$consulta = $mysqli_query($sql);
  $this->db->where('producto',$producto);
  $sql = $this->db->get("productos");
  return $sql->result();
 }
  public function consultarProducto(){
      $this->db->select('*');
      $this->db->from('productos');
      $this->db->join('categoria', 
      'productos.idCategoria = categoria.idCategoria');
       $sql = $this->db->get();
       return $sql->result();
 }
 
 
 
 public function borrar($producto) {
     //DELETE FROM tabla WHERE condicion 
     $this->db->where('producto',$producto);
     $this->db->delete('productos');//nombre de la tabla
 }

 
 public function guardarProducto($producto,
         $precio, $status, $carrera){
  //$sql = SELECT * FROM carrera WHERE idCarrera = $idCarr;
  //$consulta = $mysqli_query($sql);
  $data = array(
         //'idProducto' => $idProducto,
         'producto' => $producto,
         'precio' => $precio,
         'status' => $status,
         'idCategoria' => $carrera,
         
         );
     $this->db->insert('productos',$data);
 }
 public function modificarProducto($producto, $precio, $status, $idCategoria) {
     //UPDATE tabla SET campo = valor ... WHERE condicion 
     $data = array(
         'producto'    => $producto,
         'precio'      => $precio,
         'status' => $status,
         'idCategoria'   => $idCategoria,
         
         );
     $this->db->where('producto',$producto);
     $this->db->update('productos',$data);

 }
 public function modificarStatus($producto, $status) {
      $data = array(
         'status' => $status);
     $this->db->where('producto',$producto);
     $this->db->update('productos',$data);
 }
 }