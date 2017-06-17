<?php
/**
 * Created by PhpStorm.
 * User: chanu
 * Date: 2017/06/17
 * Time: 15:17
 */

namespace App\Service\Proxy;


interface Printable{
    public function setPrinterName($name);
    public function getPrinterName();
    public function doPrint($string);
}