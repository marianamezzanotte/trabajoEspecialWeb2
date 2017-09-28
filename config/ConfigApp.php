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
      'addCategory'=> 'CategoryController#showAddCategory',
      'addProduct' => 'ProductController#showAddProduct',
      'deleteProduct' => 'ProductController#destroy',
      'addCategory1' => 'CategoryController#addCategory1',
    ];

}

 ?>
