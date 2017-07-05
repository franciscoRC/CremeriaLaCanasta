<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedor_model extends CI_Model{
    //put your code here

 function __construct(){
     parent::__construct();

 }
 public function listar(){
  //$sql = SELECT * FROM carrera;
  //$consulta = $mysqli_query($sql);
  $sql = $this->db->get("proveedores");
  return $sql->result();
 }
 public function guardar($nombre,$email,$telefono,$empresa) {
  //INSERT INTO tabla(campos) VALUES(valores);
     $data = array(
         'idproveedor' => 0, 
         'nombreproveedor' =>$nombre,
		 'email' => $email,
		 'telefono' => $telefono,
		 'empresa' => $empresa,
         'statusC' => 1
     );
     $this->db->insert('proveedores', $data);
 }
 
 /* public function consultaCarrera() {
        $sql = $this->db->get("proveedores");
        return $sql->result();
    }
  public function editarCarrera($carr) {
  //INSERT INTO tabla(campos) VALUES(valores);
     $data = array(
      'idproveedor' => 0, 
         'nombreproveedor' =>$nombre,
		 'email' => $email,
		 'telefono' => $telefono,
		 'empresa' => $empresa,
         'statusC' => 1
     );
     $this->db->update('proveedores', $data);
 }*/
 public function borrar($idPro) {
     //DELETE FROM tabla WHERE condicion 
     $this->db->where('idProveedor',$idPro);
     $this->db->delete('proveedores');
 }
 

 public function listarUna($idCarr){
  //$sql = SELECT * FROM carrera WHERE idCarrera = $idCarr;
  //$consulta = $mysqli_query($sql);
  $this->db->where('idProveedor',$idCarr);
  
  $sql = $this->db->get("proveedores");
  return $sql->result();
 }
 
 public function modificar($idProveedor,$nombre,$email,$telefono,$empresa) {
     
     $data = array(
	 
         'nombreproveedor' =>$nombre,
		 'email' => $email,
		 'telefono' => $telefono,
		 'empresa' => $empresa,
         'statusC' => 1);
		 
		 
     $this->db->where('idProveedor',$idProveedor);
     $this->db->update('proveedores',$data);
 }
 
 public function modificarStatus($idPro, $status) {
      $data = array(
         'statusC' => $status);
     $this->db->where('idproveedor',$idPro);
     $this->db->update('proveedores',$data);
 }
 }