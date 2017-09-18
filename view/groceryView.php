<?php
require('../libs/smarty-3.1.30/libs/Smarty.class.php');
class GroceryView
{
  private $smarty;
  function __construct()
  {
    $this->smarty = new Smarty();
    $this->smarty->assign('titulo', 'MVC Tareas');
  }
  function viewCategories($categories){
    $this->smarty->assign('categories', $categories);
    $this->smarty->display('templates/index.tpl');
  }
  function viewProducts($products){
    $this->smarty->assign('products', $products);
    $this->smarty->display('templates/index.tpl');
  }
}
?>