<?php
include_once('model/ProductModel.php');
include_once('model/CategoryModel.php');
include_once('view/GroceryView.php');
include_once('controller/SecuredController.php');

//define('HOME', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');
/**
 *
 */
class ProductController extends SecuredController
{

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

  public function showAddProduct()
  {
    //$this->view->addProduct();
    $categories = $this->modelCategory->getCategories();
    $this->view->addProduct($categories);

  }

  public function addProduct1(){
    $product = $_POST['nombre'];
    $precio = $_POST['precio'];
    $categoria = $_POST['categoria'];
    $descuento =  $_POST['descuento'];

    $this->model->saveProduct($product, $precio, $categoria, $descuento);

    header('Location: '.HOME. 'home');
  }

  public function destroy()
  {
    if(isset($_GET['id']))
    {
      $id_producto = $_GET['id'];
      $this->model->deleteProduct($id_producto);
    }

    header('Location: '.HOME. 'home');
  }
}
 ?>
