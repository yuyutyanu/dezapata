<?php

namespace App\Service\Factory\ListFactory;
use App\Service\Factory\Link;


class ListLink  extends Link
{
    function __construct($caption, $url)
    {
        parent::__construct($caption, $url);
    }

    public function makeHTML()
    {
        return "<li><a href='".$this->url."'>".$this->caption."</a></li>";
    }
}