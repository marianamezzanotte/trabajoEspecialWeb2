<?php

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'IndexController#index',
      'index' => 'IndexController#index',
      'home'=> 'IndexController#home',
      'catalogue'=> 'IndexController#catalogue',
      'offers'=> 'IndexController#offers',
      'aboutUs'=> 'IndexController#aboutUs',
      
      'categoryFilter' => 'ProductController#getProductsByCategory',
      'allProducts' => 'ProductController#getAllProducts'
    ];

}

?>