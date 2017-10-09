<?php

    include_once("view/indexView.php");
    include_once("controller/controller.php");
    include_once("model/productModel.php");

    class IndexController extends Controller 
    {

        function __construct(){
            parent::__construct();
            $this->model = new ProductModel();
            $this->view = new IndexView();
        }


        // Mejorar todo a nombre + Section para indicar que este controller solo 
        public function index()
        {
          $this->view->indexView();
        }
            
        public function home()
        {
          $this->view->homeView();
        }

        // Refactorizar: Cuando carga esta seccion tiene que cargar automaticamente una categoria
        public function products(){
            $categories = $this->model->getCategories();
            $products = $this->model->getProducts();
            $this->view->productsView($categories,$products);
        }

        // Este tiene que ir en product controller
        public function productsByCategory($categoryID){
            $products = $this->model->getProductsByCategory($categoryID[0]);
            $this->view->productsByCategory($products);
        }

        public function offers(){
            $this->view->offersView();
        }  
        
        public function aboutUs(){
            $this->view->aboutUsView();
        }
    }


?>