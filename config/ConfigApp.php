<?php

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'index',
      'home'=> 'ProductController#index',
      'products' => 'ProductController#index',
      'categories' => 'CategoryController#index',
      'login' => 'LoginController#index',

      'addCategory'=> 'CategoryController#showAddCategory',
      'addCategory1' => 'CategoryController#addCategory1',

      'addProduct' => 'ProductController#showAddProduct',
      'addProduct1' => 'ProductController#addProduct1',

      'deleteProduct' => 'ProductController#destroy',
      'deleteCategory' => 'CategoryController#destroy',
      'logout' => 'LoginController#destroy',

      'verificarUsuario' => 'LoginController#verify',
    ];

}

 ?>
