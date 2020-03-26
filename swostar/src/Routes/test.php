<?php

namespace SwoStar\Routes;
/**
 * Created by PhpStorm.
 * User: ruantofly
 * Date: 2020/3/19
 * Time: 1:34
 */
use SwoStar\Routes\Route;
use SwoStar\Container\Container;

class Temp
{
    public function index(){
       $r = Route::getInstance();
        var_dump($r);
    }
}


(new Temp())->index();

