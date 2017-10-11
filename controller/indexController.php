<?php

    include_once("view/indexView.php");
    include_once("controller/controller.php");
    include_once("model/productModel.php");

    class IndexController extends Controller 
    {

        function __construct(){
            parent::__construct();
            $this->productsModel = new ProductModel();
            $this->categoriesModel = new CategoriesModel();
            $this->offersModel = new OffersModel();
            $this->view = new IndexView();
        }

        public function index()
        {
          $this->view->index();
        }
            
        public function home()
        {
          $this->view->home();
        }

        public function catalogue(){
            $categoryName = "Todos";
            $categories = $this->categoriesModel->getCategories();
            $products = $this->productsModel->getProducts();
            $this->view->catalogue($categories,$products,$categoryName);
        }


        public function offers(){
            $categoryName = "Todas";
            $categories = $this->categoriesModel->getCategories();
            $offers = $this->offersModel->getOffers();
            $this->view->offers($categories,$offers,$categoryName);
        }  
        
        public function aboutUs(){
            $this->view->aboutUs();
        }
    }


?>