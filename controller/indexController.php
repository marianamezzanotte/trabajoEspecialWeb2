<?php

    include_once("view/indexView.php");
    include_once("controller/controller.php");

    class IndexController extends Controller 
    {

        function __construct(){
            parent::__construct();
            $this->view = new IndexView();
        }

        public function index()
        {
          $this->view->indexView();
        }
            
        public function home()
        {
          $this->view->homeView();
        }

        public function products(){
            $this->view->productsView();
        }

        public function offers(){
            $this->view->offersView();
        }  
        
        public function aboutUs(){
            $this->view->aboutUsView();
        }
    }


?>