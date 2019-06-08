<?php

session_start();

if(!isset($_POST['btnUpdateInfo'])){
    http_response_code(403);
}else{

    $username = $_POST['updateusername'];
    $email = $_POST['updateemail'];
    $uid = $_SESSION['user']->idUser;

    include '../../config/connection.php';
    include 'functions.php';

    try{
        $result = $conn->prepare("SELECT * FROM users WHERE email = ? AND NOT idUser = ?");
        $result->execute([$email, $uid]);
        $stmt = $result->fetch();

        if($result->rowCount() != 0){
            http_response_code(400);
            echo "This email is already taken";
        }else{

            $tmp = updateUserInfo($username, $email, $uid);

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
        }
    }catch(PDOException $ex){
        http_response_code(404);
        echo $ex->getMessage();
    }

}