<?php
class CategoryModel extends GroceryModel
{
  function saveCategory($nombre){
    $sentencia = $this->db->prepare('INSERT INTO categorias(nombre) VALUES(?)');
    $sentencia->execute([$nombre]);
  }

  function getCategories(){
    $sentencia = $this->db->prepare( "select * from categorias");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getCategory($id){
    $sentencia = $this->db->prepare( "select * from categorias where id= ?");
    $sentencia->execute($id);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function updateCat($id, $nombre){
    $sentencia = $this->db->prepare('UPDATE categorias SET nombre = ? WHERE id = ?');
    $sentencia->execute([$nombre, $id]);
  }

  function deleteCategory($id){
    $sentencia = $this->db->prepare( "delete from categorias where id=?");
    $sentencia->execute([$id]);
  }
}
 ?>
