<?php

namespace  App\Service\Prototype;

class Manager
{
    private $showcase = [];
    public function register($name, Product $proto){
        $this->showcase[$name] = $proto;
    }
    public function create($protoname){
        $p = $this->showcase[$protoname];
        return $p->createClone();
    }

}