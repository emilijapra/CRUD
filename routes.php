<?php include "./controllers/IkeaController.php"; ?>


 
<?php

$edit = false;
if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    if(isset($_POST["save"])){
        IkeaController::store();
        header("Location:./index.php");
        die;
    }
    
    if(isset($_POST['update'])){
        
        IkeaController::update();
        header("Location: ./index.php");
        die;
        
    }
    if(isset($_POST["destroy"])){
        IkeaController::destroy();
        header("Location:./index.php");
        die;
    }

    if(isset($_POST["edit"])){
        $ikea = IkeaController::show();
        $ikeas = IkeaController::index();
        $edit = true;
    }
}

    

if($_SERVER['REQUEST_METHOD'] == "GET"){
    if(isset($_GET["filter"])){
        $ikeas = IkeaController::filter();
    
    }
    if($_SERVER['REQUEST_METHOD'] == "GET"){
        if(isset($_GET["filter"])){
            $ikeas = IkeaController::filter();
        
    }   
        }

    
    if(count($_GET) == 0){
    $ikeas = IkeaController::index();
    }
}

$params = IkeaController::getfilterParams();


?>