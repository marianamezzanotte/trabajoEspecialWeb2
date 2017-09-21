<?php
include_once('model/ProductModel.php');
include_once('model/CategoryModel.php');
include_once('view/groceryView.php');
define('HOME', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');
/**
 *
 */
class ProductController
{
  private $view;
  private $model;
  private $modelCategory;
  function __construct()
  {
    $this->view = new GroceryView();
    $this->model = new ProductModel();
    $this->modelCategory = new CategoryModel();
  }

  public function index()
  {
    $productos = $this->model->getProducts();
    $categories = $this->modelCategory->getCategories();
    $this->view->viewProducts($productos, $categories);
  }

  public function destroy($params)
  {
    $id_producto = $params[0];
    $this->model->deleteProduct($id_producto);
    header('Location: '.HOME);
  }
}
 ?>
