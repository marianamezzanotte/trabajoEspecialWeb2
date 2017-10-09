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

    // cambiar a "productSectionView"
    function productsView($categories, $products){
        $this->smarty->assign("categories", $categories);
        $this->smarty->assign("products", $products);
        $this->smarty->display('products.tpl');
    }

    // Cambiar nombre a la seccion de produtos por Catalogo
    function productsByCategory($products){
        $this->smarty->assign("products", $products);
        $this->smarty->display('filteredProducts.tpl');
    }

    function offersView(){
        $this->smarty->display('offers.tpl');
    }

    function aboutUsView(){
        $this->smarty->display('aboutUs.tpl');
    }

    
}

?>