<?php
session_start();
if (!isset($_POST['btnLogin'])) {
    http_response_code(404);
} else {
    $email = strtolower($_POST['email']);
    $password = md5($_POST['password']);
    try {
        include '../../config/connection.php';
        include 'functions.php';

        // $tmp = executeUser('password', $password);

        // $select = executeUser('email', $email);
        $select = checkUser($email, $password);

        // $tmp = $conn->prepare("SELECT * FROM users where email = ? and password = ?");
        // $tmp->execute([$email, $password]);


        // var_dump($tmp->fetch());

        if ($select) {
            $user = $select;
            $_SESSION['user'] = $user;
            header("Location: ../../index.php");
        } else {
            http_response_code(403);
        }
    } catch (PDOException $ex) {
        http_response_code(400);
        echo $ex->getMessage();
    }
}
