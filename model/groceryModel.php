<?php
class GroceryModel
{
  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=db_supermercado;charset=utf8'
    , 'root', '');
  }
}
?>
