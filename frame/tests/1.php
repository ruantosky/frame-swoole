<?php
/**
 * Created by PhpStorm.
 * User: ruantofly
 * Date: 2020/3/19
 * Time: 1:34
 */
use SwoStar\Routes\Route;

$a = Route;;getInstance();
Route::get('index', function(){
    return 'this is route index () tests';
});