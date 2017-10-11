<?php

include_once('view/view.php');

class OffersView extends View
{
    function __construct() {
        parent::__construct();
    }
    
    function offersByCategory($productsWithOffers, $categoryName,$categories){
        $this->smarty->assign("products", $productsWithOffers);
        $this->smarty->assign("categoryName", $categoryName);
        $this->smarty->assign("categories", $categories);
        $this->smarty->display('filteredOffers.tpl');
    }

    
}

?>