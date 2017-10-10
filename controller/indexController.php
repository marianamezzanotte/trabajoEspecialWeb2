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
            $categories = $this->model->getCategories();
            $products = $this->model->getProducts();
            $this->view->catalogue($categories,$products,$categoryName);
        }


        public function offers(){
            $this->view->offers();
        }  
        
        public function aboutUs(){
            $this->view->aboutUs();
        }
    }


?>