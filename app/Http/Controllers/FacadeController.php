<?php
/**
 * Created by PhpStorm.
 * User: chanu
 * Date: 2017/06/18
 * Time: 12:37
 */

namespace App\Http\Controllers;
use App\Service\Facade\PageMaker;

class FacadeController
{
    public function index()
    {
        PageMaker::pageMake();
    }
}