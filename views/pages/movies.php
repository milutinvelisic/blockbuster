<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1>movies</h1>
					<ul class="breadcumb">
						<li class="active"><a href="index.php">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span>movies</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-single">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="flex-wrap-movielist" id="movies">

					<?php
						include 'models/movies/functions.php';
						
						$movies = getAllMovies();
						
						foreach($movies as $m):
							include ABSOLUTE_PATH.'/views/partials/singlemoviefordisplay.php';
						endforeach;
					?>
				</div>		
				<div class="topbar-filter">					
					<div class="pagination2" id="pagination1">
						<span>Pages</span>
						<?php
						$PPnumber = PPNumberMovies();
						for($i = 1; $i < $PPnumber; $i++):
						?>
							<a class="active" href="#" data-id="<?= $i ?>"><?= $i ?></a>
						<?php
							endfor;
						?>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="sidebar">
					<div class="searh-form">
						<h4 class="sb-title">Search for movie</h4>
						<form class="form-style-1" action="models/movies/searchmovies.php" method="POST" id="moviedetails">
							<div class="row">
								<div class="col-md-12 form-it">
									<label>Movie name</label>
									<input type="text" id="moviename" name="moviename" placeholder="Enter keywords">
								</div>
								<div class="col-md-12 form-it">
									<label>Genres</label>
									<div class="group-ip">
										<select name="moviegenres" id="moviegenres" class="ui fluid dropdown">
											<option value="">Enter to filter genres</option>
											<?php
												$moviegenres = getAllMovieGenres();
												foreach($moviegenres as $mg):
											?>
											<option value="<?= $mg->idGenre ?>"><?= $mg->genreName ?></option>
											<?php
												endforeach;
											?>
										</select>
									</div>	
								</div>
								<div class="col-md-12 ">
									<input class="submit" name="btnMovieDetails" id="btnMovieDetails" type="button" value="submit">
								</div>
							</div>
						</form>
					</div>
					<div class="ads">
						<img src="assets/images/uploads/ads1.png" alt="">
					</div>
					<?php
						include 'views/partials/twitter.php';
					?>
				</div>
			</div>
		</div>
	</div>
</div>