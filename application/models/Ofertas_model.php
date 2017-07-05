<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ofertas_model extends CI_Model{
    //put your code here

 function __construct(){
     parent::__construct();

 }
 public function listarOferta(){
  $sql = $this->db->get("ofertas"); // aqui va el nombre de la tabla en bd
  return $sql->result();
 }
  public function consultaOfertas(){
  //select * from Tabla1 T1
  //join Tabla2 T2 ON T1.PK = T2.FK
      
  //select * from Tabla1 T1, Tabla2 T2
  //WHERE T!.PK = T2.FK
  
      
      
      //$this->db->select("*"); 
  //$this->db->from("productos");//nombrebase
  //$this->db->join("carrera","alumno.idCarrera = carrera.idCarrera");
  
  //$sql = $this->db->get();
  //return $sql->result();
 }
// public function guardarAlumno($alum) {
//  //INSERT INTO tabla(campos) VALUES(valores);
//     $data = array(
//         'idCarrera' => 0, 
//         'carrera' => $alum,
//         'statusA' => 1
//     );
//     $this->db->insert('carrera', $data);
// }
//  public function editarAlumno($alum) {
//  //INSERT INTO tabla(campos) VALUES(valores);
//     $data = array(
//         'idCarrera' => 0, 
//         'carrera' => $alum,
//         'statusA' => 1
//     );
//     $this->db->update('carrera', $data);
// }
 public function borrar($ofer) {
     //DELETE FROM tabla WHERE condicion 
     $this->db->where('idOfertas',$ofer);
     $this->db->delete('ofertas');//nombre de la tabla
 }
 }