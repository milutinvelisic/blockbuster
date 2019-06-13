<div class="hero mv-single-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
			</div>
		</div>
	</div>
</div>
<?php
	checkURLParams($_GET['p'], $_GET['id']);

	$series = getOneSeries($_GET['id']);
	if($series == null) // !$film
	{
		header("Location: index.php");
	}
?>
<div class="page-single movie-single movie_single">
	<div class="container">
		<div class="row ipad-width2">
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="movie-img sticky-sb">
					<img src="assets/images/uploads/<?= $series->mainCatInfoBigPhoto ?>" alt="<?= $series->mainCatInfoName ?>">
					<div class="movie-btn">	
						<div class="btn-transform transform-vertical red">
							<div><a href="#" class="item item-1 redbtn"> <i class="ion-play"></i> Watch Trailer</a></div>
							<div><a href="<?= $series->mainCatInfoTrailer ?>" class="item item-2 redbtn fancybox-media hvr-grow"><i class="ion-play"></i></a></div>
						</div>
						<div class="btn-transform transform-vertical">
							<div><a href="#" class="item item-1 yellowbtn"> <i class="ion-card"></i> Buy ticket</a></div>
							<div><a href="#" class="item item-2 yellowbtn"><i class="ion-card"></i></a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="movie-single-ct main-content">
					<h1 class="bd-hd"><?= $series->mainCatInfoName ?></h1>
					<?php
						if(isset($_SESSION['user'])):
					?>
					<div class="social-btn">
						<a href="#" id="fav" onclick="fav(<?= $_GET['id'] ?>)" class="parent-btn linkovi"><i class="ion-heart"></i> Add to Favorite</a>	
					</div>
					<?php
						endif;
					?>
					<div class="movie-tabs">
						<div class="tabs">
							<ul class="tab-links tabs-mv">
								<li class="active"><a href="#overview">Overview</a></li>
								<li><a href="#cast">  Cast & Crew </a></li>
								<li><a href="#media"> Media</a></li>                     
							</ul>
						    <div class="tab-content">
						        <div id="overview" class="tab active">
						            <div class="row">
						            	<div class="col-md-8 col-sm-12 col-xs-12">
						            		<p><?= $series->mainCatInfoOverview ?></p>
						            	</div>
						            	<div class="col-md-4 col-xs-12 col-sm-12">
						            		<div class="sb-it">
						            			<h6>Director: </h6>
												<?php
													foreach($series->director as $dir):
												?>
						            			<p><?= $dir->directorFirstName ?> <?= $dir->directorLastName ?></p>
												<?php
													endforeach;
												?>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Writer: </h6>
						            			<p>
												<?php
													foreach($series->producer as $p):
												?>
						            			<p><?= $p->producerFirstName ?> <?= $p->producerLastName ?></p>
												<?php
													endforeach;
												?>
												</p>
						            		</div>
						            		
						            		<div class="sb-it">
						            			<h6>Genres:</h6>
						            			<p>
												<?php
													foreach($series->genre as $g):
												?>
						            			<p><?= $g->genreName ?></p>
												<?php
													endforeach;
												?></p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Release Date:</h6>
						            			<p><?= $series->mainCatInfoReleaseDate ?></p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Run Time:</h6>
						            			<p><?= $series->mainCatInfoRuntime ?> min</p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>MMPA Rating:</h6>
						            			<p>
												<?php
													foreach($series->ageRes as $ar):
												?>
						            			<p><?= $ar->ageResName ?></p>
												<?php
													endforeach;
												?>
												</p>
						            		</div>
						            		<div class="ads">
												<img src="assets/images/uploads/ads1.png" alt="">
											</div>
						            	</div>
						            </div>
						        </div>
						        <div id="cast" class="tab">
						        	<div class="row">
						            	<h3>Cast & Crew of</h3>
					       	 			<h2><?= $series->mainCatInfoName ?></h2>
										<!-- //== -->
					       	 			<div class="title-hd-sm">
											<h4>Directors</h4>
										</div>
										<div class="mvcast-item">											
											<?php
												foreach($series->director as $dir):
											?>
											<p><?= $dir->directorFirstName ?> <?= $dir->directorLastName ?></p>
											<?php
												endforeach;
											?>
										</div>
										<!-- //== -->
										<div class="title-hd-sm">
											<h4>Producers and Writers</h4>
										</div>
										<div class="mvcast-item">	
											<?php
												foreach($series->producer as $p):
											?>
											<p><?= $p->producerFirstName ?> <?= $p->producerLastName ?></p>
											<?php
												endforeach;
											?>
										</div>
										<!-- //== -->
										<div class="title-hd-sm">
											<h4>Cast</h4>
										</div>
										<div class="mvcast-item">											
										<?php
											foreach($series->actors as $a):
												
										?>
										<div class="cast-it">
											<div class="cast-left">
												<img src="assets/images/uploads/<?= $a->actorSrcSmall ?>" alt="<?= $a->actorFirstName?>">
												<p><?= $a->actorFirstName." ".$a->actorLastName ?></p>
											</div>
											<p><?= $a->actorRole ?></p>
										</div>
										<?php
											
											endforeach;
										?>
										</div>
										<!-- //== -->
						            </div>
					       	 	</div>
					       	 	<div id="media" class="tab">
						        	<div class="row">
										<div class="title-hd-sm">
											<h4>Photos</h4>
										</div>
										<div class="mvsingle-item">
											<a class="img-lightbox"  data-fancybox-group="gallery" href="assets/images/uploads/image11.jpg" ><img src="assets/images/uploads/image1.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery"  href="assets/images/uploads/image21.jpg" ><img src="assets/images/uploads/image2.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="assets/images/uploads/image31.jpg" ><img src="assets/images/uploads/image3.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="assets/images/uploads/image41.jpg" ><img src="assets/images/uploads/image4.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="assets/images/uploads/image51.jpg" ><img src="assets/images/uploads/image5.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="assets/images/uploads/image61.jpg" ><img src="assets/images/uploads/image6.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="assets/images/uploads/image71.jpg" ><img src="assets/images/uploads/image7.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="assets/images/uploads/image81.jpg" ><img src="assets/images/uploads/image8.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="assets/images/uploads/image91.jpg" ><img src="assets/images/uploads/image9.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="assets/images/uploads/image101.jpg" ><img src="assets/images/uploads/image10.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="assets/images/uploads/image111.jpg" ><img src="assets/images/uploads/image1-1.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="assets/images/uploads/image121.jpg" ><img src="assets/images/uploads/image12.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="assets/images/uploads/image131.jpg" ><img src="assets/images/uploads/image13.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="assets/images/uploads/image141.jpg" ><img src="assets/images/uploads/image14.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="assets/images/uploads/image151.jpg" ><img src="assets/images/uploads/image15.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="assets/images/uploads/image161.jpg" ><img src="assets/images/uploads/image16.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="assets/images/uploads/image171.jpg" ><img src="assets/images/uploads/image17.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="assets/images/uploads/image181.jpg" ><img src="assets/images/uploads/image18.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="assets/images/uploads/image191.jpg" ><img src="assets/images/uploads/image19.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="assets/images/uploads/image201.jpg" ><img src="assets/images/uploads/image20.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="assets/images/uploads/image211.jpg" ><img src="assets/images/uploads/image2-1.jpg" alt=""></a>
										</div>
						        	</div>
					       	 	</div>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>