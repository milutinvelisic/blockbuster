<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1>celebrities</h1>
					<ul class="breadcumb">
						<li class="active"><a href="#">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span> celebrities</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- celebrity grid v1 section-->
<div class="page-single">
	<div class="container">
		<div class="row ipad-width2">
			<div class="col-md-9 col-sm-12 col-xs-12">
				<div class="celebrity-items" id="celebrities">
					<?php
					include 'models/celebrities/functions.php';

					$actors = getAllActors();

					foreach ($actors as $a) :
						include ABSOLUTE_PATH . '/views/partials/singlecelebrityfordisplay.php';
					endforeach;
					?>
				</div>
				<div class="topbar-filter">
					<div class="pagination2" id="pagination2">
						<span>Pages</span>
						<?php
						$PPnumber = PPNumberCelebs();
						for ($i = 0; $i < $PPnumber; $i++) :
							?>
							<a class="active" href="#" data-id="<?= $i ?>"><?= $i + 1 ?></a>
						<?php
					endfor;
					?>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-xs-12 col-sm-12">
				<div class="sidebar">
					<div class="celebrities">
						<h4 class="sb-title">featured celebrity</h4>
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
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--end of celebrity grid v1 section-->