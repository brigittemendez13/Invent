<?php
namespace App\Controllers;
use App\Models\Cliente;
use App\Models\OperacionCompra;
use App\Models\OperacionVenta;
use App\Models\Productos;
class BeginController {
    public function BeginAction($request){
        echo $this->renderHTML('begin.twig');
    }

}
