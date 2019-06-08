<?php
header("Content-Type: application/json");
if(isset($_POST['id'])){

    $id = intval($_POST['id'])*4;

    include '../../config/connection.php';
    
    try{
        $stmt = executeQuery("SELECT * FROM main_category_info WHERE idMainCat = 1 LIMIT $id, 4");
        if($stmt){
            echo json_encode($stmt);
        }
    
    }catch(PDOExceptioin $ex){
        echo $ex->getMessage();
    }
}