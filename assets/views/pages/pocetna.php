<?php
include 'models/movies/functions.php';
include 'models/series/functions.php';
include 'models/celebrities/functions.php';
?>
<div class="slider movie-items">
	<div class="container">
		<div class="row">
			<div class="social-link">
				<p>Follow us: </p>
				<a href="#"><i class="ion-social-facebook"></i></a>
				<a href="#"><i class="ion-social-twitter"></i></a>
				<a href="#"><i class="ion-social-googleplus"></i></a>
				<a href="#"><i class="ion-social-youtube"></i></a>
			</div>
			<div class="slick-multiItemSlider">
				<?php
				$someMovies = getSomeMovies();

				foreach ($someMovies as $sm) :
					?>
					<div class="movie-item">
						<div class="mv-img">
							<a href="index.php?p=movies&id=<?= $sm->idMainCatInfo ?>"><img src="assets/images/uploads/<?= $sm->mainCatInfoBigPhoto ?>" alt="<?= $sm->mainCatInfoName ?>"></a>
						</div>
						<div class="title-in">
							<h6><a href="index.php?p=movies&id=<?= $sm->idMainCatInfo ?>"><?= $sm->mainCatInfoName ?></a></h6>
							<!-- <p><i class="ion-android-star"></i><span>7.4</span> /10</p> -->
						</div>
					</div>
				<?php
			endforeach;
			?>
			</div>
		</div>
	</div>
</div>
<div class="movie-items">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-8">
				<div class="title-hd">
					<h2>movies</h2>
					<a href="index.php?p=movies" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
				</div>
				<div class="tabs">
					<ul class="tab-links">
						<?php

						$categories = getAllMovieCategories();
						foreach ($categories as $c) :
							?>
							<li><a href="#" class="linkovi" data-idcatmovie="<?= $c->idCat ?>">#<?= $c->categoryName ?></a></li>
						<?php
					endforeach;
					?>
					</ul>
					<div class="tab-content">
						<div id="tab1" class="tab active">
							<div class="row">
								<div class="slick-multiItem namesti" id="moviecategories">
									<?php
									$someMovies = getSomeMovies();

									foreach ($someMovies as $sm) :
										?>
										<div class="slide-it setCatWidth">
											<div class="movie-item">
												<div class="mv-img">
													<img src="assets/images/uploads/<?= $sm->mainCatInfoCoverPhoto ?>" alt="<?= $sm->mainCatInfoName ?>" width="185" height="284">
												</div>
												<div class="hvr-inner">
													<a href="index.php?p=movies&id=<?= $sm->idMainCatInfo ?>"> Read more <i class="ion-android-arrow-dropright"></i> </a>
												</div>
												<div class="title-in">
													<h6><a href="index.php?p=movies&id=<?= $sm->idMainCatInfo ?>"><?= $sm->mainCatInfoName ?></a></h6>
													<!-- <p><i class="ion-android-star"></i><span>7.4</span> /10</p> -->
												</div>
											</div>
										</div>
									<?php
								endforeach;
								?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="title-hd">
					<h2>on tv</h2>
					<a href="index.php?p=series" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
				</div>
				<div class="tabs">
					<ul class="tab-links-2">
						<?php

						$categories = getAllSeriesCategories();
						foreach ($categories as $c) :
							?>
							<li><a href="#" class="linkovi1" data-idcatseries="<?= $c->idCat ?>">#<?= $c->categoryName ?></a></li>
						<?php
					endforeach;
					?>
					</ul>
					<div class="tab-content">
						<div id="tab22" class="tab active">
							<div class="row">
								<div class="slick-multiItem" id="seriescategories">
									<?php
									$someSeries = getSomeSeries();
									// var_dump($someSeries);
									foreach ($someSeries as $ss) :
										?>
										<div class="slide-it setCatWidth">
											<div class="movie-item">
												<div class="mv-img">
													<img src="assets/images/uploads/<?= $ss->mainCatInfoCoverPhoto ?>" alt="<?= $ss->mainCatInfoName ?>" width="185" height="284">
												</div>
												<div class="hvr-inner">
													<a href="index.php?p=series&id=<?= $ss->idMainCatInfo ?>"> Read more <i class="ion-android-arrow-dropright"></i> </a>
												</div>
												<div class="title-in">
													<h6><a href="index.php?p=series&id=<?= $ss->idMainCatInfo ?>"><?= $ss->mainCatInfoName ?></a></h6>
													<!-- <p><i class="ion-android-star"></i><span>7.4</span> /10</p> -->
												</div>
											</div>
										</div>
									<?php
								endforeach;
								?>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="sidebar">
					<div class="ads">
						<img src="assets/images/uploads/ads1.png" alt="" width="336" height="296">
					</div>
					<div class="celebrities">
						<h4 class="sb-title">Spotlight Celebrities</h4>
						<?php
						$someCelebs = getSomeCelebs();
						// var_dump($someCelebs);
						foreach ($someCelebs as $sc) :
							?>
							<div class="celeb-item">
								<a href="index.php?p=celebrities&id=<?= $sc->idActor ?>"><img src="assets/images/uploads/<?= $sc->actorSrcBig ?>" alt="<?= $sc->actorFirstName ?>" width="70" height="70"></a>
								<div class="celeb-author">
									<h6><a href="index.php?p=celebrities&id=<?= $sc->idActor ?>"><?= $sc->actorFirstName ?> <?= $sc->actorLastName ?></a></h6>
								</div>
							</div>
						<?php
					endforeach;
					?>
						<a href="index.php?p=celebrities" class="btn">See all celebrities<i class="ion-ios-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>