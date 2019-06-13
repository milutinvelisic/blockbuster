<?php
session_start();
ob_start();
require_once 'config/connection.php';
if (isset($_GET['p']) && ($_GET['p'] == "portfolio")) {
	include 'views/pages/portfolio.php';
} else {
	if (isset($_GET['p']) && ($_GET['p'] == "admin") && (isset($_SESSION['user']) && ($_SESSION['user']->idRole == 1))) {
		require_once 'views/admin/fixed/head.php';
		require_once 'views/admin/fixed/header.php';
		require_once 'views/admin/fixed/sidebar.php';
		switch ($_GET['ap']) {
			case 'dashboard':
				include "views/admin/pages/dashboard.php";
				break;
			case 'data':
				include "views/admin/pages/data.php";
				break;
			case 'showdata':
				include "views/admin/pages/showdata.php";
				break;
			case 'connecttables':
				include "views/admin/pages/connecttables.php";
				break;
			default:
				include "views/admin/pages/dashboard.php";
				break;
		}
		require_once 'views/admin/fixed/footer.php';
	} else {
		require_once "views/fixed/head.php";
		require_once "views/fixed/header.php";

		if (!isset($_GET['p'])) {
			include "views/pages/pocetna.php";
		} else {
			switch ($_GET['p']) {
				case 'movies':
					if (isset($_GET['id'])) {
						include 'views/pages/moviesingle.php';
					} else {
						include "views/pages/movies.php";
					}
					break;
				case 'series':
					if (isset($_GET['id'])) {
						include 'views/pages/seriessingle.php';
					} else {
						include "views/pages/series.php";
					}
					break;
				case 'celebrities':
					if (isset($_GET['id'])) {
						include "views/pages/celebritysingle.php";
					} else {
						include 'views/pages/celebrities.php';
					}
					break;
				case 'blog':
					if (isset($_GET['id'])) {
						include 'views/pages/blogdetail.php';
					} else {
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
				case '403':
					include 'views/pages/404.php';
					break;
				default:
					include "views/pages/pocetna.php";
					break;
			}
		}
		require_once "views/fixed/footer.php";
	}
}
