<?php
	session_start();
	ob_start();
    require_once 'config/connection.php';
	require_once "views/fixed/head.php";
	require_once "views/fixed/header.php";

	if(!isset($_GET['p'])){
		include "views/pages/pocetna.php";
	}else{
		switch($_GET['p']){
			case 'movies':
				if(isset($_GET['id'])){
					include 'views/pages/moviesingle.php';
				}else{
					include "views/pages/movies.php";
				}
				break;
			case 'series':
				if(isset($_GET['id'])){
					include 'views/pages/seriessingle.php';
				}else{
					include "views/pages/series.php";
				}
				break;
			case 'celebrities':
				if(isset($_GET['id'])){
					include "views/pages/celebritysingle.php";	
				}else{
					include 'views/pages/celebrities.php';
				}
				break;
			case 'blog':
				if(isset($_GET['id'])){
					include 'views/pages/blogdetail.php';
				}else{
					include 'views/pages/blog.php';
				}
				break;
			case 'userprofile':
				include 'views/pages/userprofile.php';
				break;
			case 'userfavlist':
				include 'views/pages/userfavoritelist.php';
				break;
			case 'userfavgrid':
				include 'views/pages/userfavoritegrid.php';
				break;
			case 'userrate':
				include 'views/pages/userrate.php';
				break;
			case '404':
				include 'views/pages/404.php';
				break;
			default :
				include "views/pages/pocetna.php";
				break;
		}
	}
	require_once "views/fixed/footer.php";
