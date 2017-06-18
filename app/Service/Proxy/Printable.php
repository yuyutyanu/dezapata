<?php

namespace App\Service\Proxy;


interface Printable{
    public function setPrinterName($name);
    public function getPrinterName();
    public function doPrint($string);
}