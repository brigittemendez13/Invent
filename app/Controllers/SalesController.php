<?php
namespace App\Controllers;
use App\Models\OperacionVenta;
class SalesController {
    public function AddSaleAction($request){

        /*if($request->getMethod() == 'POST'){
            $postData = $request->getParsedBody();
            $cliente = new Cliente();
            $cliente->nombrecliente = $postData['nombrecliente'];
            $cliente->telefono = $postData['telefono'];
            $cliente->email  = $postData['email'];
            $cliente->adresscliente  = $postData['adresscliente'];
            $cliente->save();  
        }*/
        echo $this->renderHTML('addSale.twig');

    }
    public function ListSaleAction($request){

        /*if($request->getMethod() == 'POST'){
            $postData = $request->getParsedBody();
            $cliente = new Cliente();
            $cliente->nombrecliente = $postData['nombrecliente'];
            $cliente->telefono = $postData['telefono'];
            $cliente->email  = $postData['email'];
            $cliente->adresscliente  = $postData['adresscliente'];
            $cliente->save();  
        }*/
        echo $this->renderHTML('listSale.twig');
//sendSunat
    }

}
