<?php
include_once('model/ProductModel.php');
include_once('view/groceryView.php');
define('HOME', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');
/**
 *
 */
class ProductController
{
  private $view;
  private $model;
  function __construct()
  {
    $this->view = new GroceryView();
    $this->model = new ProductModel();

  }

  public function index()
  {
    $productos = $this->model->getProducts();
    $this->view->viewProducts($productos);
  }

  public function destroy($params)
  {
    $id_producto = $params[0];
    $this->model->deleteProduct($id_producto);
    header('Location: '.HOME);
  }
}
 ?>
