<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- <div class="hero-ct">
					<h1> blog detail</h1>
					<ul class="breadcumb">
						<li class="active"><a href="#">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span> blog listing</li>
					</ul>
				</div> -->
			</div>
		</div>
	</div>
</div>
<!-- blog detail section-->
<?php
	include "models/blog/functions.php";
	// var_dump($_GET['id']);

	$blog = getOneBlog($_GET['id']);
	// var_dump($blog);
	$comments = getCommentsForBlog($_GET['id']);
	// var_dump($comments);
	if($blog == null) // !$film
	{
		header("Location: index.php");
	}
?>
<div class="page-single">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-sm-12 col-xs-12">
				<div class="blog-detail-ct">
					<h1><?= $blog->title ?></h1>
					<span class="time"><?= $blog->date ?></span>
					<p><?= $blog->textLong ?></p>
					<!-- share link -->
					<div class="flex-it share-tag">
						<div class="social-link">
							<h4>Share it</h4>
							<a href="#"><i class="ion-social-facebook"></i></a>
							<a href="#"><i class="ion-social-twitter"></i></a>
							<a href="#"><i class="ion-social-googleplus"></i></a>
							<a href="#"><i class="ion-social-pinterest"></i></a>
							<a href="#"><i class="ion-social-linkedin"></i></a>
						</div>
						<div class="right-it">
							<h4>Tags</h4>
							<a href="#">Gray,</a>
							<a href="#">Film,</a>
							<a href="#">Poster</a>
						</div>
					</div>
					<!-- comment items -->
					<div class="comments" id="comments">
						<?php
							foreach($comments as $c):
						?>
						<div class="cmt-item flex-it">
							<div class="author-infor">
								<div class="flex-it2">
									<h6><a href="#"><?= $c->username ?></a></h6> <span class="time"><?= $c->date ?></span>
								</div>
								<p><?= $c->commentText ?></p>
							</div>
						</div>
						<?php
							endforeach;
						?>
					</div>
					<?php
							if(isset($_SESSION['user'])):
					?>
					<div class="comment-form">
						<h4>Leave a comment</h4>
						<form action="models/blog/blogcomment.php" method="POST" >
							<input type="hidden" name="iduser" id="iduser" value="<?= $_SESSION['user']->idUser ?>" disabled>
							<input type="hidden" name="idblog" id="idblog" value="<?= $_GET['id'] ?>" disabled>
							<div class="row">
								<div class="col-md-6">
									<input type="text" name="commentusername" id="commentusername" placeholder="Username" value="<?= $_SESSION['user']->username ?>" disabled>
								</div>
								<div class="col-md-6">
									<input type="text" name="email" id="email" placeholder="Your email" value="<?= $_SESSION['user']->email ?>" disabled>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<textarea name="message" id="message" placeholder="Message"></textarea>
								</div>
							</div>
							<input class="submit" type="button" id="btnCommentsForm" name="btnCommentsForm" value="Submit comment">
						</form>
					</div>
					<?php
						endif;
					?>
					<!-- comment form -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end of  blog detail section-->