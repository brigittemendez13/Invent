<?php
namespace App\Controllers;
use App\Models\Empresa;
class ConfigurationController {
    public function EmpresaProfileAction($request){

        /*if($request->getMethod() == 'POST'){
            $postData = $request->getParsedBody();
            $cliente = new Cliente();
            $cliente->nombrecliente = $postData['nombrecliente'];
            $cliente->telefono = $postData['telefono'];
            $cliente->email  = $postData['email'];
            $cliente->adresscliente  = $postData['adresscliente'];
            $cliente->save();  
        }*/
        echo $this->renderHTML('profileempresa.twig');
    }
    //AÑADIRMONEDAS
}
