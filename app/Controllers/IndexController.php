<?php
namespace App\Controllers;
use App\Models\Job;
use App\Models\Project;

class IndexController extends BaseController{
    public function indexAction(){

        $jobs= Job::all();
        $projects= Project::all();
        $lastname= 'Mendez';
        $name = "Brigitte$lastname";
        $limitmonths=5200;



        $productos = Producto::all();

        //include '../views/index.php';
        
        return $this->renderHTML('index.twig',['name' => $name, 'jobs' => $jobs]);
    }
    
}