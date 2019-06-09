<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1> blog listing - grid</h1>
					<ul class="breadcumb">
						<li class="active"><a href="#">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span> blog listing</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- blog grid section-->
<div class="page-single">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12" id="blog">
				<div class="row">
					<?php
					include 'models/blog/functions.php';

					$blog = getLimitedBlog();
					// var_dump($blog);
					foreach ($blog as $b) :
						include ABSOLUTE_PATH . '/views/partials/singleblogfordisplay.php';
					endforeach;
					?>
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12">
				<ul class="pagination" id="pagination4">
					<?php
					$PPnumber = PPNumberBlog();
					for ($i = 0; $i < $PPnumber; $i++) :
						?>
						<li><a href="#" data-id="<?= $i ?>"><?= $i + 1 ?></a></li>
					<?php
				endfor;
				?>
				</ul>
			</div>

		</div>
	</div>
</div>
<!--end of  blog grid section-->