<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1>series</h1>
					<ul class="breadcumb">
						<li class="active"><a href="index.php">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span>series</li>
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
				<div class="flex-wrap-movielist" id="series">

					<?php
					include 'models/series/functions.php';

					$series = getAllSeries();

					foreach ($series as $s) :
						include ABSOLUTE_PATH . '/views/partials/singleseriesfordisplay.php';
					endforeach;
					?>

				</div>
				<div class="topbar-filter">
					<div class="pagination2" id="pagination3">
						<span>Pages</span>
						<?php
						$PPnumber = PPNumberSeries();
						for ($i = 0; $i < $PPnumber; $i++) :
							?>
							<a class="active" href="#" data-id="<?= $i ?>"><?= $i + 1 ?></a>
						<?php
					endfor;
					?>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="sidebar">
					<div class="searh-form">
						<h4 class="sb-title">Search for Serie</h4>
						<form class="form-style-1" action="models/series/searchseries.php" method="POST" id="moviedetails">
							<div class="row">
								<div class="col-md-12 form-it">
									<label>Movie name</label>
									<input type="text" id="seriesname" name="seriesname" placeholder="Enter keywords">
								</div>

								<div class="col-md-12 ">
									<input class="submit" name="btnSeriesDetails" id="btnSeriesDetails" type="button" value="submit">
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