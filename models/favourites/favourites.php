<?php
session_start();
// header("Content-Type: application/json");
if(!isset($_POST['id'])){
    http_response_code(403);
}else{

    $id = $_POST['id'];
    if(isset($_SESSION['user'])){
        $uid = $_SESSION['user']->idUser;

        try{
            include '../../config/connection.php';

            $tmp = $conn->prepare("SELECT * FROM favourites_main_category_info WHERE idMainCatInfo = ? and idUser = ?");
            $tmp->execute([$id, $uid]);
            $result = $tmp->fetchAll();

            if(count($result) != 0){
                http_response_code(400);
                echo "Its already in favourites!";
            }else{

                $stmt = $conn->prepare("INSERT INTO favourites_main_category_info values(null, ?, ?)");
                $stmt->execute([$id, $uid]);

                if($stmt){
                    http_response_code(200);
                    echo "Added to favourites!";
                }
                
            }

        }catch(PDOException $ex){
            echo $ex->getMessage();
        }
    }
}