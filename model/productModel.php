<?php

include_once 'model/model.php';

class ProductModel extends Model 
{

    function getProducts(){
        $sentencia = $this->db->prepare( "select * from producto");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function getProductsByCategory($categoryID){
        $sentencia = $this->db->prepare( "select * from producto where id_categoria=?");
        $sentencia->execute([$categoryID]);
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }
    

}


?>