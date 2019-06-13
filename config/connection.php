<?php

require_once "config.php";

zabeleziPristupStranici();

try {
    $conn = new PDO("mysql:host=".SERVER.";dbname=".DATABASE.";charset=utf8", USERNAME, PASSWORD);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $ex){
    echo $ex->getMessage();
}

function executeQuery($query){
    global $conn;
    return $conn->query($query)->fetchAll();
}

function zabeleziPristupStranici(){
    $open = fopen(LOG, "a");
    if($open){
        $date = date('d-m-Y H:i:s');
        fwrite($open, "{$_SERVER['REQUEST_URI']}\t{$date}\t{$_SERVER['REMOTE_ADDR']}\t\n");
        fclose($open);
    }
}

function checkURLParams($param1, $param2){

    switch($param1){
        case 'movies':
            include "models/movies/functions.php";
            break;
        case 'series':
            include "models/series/functions.php";
            break;
    }
}