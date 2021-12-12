<?php

namespace app;

use src\class\Routes;

class Dispatch extends Routes{

    private $method;
    private $params = [];
    private $object;

    protected function getMethod(){ return $this->method; }
    public function setMethod($method){ $this->method = $method; }
    protected function getParams(){ return $this->params; }
    public function setParams($params){ $this->params = $params; }


    public function __construct()
    {
        $this->addController();
    }


    private function addController()
    {
        $routeController = $this->getRoute();
        $nameS = "app\\controller\\{$routeController}";
        $this->object = new $nameS;

        if(isset($this->parserURL()[1])){
            $this->addMethodController();
        }
    }

    private function addMethodController()
    {
        if(method_exists($this->object,$this->parserURL()[1])){
            $this->setMethod($this->parserURL()[1]);
            $this->addParamsController();
            call_user_func_array([$this->object,$this->getMethod()],$this->getParams());
        }
       
    }

    private function addParamsController()
    {
        $countArray = count($this->parserURL());

        if($countArray > 2 ){
            foreach($this->parserURL() as $key => $value){
                if($key>1){
                    $this->setParams($this->params += [$key => $value]);
                }
            }
        }
    }
}