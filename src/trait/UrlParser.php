<?php

namespace src\trait;

trait UrlParser{

    public function parserURL(){
        return explode("/",rtrim($_GET['url']),FILTER_SANITIZE_URL);
    }

}