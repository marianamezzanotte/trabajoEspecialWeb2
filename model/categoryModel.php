<?php
class CategoryModel extends GroceryModel
{
  //vamos a hacer una clase padre y esta va a heredar de la misma
  // asi no repetimos codigo, y la conexion a la base la hacemos una sola vez
  function addCategory($nombre){
    $sentencia = $this->db->prepare('INSERT INTO categorias(nombre) VALUES(?)');
    $sentencia->execute([$nombre]);
  }

  function getCategories(){
    $sentencia = $this->db->prepare( "select * from categorias");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function updateCategory($id, $nombre){
    $sentencia = $this->db->prepare('UPDATE categorias SET nombre = ? WHERE id = ?');
    $sentencia->execute([$nombre, $id]);
  }

  function deleteCategory($id){
    $sentencia = $this->db->prepare( "delete from categorias where id=?");
    $sentencia->execute([$id]);
  }
}
 ?>
