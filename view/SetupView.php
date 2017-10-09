<?php
require_once('libs/smarty-3.1.30/libs/Smarty.class.php');
class SetupView
{
  private $smarty;
  function __construct()
  {
    $this->smarty = new Smarty();
    $this->smarty->assign('titulo', 'MVC Tareas');
  }

  function setupForm(){
    $this->smarty->display('templates/setupForm.tpl');
  }


}
?>
