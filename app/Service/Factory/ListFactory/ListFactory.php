<?php
/**
 * Created by PhpStorm.
 * User: chanu
 * Date: 2017/06/17
 * Time: 18:25
 */

namespace App\Service\Factory\ListFactory;
use App\Service\Factory\Factory;

class ListFactory extends Factory
{
    public  function createLink($caption, $url)
    {
        return new ListLink($caption,$url);
    }

    public function createPage($title, $author)
    {
        return new ListPage($title, $author);
    }

    public function createTray($caption)
    {
        return new ListTray($caption);
    }
}