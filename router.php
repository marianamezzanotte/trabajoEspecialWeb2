<?php
define('ACTION', 0);
define('PARAMS', 1);
include_once 'controller/ProductController.php';
include_once 'controller/CategoryController.php';
include_once 'controller/LoginController.php';
include_once 'controller/SecuredController.php';
include_once 'config/ConfigApp.php';


include_once 'controller/Controller.php';

//$controllerProduct = new ProductController();
//$controllerCategory = new CategoryController();

function parseURL($url)
{
  $urlExploded = explode('/', $url);
  $arrayReturn[ConfigApp::$ACTION] = $urlExploded[ACTION];
  $arrayReturn[ConfigApp::$PARAMS] = isset($urlExploded[PARAMS]) ? array_slice($urlExploded,1) : null;
  return $arrayReturn;
}

if(isset($_GET['action'])){
   $urlData = parseURL($_GET['action']);
    $action = $urlData[ConfigApp::$ACTION];
    if(array_key_exists($action,ConfigApp::$ACTIONS)){
      $params = $urlData[ConfigApp:: $PARAMS];
      $action = explode('#', ConfigApp:: $ACTIONS[$action]);
      $controller = new $action[0]();
      $metodo = $action[1];
      if(isset($params) && $params != null){
        echo $controller->$metodo($params);
      }
      else{
        echo $controller->$metodo();
      }
    /*
        switch ($action) {
          case 'categories':
            $controller->$metodo();
            break;
          case 'products':
            $controller->$metodo();
            break;
          case 'addCategory':
            $controller->$metodo();
            break;
          case 'deleteProduct':
            $controller->$metodo();
            break;
          case 'modifyCategorie':
            $controller->$metodo();
          break;
          default:
          $controller->$metodo();
            //http_response_code(404);
            break;
        
        }
      */
    }
}

 ?>
