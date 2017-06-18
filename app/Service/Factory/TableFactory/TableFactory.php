<?php

namespace App\Service\Factory\TableFactory;
use App\Service\Factory\Factory;

class TableFactory  extends Factory
{

    public function createLink($caption, $url)
    {
        return new TableLink($caption,$url);
    }

    public function createTray($caption)
    {
        return new TableTray($caption);
    }

    public function createPage($title, $author)
    {
        return new TablePage($title,$author);
    }
}