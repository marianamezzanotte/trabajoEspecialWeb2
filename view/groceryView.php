<?php
require_once('libs/smarty-3.1.30/libs/Smarty.class.php');
class GroceryView
{
  private $smarty;
  function __construct()
  {
    $this->smarty = new Smarty();
    $this->smarty->assign('titulo', 'MVC Tareas');
  }
  function viewProducts($products, $categories){
    $this->smarty->assign('productos', $products);
    $this->smarty->assign('categories', $categories);
    $this->smarty->display('templates/index.tpl');
  }
}
?>
