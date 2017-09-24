<?php
include_once('GroceryModel.php');

class ProductModel extends GroceryModel
{
  //vamos a hacer una clase padre y esta va a heredar de la misma
  // asi no repetimos codigo, y la conexion a la base la hacemos una sola vez
  function addProduct($nombre, $imagen, $precio, $id_categoria, $descuento){
    $sentencia = $this->db->prepare('INSERT INTO productos(nombre, imagen, precio, id_categoria, descuento) VALUES(?,?,?,?,?)');
    $sentencia->execute([$nombre, $imagen, $precio, $id_categoria, $descuento]);
  }

  function getProducts(){
    $sentencia = $this->db->prepare( "select * from productos");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function updateProduct($id, $nombre, $imagen, $precio, $id_categoria, $descuento){
    $sentencia = $this->db->prepare('UPDATE productos SET nombre = ?, imagen = ?, precio = ?, id_categoria = ?, descuento = ? WHERE id = ?');
    $sentencia->execute([$nombre, $imagen, $precio, $id_categoria, $descuento, $id]);
  }
  function deleteProduct($id){
    $sentencia = $this->db->prepare( "delete from productos where id=?");
    $sentencia->execute([$id]);
  }
}
