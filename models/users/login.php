<?php
session_start();
if(!isset($_POST['btnLogin'])){
    http_response_code(404);
}else{
    $username = strtolower($_POST['logusername']);

    $usernamereg = "/[A-z]{5,}\d{0,}/";    

    $errors = [];

    if(!preg_match($usernamereg, $username)){
        http_response_code(401);
        $errors[] = "Username does not match!";
        echo json_encode($errors);
    }else{

        try{
            include '../../config/connection.php';
            include 'functions.php';
    
            $select = executeUser('username', $username);
    
            if($select){
                $user = $select->fetch();
                $_SESSION['user'] = $user;
                header("Location: ../../index.php");
            }
        }catch (PDOException $ex){
            http_response_code(400);
            echo $ex->getMessage();
        }
    }
}