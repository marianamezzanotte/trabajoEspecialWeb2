<?php
class ProductModel extends Model
{
  //vamos a hacer una clase padre y esta va a heredar de la misma
  // asi no repetimos codigo, y la conexion a la base la hacemos una sola vez
  function addProduct(){

  }

  function getProducts(){
    $sentencia = $this->db->prepare( "select * from productos");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function saveProduct($nombre, $imagen, $precio, $id_categoria, $descuento){
    $sentencia = $this->db->prepare('INSERT INTO productos(nombre, imagen, precio, id_categoria, descuento) VALUES(?,?,?,?,?)');
    $sentencia->execute([$nombre, $imagen, $precio, $id_categoria, $descuento]);
  }
  function deleteProduct($id){
    $sentencia = $this->db->prepare( "delete from productos where id=?");
    $sentencia->execute([$id]);
  }
}
 ?>
