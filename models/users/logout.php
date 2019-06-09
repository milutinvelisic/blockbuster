<?php 

session_start();

if(isset($_SESSION['user'])){
	unset($_SESSION['user']);
	http_response_code(200);
	header("Location: ../../index.php");
}else{
	http_response_code(404);
	echo "Niste se ni ulogovali";
}