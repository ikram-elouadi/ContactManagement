<?php
    spl_autoload_register('myAutoLoader');

    function myAutoLoader($className){
        $url=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
         if(strpos($url,'includes')!==FALSE){
             $path='../classes/';
         }else{
             $path='classes/';
         }
         $extension='.class.php';
         $fullpath=$path.$className.$extension;

         
        if(!file_exists($fullpath)){
            return false;
        }else{
            include_once $fullpath;
        }
         
    }