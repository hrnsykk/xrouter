<?php 


class xrouter{


    private $router = [];
    private $path ;


    public function get($path, $callback){


        $this->router['get'][$path] = $callback;


    }


    /* GET WHAT REQUESTED URI */
    public function getRequestURI(){


        return $this->path = str_replace(dirname($_SERVER['SCRIPT_NAME']) , '', $_SERVER['REQUEST_URI']);

    }
    
    /* GET WHAT REQUESTED METHOD */
    public function getRequestMethod(){

        return $this->path = strtolower($_SERVER['REQUEST_METHOD']);

    }



    public function run(){

        
        $paths  = $this->getRequestURI();
        $method = $this->getRequestMethod();

      
        $callback  = $this->router[$method][$paths] ?? false ;


        if($callback === false){

            echo 'Page Not Found';
            exit();

        }

        call_user_func($callback);


        

    }


}