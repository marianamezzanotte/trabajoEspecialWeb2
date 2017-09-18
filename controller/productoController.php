<?php
include_once('model/productModel.php');
include_once('view/groceryView.php');
define('HOME', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');
/**
 *
 */
class ProductController extends Controller
{
  private $view;
  private $model;
  function __construct()
  {
    $this->GroceryView = new GroceryView();
    $this->ProductModel = new ProductModel();

  }
  public function index()
  {
    $productos = $this->model->listarProductos();
    $this->view->mostrarProductos($productos);
  }

  public function destroy($params)
  {
    $id_producto = $params[0];
    $this->model->deleteProduct($id_producto);
    header('Location: '.HOME);
  }
}
 ?>
