<?php

require_once('libs/smarty-3.1.30/libs/Smarty.class.php');

class LoginView extends GroceryView
{

  function __construct(){
    parent::__construct();
  }

  function mostrarLogin($error = ''){
    $this->smarty->assign('error', $error);
    $this->smarty->display('templates/Login/index.tpl');
  }
}
 ?>
