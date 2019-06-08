<?php

session_start();

if(!isset($_POST['btnUpdatePassword'])){
    http_response_code(403);
}else{
    
    $newpassre = md5($_POST['updatepasswordnewre']);
    $uid = $_SESSION['user']->idUser;

    include '../../config/connection.php';
    include 'functions.php';

    try{
        $tmp = updateUserPassword($newpassre, $uid);

        if(!$tmp){
            http_response_code(400);
            echo "There was trouble with updating your information, please try again!";
        }else{

            $query = executeUser('idUser', $uid);
            if($query){
                $user = $query->fetch();
                $_SESSION['user'] = $user;
                http_response_code(200);
                header("Location: ../../index.php?p=userprofile");
            }  
        }
    }catch(PDOException $ex){
        http_response_code(404);
        echo $ex->getMessage();
    }
}