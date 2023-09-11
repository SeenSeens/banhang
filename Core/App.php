<?php
class App {
//    private static $instance = null;
    private $__controller = "Home";
    private $__action = "index";
    private $__params = [];
    function __construct() {
        $arr = $this->UrlProcess();

        // Controller
        if( file_exists("./Controllers".$arr[0]."Controller.php") ){
            $this->__controller = $arr[0]."Controller";
            unset($arr[0]);
        }
        require_once "./Controllers/". $this->__controller ."Controller.php";
        $this->__controller = new $this->__controller;

        // Action
        if(isset($arr[1])){
            if( method_exists( $this->__controller , $arr[1]) ){
                $this->__action = $arr[1];
            }
            unset($arr[1]);
        }

        // Params
        $this->__params = $arr?array_values($arr):[];

        call_user_func_array([$this->__controller, $this->__action], $this->__params );
    }
    function UrlProcess(){
        if( isset($_GET["url"]) ){
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }

}