<?php

namespace App\Service\Factory\ListFactory;
use App\Service\Factory\Tray;


class ListTray extends Tray
{
    private $buffer = [];

    function __construct($caption)
    {
        parent::__construct($caption);
    }

    public function makeHTML()
    {
        $this->buffer[] = "<li>".$this->caption."<ul>";
        foreach ($this->tray as $key => $val){
            $this->buffer[]= $val->makeHTML();
        }
        $this->buffer[] = "</ul></li>";

        return $this->buffer;
    }
}