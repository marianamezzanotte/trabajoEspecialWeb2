<?php
include_once('model/CategoryModel.php');
include_once('view/groceryView.php');
define('HOME', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');
/**
 *
 */
class CategoryController
{
  private $view;
  private $model;
  function __construct()
  {
    $this->GroceryView = new GroceryView();
    $this->CategoryModel = new CategoryModel();

  }
  public function index()
  {
    $category = $this->model->getCategories();
    $this->view->mostrarCategorias($category);
  }
}
 ?>
