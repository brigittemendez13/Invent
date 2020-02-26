<?php
namespace App\Controllers;
use App\Models\OperacionCompra;
use App\Models\Productos;
use App\Models\Proveedor;

class PurchasesController {
    public function AddPurchaseAction($request){

        /*if($request->getMethod() == 'POST'){
            $postData = $request->getParsedBody();
            $cliente = new Cliente();
            $cliente->nombrecliente = $postData['nombrecliente'];
            $cliente->telefono = $postData['telefono'];
            $cliente->email  = $postData['email'];
            $cliente->adresscliente  = $postData['adresscliente'];
            $cliente->save();  
        }*/
        echo $this->renderHTML('addpurchase.twig');
    }
    public function ListPurchasesAction($request){

        /*if($request->getMethod() == 'POST'){
            $postData = $request->getParsedBody();
            $cliente = new Cliente();
            $cliente->nombrecliente = $postData['nombrecliente'];
            $cliente->telefono = $postData['telefono'];
            $cliente->email  = $postData['email'];
            $cliente->adresscliente  = $postData['adresscliente'];
            $cliente->save();  
        }*/
        echo $this->renderHTML('listpurchases.twig');
    }

}
