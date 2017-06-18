<?php

namespace App\Service\Composite;

abstract class Entry
{
    public abstract function getName();
    public abstract function getSize();

    public function add(Entry $entry){

    }
    public abstract function printList();

    public function __toString(){
        return $this->getName()."(".$this->getSize().")";
    }
}