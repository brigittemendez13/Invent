<?php
namespace App\Controllers;
use App\Models\Project;
class ProjectsController{
    public function getAddProjectAction(){
        if(!empty($_POST)){
            $job = new Job();
            $job->title= $_POST['title'];
            $job->description= $_POST['description'];
            $job->save();  
        }
        include '../views/addProject.php';
    }
}

?>