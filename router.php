<?php
define('ACTION', 0);
define('VALOR1', 1);
define('VALOR2', 2);
include_once 'controller/ProductController.php';
include_once 'controller/CategoryController.php';
include_once 'config/ConfigApp.php';

$controllerProduct = new ProductController();
$controllerCategory = new CategoryController();

function parseURL($url)
{
  $urlExploded = explode('/', $url);
  $arrayReturn[ConfigApp::$ACTION] = $urlExploded[ACTION];
  return $arrayReturn;
}

if(isset($_GET['action'])){
   $urlData = parseURL($_GET['action']);
    $action = $urlData[ConfigApp::$ACTION];
    if(array_key_exists($action,ConfigApp::$ACTIONS)){
      $metodo = ConfigApp::$ACTIONS[$action];
        switch ($action) {
          case 'categories':
            $controllerCategory->$metodo();
            break;
          case 'products':
            $controllerProduct->$metodo();
            break;
          case 'addCategory':
            $controllerCategory->$metodo();
            break;
          default:
          $controllerProduct->$metodo();
            //http_response_code(404);
            break;
        }
    }
}

 ?>
