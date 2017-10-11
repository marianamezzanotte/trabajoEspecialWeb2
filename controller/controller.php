<?php

class Controller
{
    protected $view;
    protected $model;
    protected $baseURL;

    function __construct(){
        $this->baseURL = "http://".$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF'])."/";
    }

    public function goToEndPoint($endpoint = ""){
        header("Location : ".$this->baseURL.$endpoint);
    }
}

?>