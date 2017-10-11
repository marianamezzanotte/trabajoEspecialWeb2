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
      
      'allProducts' => 'ProductController#getAllProducts',
      'categoryFilter' => 'ProductController#getProductsByCategory',

      'allOffers' => 'OffersController#getAllOffers',
      'offersFilter' => 'OffersController#getOffersByCategory'
    ];

}

?>