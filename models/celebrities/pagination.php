<?php
header("Content-Type: application/json");
if(isset($_POST['id'])){

    $id = intval($_POST['id'])*6;

    include '../../config/connection.php';
    
    try{
        $stmt = executeQuery("SELECT * FROM actors LIMIT $id, 6");
        if($stmt){
            echo json_encode($stmt);
        }
    
    }catch(PDOExceptioin $ex){
        echo $ex->getMessage();
    }
}