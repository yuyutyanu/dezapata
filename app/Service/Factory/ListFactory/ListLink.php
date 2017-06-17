<?php
/**
 * Created by PhpStorm.
 * User: chanu
 * Date: 2017/06/17
 * Time: 18:30
 */

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