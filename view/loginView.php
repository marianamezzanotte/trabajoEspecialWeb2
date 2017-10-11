<?php

require_once("view/view.php");

class LoginView extends View
{

  function __construct(){
    parent::__construct();
  }

  function showLogin($error = ""){
    $this->smarty->assign("error",$error);
    $this->smarty->display('templates/login.tpl');
  }
}
 ?>