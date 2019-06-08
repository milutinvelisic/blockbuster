<?php

function executeUser($whereString, $value){
    global $conn;

    try{

        $tmp = $conn->prepare("SELECT * FROM users WHERE $whereString = ?");
        $tmp->execute([$value]);

        http_response_code(200);
        return $tmp;

    }catch(PDOException $ex){
        http_response_code(404);
        echo $ex->getMessage();
    }

}

function registerUser($username, $password, $email, $role){
    global $conn;

    try{
        $insert = $conn->prepare("INSERT INTO users VALUES(null, ?, ?, ?, null, ?)");
        $insert->execute([$username, $password, $email, $role]);

        if($insert){
            http_response_code(200);
            return true;
        }

    }catch(PDOException $ex){
        http_response_code(404);
        echo $ex->getMessage();
    }
}

function updateUserInfo($username, $email,$uid){
    global $conn;

    try{
        $tmp = $conn->prepare("UPDATE users SET username = ?, email = ? WHERE idUser = ?");
        $tmp->execute([$username, $email, $uid]);

        if($tmp){
            http_response_code(203);
            return true;
        }

    }catch(PDOException $ex){
        http_response_code(404);
        echo $ex->getMessage();
    }
}

function updateUserPassword($password, $uid){
    global $conn;

    try{
        $tmp = $conn->prepare("UPDATE users SET password = ? WHERE idUser = ?");
        $tmp->execute([$password, $uid]);

        if($tmp){
            http_response_code(203);
            return true;
        }

    }catch(PDOException $ex){
        http_response_code(404);
        echo $ex->getMessage();
    }
}