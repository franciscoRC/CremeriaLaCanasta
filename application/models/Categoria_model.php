<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_model extends CI_Model{
    //put your code here

 function __construct(){
     parent::__construct();

 }
  public function listar(){
  //$sql = SELECT * FROM carrera WHERE idCarrera = $idCarr;
  //$consulta = $mysqli_query($sql);
  $sql = $this->db->get("categoria");
  return $sql->result();
 }
  public function guardarCategoria( $nombre, $descripcion){
  //$sql = SELECT * FROM carrera WHERE idCarrera = $idCarr;
  //$consulta = $mysqli_query($sql);
  $data = array(
         'idCategoria' => 0,
         'nombre' => $nombre,
         'status' => 1,
         'descripcion' => $descripcion
);
     $this->db->insert('categoria',$data);
 }
   public function consultaCategoria(){
   $sql = $this->db->get("categoria");
        return $sql->result();
 }
   public function editarCategoria($nombre, $descripcion) {
  //INSERT INTO tabla(campos) VALUES(valores);
     $data = array(
         'idCategoria' => 0, 
         'nombre' => $nombre,
         'status' => 1,
         'descripcion' => $descripcion,
     );
     $this->db->update('categoria', $data);
 }


 public function borrar($nombre) {
     //DELETE FROM tabla WHERE condicion 
     $this->db->where('nombre',$nombre);
     $this->db->delete('categoria');
 }
 public function listarUna($nombre){
  //$sql = SELECT * FROM carrera WHERE idCarrera = $idCarr;
  //$consulta = $mysqli_query($sql);
  $this->db->where('nombre',$nombre);
  $sql = $this->db->get("categoria");
  return $sql->result();
 }
 public function modificarCategoria($nombre, $descripcion) {
     //UPDATE tabla SET campo = valor ... WHERE condicion 
     $data = array(
         'nombre'      => $nombre,
         'status'      => 1,
         'descripcion' => $descripcion
         );
     $this->db->where('nombre',$nombre);
     $this->db->update('categoria',$data);

 }
 public function modificarStatus($nombre, $status) {
      $data = array(
         'status' => $status);
     $this->db->where('nombre',$nombre);
     $this->db->update('categoria',$data);
 }
 }