<?php
/**
 * Created by PhpStorm.
 * User: 明月有色
 * Date: 2018/9/30
 * Time: 14:47
 */

spl_autoload_register(function ($className) {
    $file = __DIR__.'/'.$className.'.php';
    if( file_exists($file) ){
        include_once $file;
    }
});