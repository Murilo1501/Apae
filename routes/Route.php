<?php

namespace Route;

class Route{

    private static $route;

public static function get($uri,$controller,$method,$model){

   // $uri = str_replace('{','',$uri);
    $uri = str_replace('}','',$uri);
    $separedUrl = explode('{',$uri);
    $uri = $separedUrl[0];

    $params = [];
    for ($i=1;$i<count($separedUrl);$i++) {
      $params[] = $separedUrl[$i];
    }    


        $request = [
            'uri' =>$uri,
            'controller'=>$controller,
            'method'=>$method,
            'model'=>$model,
            'params'=>$params
        ];

        self::$route['GET'][$uri] = $request;
        //var_dump(self::$route);
    }

    public static function post($uri,$controller,$method,$model){

        $uri = str_replace('}','',$uri);
        $separedUrl = explode('{',$uri);
        $uri = $separedUrl[0];
    
        $params = [];
        for ($i=1;$i<count($separedUrl);$i++) {
          $params[] = $separedUrl[$i];
        }    
        
        $request = [
            'uri' =>$uri,
            'controller'=>$controller,
            'method'=>$method,
            'model'=>$model,
            'params'=>$params
        ];

        self::$route['POST'][$uri] = $request;
    }

    public static function redirect ($RequestMethod,$RequestUri){

        $RequestUri = str_replace('newApae/','',$RequestUri);

        $routesPiece = explode('/', $RequestUri);
        $routesPiece = array_filter($routesPiece);
       
        $routePath = $routesPiece[1];
        $routeMethod = $routesPiece[2] ?? '';
        $routeId = $routesPiece[3] ?? '';

        //echo $routeId;
        $matches = [];
        preg_match('/(\d*)/',$RequestUri,$matches);
        $RequestUri = preg_replace('/(\d*)/','',$RequestUri) ;

       $id = $matches[0];

        if(array_key_exists($RequestMethod,Self::$route) && array_key_exists($RequestUri,Self::$route[$RequestMethod])){
            $controllerClass = self::$route[$RequestMethod][$RequestUri]['controller'];
            $controllerMethod = self::$route[$RequestMethod][$RequestUri]['method'];
            $modelClass = self::$route[$RequestMethod][$RequestUri]['model'];

            $classModel = new $modelClass();
            $classController = new $controllerClass($classModel);
            
            $classController->$controllerMethod($routeId);

            
            

        } else{
            echo '404 Page not found' ;
        }
    }
}
