<?php

namespace View;

class View{

    public static function render($page,$typeUser = ''){
        $path = __DIR__.'/../../view/beforeLogin/'.$page.'.php';
        
        if($typeUser !==''){
            $path = __DIR__.'/../../view/afterLogin/'.$typeUser.'/'.$page.'.php';
        }

        return $path;
       
    }

}