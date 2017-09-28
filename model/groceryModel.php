<?php
class GroceryModel
{
  protected $db;
  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=db_supermercado;charset=utf8'
    , 'root', '');
  }
}
?>
