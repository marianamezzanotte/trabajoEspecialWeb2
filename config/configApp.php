<?php

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'IndexController#index',
      'index' => 'IndexController#index',
      'home'=> 'IndexController#home',
      'products'=> 'IndexController#products',
      'offers'=> 'IndexController#offers',
      'aboutUs'=> 'IndexController#aboutUs',
      // Refactorizar cuando se cree el product Controller
      'categoryFilter' => 'IndexController#productsByCategory'
    ];

}

?>