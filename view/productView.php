<?php

include_once('view/view.php');

class ProductView extends View
{
    function __construct() {
        parent::__construct();
    }
    function productsByCategory($products, $categoryName,$categories){
        $this->smarty->assign("products", $products);
        $this->smarty->assign("categoryName", $categoryName);
        $this->smarty->assign("categories", $categories);
        $this->smarty->display('filteredProducts.tpl');
    }

    
}

?>