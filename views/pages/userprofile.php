<div class="hero user-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1><?= $_SESSION['user']->username ?>’s profile</h1>
					<ul class="breadcumb">
						<li class="active"><a href="index.php">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span>Profile</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-single">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-3 col-sm-12 col-xs-12">
				<div class="user-information">
					<div class="user-img">
						<a href="#"><img src="assets/images/uploads/user-img.png" alt=""><br></a>
						<a href="#" class="redbtn">Change avatar</a>
					</div>
					<div class="user-fav">
						<p>Account Details</p>
						<ul>
							<li class="active"><a href="index.php?p=userprofile">Profile</a></li>
							<li><a href="index.php?p=userfavgrid">Favorites</a></li>
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
				<div class="form-style-1 user-pro" action="#">
					<form action="models/users/updateinfo.php" method="POST" class="user" onsubmit="return checkUpdateInfo(e);">
						<h4>Profile details</h4>
						<div class="row">
							<div class="col-md-6 form-it">
								<label>Username</label>
								<input type="text" name="updateusername" value="<?= $_SESSION['user']->username ?>">
							</div>
							<div class="col-md-6 form-it">
								<label>Email Address</label>
								<input type="text" name="updateemail" value="<?= $_SESSION['user']->email ?>">
							</div>
						</div>
						<div class="row">
							<div class="col-md-2">
								<input class="submit" type="submit" id="btnUpdateInfo" name="btnUpdateInfo" value="save">
							</div>
						</div>	
					</form>
					<form action="models/users/updatepassword.php" method="POST" class="password" onsubmit="return checkUpdatePassword(e);">
						<h4>Change password</h4>
						<div class="row">
							<div class="col-md-6 form-it">
								<label>New Password</label>
								<input type="text"  name="updatepasswordnew" >
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 form-it">
								<label>Confirm New Password</label>
								<input type="text"  name="updatepasswordnewre" >
							</div>
						</div>
						<div class="row">
							<div class="col-md-2">
								<input class="submit" type="submit" id="btnUpdatePassword" name="btnUpdatePassword" value="change">
							</div>
						</div>	
					</form>
				</div>
			</div>
		</div>
	</div>
</div>