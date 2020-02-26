<?php
namespace App\Controllers;
use App\Models\OperacionCompra;
use App\Models\OperacionVenta;

class ReportsController {
    public function SalesReportAction($request){

        /*if($request->getMethod() == 'POST'){
            $postData = $request->getParsedBody();
            $cliente = new Cliente();
            $cliente->nombrecliente = $postData['nombrecliente'];
            $cliente->telefono = $postData['telefono'];
            $cliente->email  = $postData['email'];
            $cliente->adresscliente  = $postData['adresscliente'];
            $cliente->save();  
        }*/
        echo $this->renderHTML('salesreport.twig');
    }
    public function PurchasesReportAction($request){

        /*if($request->getMethod() == 'POST'){
            $postData = $request->getParsedBody();
            $cliente = new Cliente();
            $cliente->nombrecliente = $postData['nombrecliente'];
            $cliente->telefono = $postData['telefono'];
            $cliente->email  = $postData['email'];
            $cliente->adresscliente  = $postData['adresscliente'];
            $cliente->save();  
        }*/
        echo $this->renderHTML('purchasesreport.twig');
    }
    public function InventoryReportAction($request){

        /*if($request->getMethod() == 'POST'){
            $postData = $request->getParsedBody();
            $cliente = new Cliente();
            $cliente->nombrecliente = $postData['nombrecliente'];
            $cliente->telefono = $postData['telefono'];
            $cliente->email  = $postData['email'];
            $cliente->adresscliente  = $postData['adresscliente'];
            $cliente->save();  
        }*/
        echo $this->renderHTML('inventoryreport.twig');
    }

}
