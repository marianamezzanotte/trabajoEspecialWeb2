<?php

include_once 'model/model.php';

class CategoriesModel extends Model 
{
    function getCategories(){
        $sentencia = $this->db->prepare( "select * from categoria");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
      }

}


?>