<?php

function getFavouritesForUser($uid){
    global $conn;

    try{
        $tmp = $conn->prepare("SELECT * FROM favourites_main_category_info fm inner join main_category_info m on fm.idMainCatInfo = m.idMainCatInfo WHERE idUser = ?");
        $tmp->execute([$uid]);

        if($tmp){
            $favs = $tmp->fetchAll();

            return $favs;
        }
    }catch(PDOException $ex){
       echo $ex->getMessage();
    }
}