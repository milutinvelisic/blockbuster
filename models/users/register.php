<?php
session_start();

if(!isset($_POST['btnRegister'])){
    http_response_code(404);
}else{

    $username = $_POST['regusername'];
    $password = md5($_POST['regpassword']);
    $email = $_POST['regemail'];
    $role = 2;

    try{
        include "../../config/connection.php";
        include 'functions.php';

        $result = executeUser('username',$username);
        
        if($result){
            if($result->rowCount() == 1){
                http_response_code(403);
                exit;
            }else{
                $insert = registerUser($username, $password, $email, $role);
                
                if($insert){
                    $userid = $conn->lastInsertId();
                    $query = executeUser('idUser',$userid);
                   
                    if($query){
                        $user = $query->fetch();
                        $_SESSION['user'] = $user;
    
                        header("Location: ../../index.php");
                    }
                }
            }
        }else{
            echo "Query couldnt be executed!";
            exit;
        }

    }catch(PDOException $ex){
        echo $ex->getMessage();
    }
}