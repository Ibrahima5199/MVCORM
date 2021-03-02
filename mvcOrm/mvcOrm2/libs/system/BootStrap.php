<?php

# Class BootStrap
# @author Oklem Pro <oklempro4@gmail.com>
# @package ${NAMESPACE}

namespace libs\system;

class BootStrap
{
    public function __construct()
    {
        if (isset($_GET["url"])){
            $url = explode("/", $_GET['url']);
            $controller_file = "src/controller/".$url[0]."Controller.php";
            if (file_exists($controller_file)){
                require_once $controller_file;
                $file = $url[0]."Controller";
                $controller_object = new $file();
                if (isset($url[1])){
                    $method = $url[1];
                    if (method_exists($controller_object, $method)){
                        if (isset($url[2])){
                            $controller_object->$method($url[2]);
                        }else{
                            $controller_object->$method();
                        }
                    }else{
                        die($method . " n'existe pas dans le controller " . $file);
                    }
                }
            }else{
                echo $controller_file . " n'existe pas!";
            }
        }else{
            $controller_file = "src/controller/UserController.php";
            require_once $controller_file;
            $file = "UserController";
            $controller_object = new $file();
            $controller_object->index();
        }
    }
}