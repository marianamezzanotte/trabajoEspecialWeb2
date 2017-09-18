<?php
class CategoryModel extends Model
{
  //vamos a hacer una clase padre y esta va a heredar de la misma
  // asi no repetimos codigo, y la conexion a la base la hacemos una sola vez
  function addCategory(){

  }

  function getCategories(){
    $sentencia = $this->db->prepare( "select * from categorias");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function saveCategory($id, $nombre){
    $sentencia = $this->db->prepare('INSERT INTO categorias(id, nombre) VALUES(?,?)');
    $sentencia->execute([$id,$nombre]);
  }
  function deleteCategory($id){
    $sentencia = $this->db->prepare( "delete from categorias where id=?");
    $sentencia->execute([$id]);
  }
}
 ?>