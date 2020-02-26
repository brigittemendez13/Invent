<?php
namespace App\Controllers;
use App\Models\Productos;
class ProductsController {
    public function ListProductsAction($request){

        /*if($request->getMethod() == 'POST'){
            $postData = $request->getParsedBody();
            $cliente = new Cliente();
            $cliente->nombrecliente = $postData['nombrecliente'];
            $cliente->telefono = $postData['telefono'];
            $cliente->email  = $postData['email'];
            $cliente->adresscliente  = $postData['adresscliente'];
            $cliente->save();  
        }*/
        echo $this->renderHTML('listproducts.twig');

    }
    public function AddProductAction($request){

        /*if($request->getMethod() == 'POST'){
            $postData = $request->getParsedBody();
            $cliente = new Cliente();
            $cliente->nombrecliente = $postData['nombrecliente'];
            $cliente->telefono = $postData['telefono'];
            $cliente->email  = $postData['email'];
            $cliente->adresscliente  = $postData['adresscliente'];
            $cliente->save();  
        }*/
        echo $this->renderHTML('addproduct.twig');

    }

}
