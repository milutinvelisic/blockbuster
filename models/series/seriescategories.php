<?php

header("Content-Type: application/json");

if(!isset($_POST['idCat'])){
    http_response_code(403);
}else{

    $idCat = $_POST['idCat'];

    include "../../config/connection.php";

    $stmt = $conn->prepare("SELECT * from categories c inner join categories_main_category_info cm on c.idCat=cm.idCat INNER join main_category_info mc on cm.idMainCatInfo = mc.idMainCatInfo where c.idCat = ? and idMainCat = 2");

    $stmt->execute([$idCat]);

    if($stmt){

        $movies = $stmt->fetchAll();

        echo json_encode($movies);
    }
}