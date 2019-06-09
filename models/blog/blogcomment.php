<?php

session_start();
header("Content-Type: application/json");
if(!isset($_POST['btnCommentsForm'])){
    http_response_code(403);
}else{

    $idUser = $_POST['iduser'];
    $idblog = $_POST['idblog'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $date = $_POST['date'];

    try{

        include "../../config/connection.php";

        $stmt = $conn->prepare("SELECT * FROM users WHERE idUser = ? AND username = ? AND email = ?");
        $stmt->execute([$idUser, $username, $email]);

        if(!$stmt){
            http_response_code(400);
            echo "User informations are not valid!";
        }else{

            include "functions.php";

            $tmp = insertComment($message, $date, $idUser, $idblog);
            
            if(!$tmp){
                http_response_code(400);
                echo "There was problem while inserting comment, please try later!";
            }else{

                http_response_code(200);   
                
                echo json_encode($tmp);
            }
        }

    }catch(PDOException $ex){
        echo $ex->getMessage();
    }
}