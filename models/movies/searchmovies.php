<?php
header("Content-Type: application/json");
if (!isset($_POST['btn'])) {
    http_response_code(403);
} else {

    $upit = "SELECT * 
    from main_category_info mc join genre_main_category_info gm 
    on mc.idMainCatInfo = gm.idMainCatInfo 
    where mc.mainCatInfoName LIKE '%" . $_POST['moviename'] . "%' AND mc.idMainCat = 1  GROUP BY mc.idMainCatInfo";

    try {

        include '../../config/connection.php';

        $tmp = $conn->prepare($upit);

        $tmp->execute();

        if ($tmp) {
            $result = $tmp->fetchAll();
            echo json_encode($result);
        }
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}
