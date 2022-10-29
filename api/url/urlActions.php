<?php

namespace api\url;

class urlActions
{
    static $path;
    static $method;

    public function __construct($path)
    {
        self::$path = $path;
    }

    public static function pathIsset()
    {
        if (isset(self::$path[0])) {
            $api = self::$path[0];
            return $api;
        } else {
            return "caminho não existe";
        }
    }

    public static function methodRequestGet($re)
    {
        self::$method = $re;
    }

    public static function methodRequestSet()
    {
       return self::$method;
    }



    public static function pathAction()
    {
        if (isset(self::$path[1])) {
            $acao = self::$path[1];
            return $acao;
        } else {
            $acao = '';
        }
    }
}

// if (isset($_GET['path'])) {
//     $path = explode("/", $_GET['path']);
// }else {
//     echo "Caminho não existe";
//     exit;
// }

// if (isset($path[0])) {
//     $api = $path[0];
// }else{
//     echo "Caminho não existe";
//     exit;
// }

// if (isset($path[1])) {
//     $acao = $path[1];
// }else{
//     $acao = '';
// }

// if (isset($path[2])) {
//     $param = $path[2];
// } else {
//     $param = '';
// }

// $method = $_SERVER['REQUEST_METHOD'];
