<?php
require_once('libs/smarty-3.1.30/libs/Smarty.class.php');
class CategoryView
{
  private $smarty;
  function __construct()
  {
    $this->smarty = new Smarty();
    $this->smarty->assign('titulo', 'MVC Tareas');
  }
  function viewCategories($categories){
    $this->smarty->assign('categories', $categories);
    $this->smarty->display('templates/categorias.tpl');
  }

  function addCategory(){
    $this->smarty->display('templates/newCategory.tpl');
  }

}
?>
