<div class="hero hero3">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- <h1> movie listing - list</h1>
				<ul class="breadcumb">
					<li class="active"><a href="#">Home</a></li>
					<li> <span class="ion-ios-arrow-right"></span> movie listing</li>
				</ul> -->
			</div>
		</div>
	</div>
</div>
<!-- celebrity single section-->
<?php
	include "models/celebrities/functions.php";
	// var_dump($_GET['id']);

	$actor = getOneActor($_GET['id']);
	// var_dump($actor);
	if($actor == null) // !$film
	{
		header("Location: index.php");
	}
?>
<div class="page-single movie-single cebleb-single">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="mv-ceb">
					<img src="assets/images/uploads/<?= $actor->actorSrcCover ?>" alt="<?= $actor->actorFirstName ?>">
				</div>
			</div>
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="movie-single-ct">
					<h1 class="bd-hd"><?= $actor->actorFirstName ?> <?= $actor->actorLastName ?></h1>
					<div class="movie-tabs">
						<div class="tabs">
							<ul class="tab-links tabs-mv">
								<li class="active"><a href="#overviewceb">Overview</a></li>
								<li><a href="#biography"> biography</a></li>
								<li><a href="#mediaceb"> Media</a></li> 
								<li><a href="#filmography">filmography</a></li>                        
							</ul>
						    <div class="tab-content">
						        <div id="overviewceb" class="tab active">
						            <div class="row">
						            	<div class="col-md-8 col-sm-12 col-xs-12">
						            		<p><?= $actor->overview ?></p>
						            		<!-- <div class="title-hd-sm">
												<h4>Videos & Photos</h4>
											</div>
											<div class="mvsingle-item ov-item">
												<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image11.jpg" ><img src="assets/images/uploads/image1.jpg" alt=""></a>
												<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image21.jpg" ><img src="assets/images/uploads/image2.jpg" alt=""></a>
												<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image31.jpg" ><img src="assets/images/uploads/image3.jpg" alt=""></a>
												<div class="vd-it">
													<img class="vd-img" src="assets/images/uploads/image4.jpg" alt="">
													<a class="fancybox-media hvr-grow" href="https://www.youtube.com/embed/o-0hcF97wy0"><img src="assets/images/uploads/play-vd.png" alt=""></a>
												</div>
											</div> -->
											
						            	</div>
						            </div>
						        </div>
						        <div id="biography" class="tab">
						           <div class="row">
						            	<div class="rv-hd">
											<div>
												<h3>Biography of</h3>
						       	 				<h2><?= $actor->actorFirstName ?> <?= $actor->actorLastName ?></h2>
											</div>							            						
						            	</div>
						            	<p><?= $actor->biography ?></p>
						            </div>
						        </div>
						        <div id="mediaceb" class="tab">
						        	<div class="row">
						        		<div class="rv-hd">
						            		<div>
						            			<h3>Biography of</h3>
					       	 					<h2><?= $actor->actorFirstName ?> <?= $actor->actorLastName ?></h2>
						            		</div>
						            	</div>
										<div class="title-hd-sm">
											<h4>Photos <span> (21)</span></h4>
										</div>
										<div class="mvsingle-item">
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image11.jpg" ><img src="assets/images/uploads/image1.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery"  href="images/uploads/image21.jpg" ><img src="assets/images/uploads/image2.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image31.jpg" ><img src="assets/images/uploads/image3.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image41.jpg" ><img src="assets/images/uploads/image4.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image51.jpg" ><img src="assets/images/uploads/image5.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image61.jpg" ><img src="assets/images/uploads/image6.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image71.jpg" ><img src="assets/images/uploads/image7.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image81.jpg" ><img src="assets/images/uploads/image8.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image91.jpg" ><img src="assets/images/uploads/image9.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image101.jpg" ><img src="assets/images/uploads/image10.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image111.jpg" ><img src="assets/images/uploads/image1-1.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image121.jpg" ><img src="assets/images/uploads/image12.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image131.jpg" ><img src="assets/images/uploads/image13.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image141.jpg" ><img src="assets/images/uploads/image14.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image151.jpg" ><img src="assets/images/uploads/image15.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image161.jpg" ><img src="assets/images/uploads/image16.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image171.jpg" ><img src="assets/images/uploads/image17.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image181.jpg" ><img src="assets/images/uploads/image18.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image191.jpg" ><img src="assets/images/uploads/image19.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image201.jpg" ><img src="assets/images/uploads/image20.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image211.jpg" ><img src="assets/images/uploads/image2-1.jpg" alt=""></a>
										</div>
						        	</div>
					       	 	</div>
					       	 	<div id="filmography" class="tab">
						        	<div class="row">
						            	<div class="rv-hd">
						            		<div>
						            			<h3>Biography of</h3>
					       	 					<h2><?= $actor->actorFirstName ?> <?= $actor->actorLastName ?></h2>
						            		</div>
										
						            	</div>
						            	<div class="topbar-filter">
											<p>Found <span>14 movies</span> in total</p>
											<label>Filter by:</label>
											<select>
												<option value="popularity">Popularity Descending</option>
												<option value="popularity">Popularity Ascending</option>
												<option value="rating">Rating Descending</option>
												<option value="rating">Rating Ascending</option>
												<option value="date">Release date Descending</option>
												<option value="date">Release date Ascending</option>
											</select>
										</div>
										<!-- movie cast -->
										<div class="mvcast-item">	
											<?php
												foreach($actor->movies as $movies):
											?>
											<div class="cast-it">
													<div class="cast-left cebleb-film">
														<img src="assets/images/uploads/<?= $movies->mainCatInfoMiniPhoto ?>" alt="">
														<div>
															<a href="#"><?= $movies->mainCatInfoName ?></a>
														</div>
													</div>
													<p class="time"><?= $movies->actorRole ?></p>
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
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
<!-- celebrity single section-->