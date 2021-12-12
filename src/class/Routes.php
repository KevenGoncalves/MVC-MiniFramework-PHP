<?php

namespace src\class;

use src\trait\UrlParser;

class Routes{

    use UrlParser;
    private $route;

    public function getRoute(){

        $url = $this->parserURL();
        $iterator = $url[0];

        $this->route = [
            "" => "ControllerHome",
            "home" => "ControllerHome"
        ];

        if(array_key_exists($iterator,$this->route)){

            if(file_exists(DIRREQ."app/controller/{$this->route[$iterator]}.php")){
                return $this->route[$iterator];
            }
            else{
                return "ControllerHome";
            }
        }
        else{
            return "ControllerError";
        }
    }
}

