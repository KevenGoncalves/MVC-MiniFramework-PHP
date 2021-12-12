<?php

namespace src\interface;

use src\class\Render;

interface InterfaceView{

    public function setDir($dir);  
    public function setTitle($title);
    public function setDescription($description);
    public function setKeywords($keywords);
    public function renderLayout();

}