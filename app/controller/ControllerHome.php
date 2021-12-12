<?php

namespace app\controller;

use app\model\Connection;
use src\class\Render;
use src\interface\InterfaceView;

#classe principal
class ControllerHome extends Connection{

    public function __construct(){
        $view = new View();
    }

    #Metodo Teste
    public function teste($param){
        echo "this {$param}";
    }
    
}

#classe auxiliar de view
class View extends Render implements InterfaceView{

    public function __construct(){
        $this->setDir("home");
        $this->setTitle("MVC Home");
        $this->setDescription("Site do Curso de MVC");
        $this->setKeywords("php,mvc,oop,poo");
        $this->renderLayout();
    }

}