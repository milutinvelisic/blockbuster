<div class="hero user-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1><?= $_SESSION['user']->username ?>’s profile</h1>
					<ul class="breadcumb">
						<li class="active"><a href="index.php">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span>Favorites</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-single">
	<div class="container">
		<div class="row ipad-width2">
			<div class="col-md-3 col-sm-12 col-xs-12">
				<div class="user-information">
					<div class="user-img">
						<a href="#"><img src="assets/images/uploads/user-img.png" alt=""><br></a>
						<a href="#" class="redbtn">Change avatar</a>
					</div>
					<div class="user-fav">
						<p>Account Details</p>
						<ul>
							<li><a href="index.php?p=userprofile">Profile</a></li>
							<li class="active"><a href="index.php?p=userfavgrid">Favorites</a></li>
						</ul>
					</div>
					<div class="user-fav">
						<p>Others</p>
						<ul>
							<li><a href="#">Change password</a></li>
							<li><a href="../../models/users/logout.php">Log out</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-9 col-sm-12 col-xs-12">
				<div class="flex-wrap-movielist grid-fav">
				<?php
					if(isset($_SESSION['user'])){
						$uid = $_SESSION['user']->idUser;
					}
					include 'models/favourites/functions.php';

					$favs = getFavouritesForUser($uid);
					// var_dump($favs);
					foreach($favs as $f):
				?>
					<div class="movie-item-style-2 movie-item-style-1 style-3">
						<img src="assets/images/uploads/<?= $f->mainCatInfoCoverPhoto ?>" alt="<?= $f->mainCatInfoName ?>">
						<div class="hvr-inner">
							<a href="index.php?p=series&id=<?= $f->idMainCatInfo ?>"> Read more <i class="ion-android-arrow-dropright"></i> </a>
						</div>
						<div class="mv-item-infor">
							<h6><a href="index.php?p=series&id=<?= $f->idMainCatInfo ?>"><?= $f->mainCatInfoName ?></a></h6>
						</div>
					</div>
				<?php
					endforeach;
				?>
						
				</div>		
				<div class="topbar-filter">					
					<div class="pagination2">
						<span>Page 1 of 2:</span>
						<a class="active" href="#">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#">...</a>
						<a href="#">78</a>
						<a href="#">79</a>
						<a href="#"><i class="ion-arrow-right-b"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>