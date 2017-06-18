<?php


namespace App\Service\Factory\TableFactory;
use App\Service\Factory\Tray;

class TableTray extends  Tray
{
    public function makeHTML()
    {
        $this->buffer[] = "<table style='width:300px; border:solid 2px'><thead style='border:solid 2px'><th>".$this->caption."</th></thead><tbody>";
        foreach ($this->tray as $key => $val){
            $this->buffer[]= $val->makeHTML();
        }
        $this->buffer[] = "</tbody></table>";

        return $this->buffer;
    }
}