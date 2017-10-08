<?php

include_once('view/view.php');

class IndexView extends View
{
    function __construct() {
        parent::__construct();
    }

    function indexView(){
        $this->smarty->display('index.tpl');
    }

    function homeView(){
        $this->smarty->display('home.tpl');
    }

    function productsView(){
        $this->smarty->display('products.tpl');
    }

    function offersView(){
        $this->smarty->display('offers.tpl');
    }

    function aboutUsView(){
        $this->smarty->display('aboutUs.tpl');
    }

    
}

?>