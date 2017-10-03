<?php
include_once('model/CategoryModel.php');
include_once('view/CategoryView.php');
include_once('controller/SecuredController.php');


//define('HOME', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');
/**
 *
 */
class CategoryController extends SecuredController
{

  function __construct()
  {
    $this->view = new CategoryView();
    $this->model = new CategoryModel();

  }
  public function index()
  {
    $category = $this->model->getCategories();
    $this->view->viewCategories($category);
  }

  public function showAddCategory()
  {
    $this->view->addCategory();
  }

  public function addCategory1(){
    $category = $_POST['nombre'];
    $this->model->saveCategory($category);
    header('Location: '.HOME. 'home');
  }

  public function destroy()
  {
    if(isset($_GET['id']))
    {
      $id_producto = $_GET['id'];
      $this->model->deleteCategory($id_producto);
    }

    header('Location: '.HOME. 'home');
  }

  public function showUpdateCategory($params){
    $id_categoria = $params[0];
    $category = $this->model->getCategory($id_categoria);
    $this->view->modifyForm($category);

  }
  public function updateCategory(){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $this->model->updateCat($id, $nombre);
    header('Location: '.HOME. 'home');

  }
}
 ?>
