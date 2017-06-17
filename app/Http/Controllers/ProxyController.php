<?php
/**
 * Created by PhpStorm.
 * User: chanu
 * Date: 2017/06/17
 * Time: 1:36
 */

namespace App\Http\Controllers;
use App\Service\Proxy\Printable;
use App\Service\Proxy\PrinterProxy;
class ProxyController extends Controller
{
    private $proxy;
    function __construct()
    {
        $this->proxy = new PrinterProxy("printer","App\Service\Proxy\Printer");
    }

    public function index()
    {
//        if($this->proxy instanceof Printable){
//            $this->proxy = "hoge";
//        }
        return view('Proxy.proxy')->with(["proxy" => $this->proxy]);
    }
}