<!-- footer section-->
<footer class="ht-footer">
	<div class="container">
		<div class="flex-parent-ft">
			<div class="flex-child-ft item1">
				 <a href="index.html"><img class="logo" src="images/logo1.png" alt=""></a>
				 <p>5th Avenue st, manhattan<br>
				New York, NY 10001</p>
				<p>Call us: <a href="#">(+01) 202 342 6789</a></p>
			</div>
			<div class="flex-child-ft item2">
				<h4>Resources</h4>
				<ul>
					<li><a href="#">About</a></li> 
					<li><a href="#">Blockbuster</a></li>
					<li><a href="#">Contact Us</a></li>
					<li><a href="#">Forums</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Help Center</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item3">
				<h4>Legal</h4>
				<ul>
					<li><a href="#">Terms of Use</a></li> 
					<li><a href="#">Privacy Policy</a></li>	
					<li><a href="#">Security</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item4">
				<h4>Account</h4>
				<ul>
					<li><a href="#">My Account</a></li> 
					<li><a href="#">Watchlist</a></li>	
					<li><a href="#">Collections</a></li>
					<li><a href="#">User Guide</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item5">
				<h4>Newsletter</h4>
				<p>Subscribe to our newsletter system now <br> to get latest news from us.</p>
				<form action="#">
					<input type="text" placeholder="Enter your email...">
				</form>
				<a href="#" class="btn">Subscribe now <i class="ion-ios-arrow-forward"></i></a>
			</div>
		</div>
	</div>
	<div class="ft-copyright">
		<div class="ft-left">
			<p>© 2017 Blockbuster. All Rights Reserved. Designed by leehari.</p>
		</div>
		<div class="backtotop">
			<p><a href="#" id="back-to-top">Back to top  <i class="ion-ios-arrow-thin-up"></i></a></p>
		</div>
	</div>
</footer>
<!-- end of footer section-->

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/plugins2.js"></script>
<script src="assets/js/custom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="assets/js/main.js"></script>

<script type="text/javascript">
	if(document.getElementById('btnLogin')){
		document.getElementById('btnLogin').addEventListener("click", checkLogin);
	}

	function checkLogin(e){
		e.preventDefault();
		
		let username = document.getElementById('username').value;
		let password = document.getElementById('password').value;

		let usernamereg = /^[A-z]{5,}\d{0,}/;
		let passwordreg = /^[A-z]{6,}\d{0,}/;

		if(!usernamereg.test(username.trim())){
			toastr.warning("Username should be atleast 5 characters long");
			return false;
		}

		if(!passwordreg.test(password.trim())){
			toastr.warning("Password should be atleast 6 characters long");
			return false;
		}

		e.returnValue = true;
	}

	if(document.getElementById('btnRegister')){
		document.getElementById('btnRegister').addEventListener("click", checkRegister);
	}

	function checkRegister(e){
		e.preventDefault();
		
		let username = document.getElementById('regusername').value;
		let email = document.getElementById('regemail').value;
		let password = document.getElementById('regpassword').value;

		let usernamereg = /^[A-z]{5,}\d{0,}/;
		let passwordreg = /^[A-z]{6,}\d{0,}/;
		let emailreg = /^[a-z]{5,}\d{0,}\@(ict.edu.rs)|(gmail.com)|(hotmail.com)$/;

		if(username == ""){
			toastr.error("Username must be filled!");
			return false;
		}

		if(!usernamereg.test(username.trim())){
			toastr.warning("Username should be atleast 5 characters long");
			return false;
		}

		if(email == ""){
			toastr.error("Email must be filled!");
			return false;
		}

		if(!emailreg.test(email.trim())){
			toastr.warning("Email isnt in right format!");
			return false;
		}


		if(password == ""){
			toastr.error("Password must be filled!");
			return false;
		}

		if(!passwordreg.test(password.trim())){
			toastr.warning("Password should be atleast 6 characters long");
			return false;
		}
		
		e.returnValue = true;
		
	}	

	if(document.getElementById('btnUpdateInfo')){
		document.getElementById('btnUpdateInfo').addEventListener("click", checkUpdateInfo);
	}

	$(document).ready(function(){
		$("body").on("click",".linkovi",function (e) {
		
			e.preventDefault()
			movieCat($(this).data('idcatmovie'))
    	})

		$("body").on("click",".linkovi1",function (e) {
		
		e.preventDefault()
		SeriesCat($(this).data('idcatseries'))
	})
	})

	function checkUpdateInfo(e){
		e.preventDefault();

		let updateusername = $("#updateusername").val()
		let updateemail = $("#updateemail").val()

		if(!updateusername == ""){
			toastr.warning("Username field must not be empty!")
			return false;
		}

		if(!updateemail == ""){
			toastr.warning("Email field must not be empty!")
			return false;
		}

		e.returnValue = true

		$.ajax({
			url : "models/users/updateinfo.php",
			method : "POST",
			type : "json",
			success : function(data){
				console.log(data)
			},
			error : function(xhr, status, msg){
				console.warning(xhr)
				console.error(xhr)
				console.log(xhr)
			}
		})
	}

	if(document.getElementById('btnUpdatePassword')){
		document.getElementById('btnUpdatePassword').addEventListener("click", checkUpdatePassword)
	}

	function checkUpdatePassword(e){
		e.preventDefault();

		let updatepasswordnew = $("#updatepasswordnew").val()
		let updatepasswordnewre = $("#updatepasswordnewre").val()
		let passwordreg = /^[A-z]{6,}\d{0,}/;

		if(!updatepasswordnew == ""){
			toastr.warning("New password field must not be empty!")
			return false;
		}

		if(!passwordreg.test(updatepasswordnew.trim())){
			toastr.warning("Password should be atleast 6 characters long");
			return false;
		}

		if(!updatepasswordnewre == ""){
			toastr.warning("Repeated password field must not be empty!")
			return false;
		}

		if(!passwordreg.test(updatepasswordnewre.trim())){
			toastr.warning("Password should be atleast 6 characters long");
			return false;
		}

		if(updatepasswordnewre.search(updatepasswordnew) != 0){
			toastr.warning("Passwords must match!");
			return false;
		}

		e.returnValue = true

		$.ajax({
			url : "models/users/updatepassword.php",
			method : "POST",
			type : "json",
			success : function(data){
				console.log(data)
			},
			error : function(xhr, status, msg){
				console.warning(xhr)
				console.error(xhr)
				console.log(xhr)
			}
		})
	}

	if(document.getElementById("btnCommentsForm")){
		document.getElementById("btnCommentsForm").addEventListener("click", checkCommentsForm)
	}

	function checkCommentsForm(){
		
		let iduser = $("#iduser").val();
		let idblog = $("#idblog").val();
		let username = $("#commentusername").val();
		let email = $("#email").val();
		let message = $("#message").val();
		let date = new Date().toISOString().slice(0, 19).replace('T', ' ');
		console.log(date);
		let errors = []

		if(username == ""){
			toastr.warning("Username must be filled in!");
			errors.push(username)
		}

		if(email == ""){
			toastr.warning("Email must be filled in!");
			errors.push(email)
		}

		if(message == ""){
			toastr.warning("Message must be filled in!");
			errors.push(message)
		}

		if(errors.length == 0){

			$.ajax({
				url : "models/blog/blogcomment.php",
				method : "POST",
				type : "json",
				data : {
					iduser : iduser,
					idblog : idblog,
					username : username,
					email : email,
					message : message,
					date : date,
					btnCommentsForm : true
				},
				success : function(data){
					console.log(data)
					if(data){
						toastr.success("Successfully commented!");

						printComments(data)
					}
				},
				error : function(xhr, status, msg){
					console.error(xhr)
					console.error(status)
					console.error(msg)
				}
			})
		}
	}

	function printComments(data){
		let html = ''

		for(let d of data){
			html += `<div class="cmt-item flex-it">
						<div class="author-infor">
							<div class="flex-it2">
								<h6><a href="#">${d.username}</a></h6> <span class="time">${d.date}</span>
							</div>
							<p>${d.commentText}</p>
						</div>
					</div>`
		}

		$("#comments").html(html)
	}

	

	function movieCat(idCat) {
        $.ajax({
            url: "models/movies/moviecategories.php",
            method: "post",
            type: "json",
            data: {
                idCat: idCat
            },
            success: function (movies) {
				// console.log(movies)
                printMovies(movies)
            },
            error: function (xhr, status, msg) {
                console.error(xhr)
                console.error(status)
                console.error(msg)
            }
        })
	}
	
	function printMovies(movies){
		let html = ''

		for (const m of movies) {
			html += `<div class="slide-it setCatWidth">
						<div class="movie-item">
							<div class="mv-img">
								<img src="assets/images/uploads/${m.mainCatInfoCoverPhoto}" alt="${m.mainCatInfoName}" width="185px" height="284px">
							</div>
							<div class="hvr-inner">
								<a href="index.php?p=movies&id=${m.idCatMainCatInfo}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
							</div>
							<div class="title-in">
								<h6><a href="index.php?p=movies&id=${m.idCatMainCatInfo}">${m.mainCatInfoName}</a></h6>
							</div>
						</div>
					</div>`
		}

		if($("#moviecategories")){
			$("#moviecategories").html(html)
		}
	}

	function SeriesCat(idCat) {
        $.ajax({
            url: "models/series/seriescategories.php",
            method: "post",
            type: "json",
            data: {
                idCat: idCat
            },
            success: function (series) {
				// console.log(series)
                printSeries(series)
            },
            error: function (xhr, status, msg) {
                console.error(xhr)
                console.error(status)
                console.error(msg)
            }
        })
	}
	
	function printSeries(series){
		let html = ''
		console.log(series)
		for (const s of series) {
			html += `<div class="slide-it setCatWidth">
						<div class="movie-item">
							<div class="mv-img">
								<img src="assets/images/uploads/${s.mainCatInfoCoverPhoto}" alt="${s.mainCatInfoName}" width="185px" height="284px">
							</div>
							<div class="hvr-inner">
								<a href="index.php?p=series&id=${s.idMainCatInfo}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
							</div>
							<div class="title-in">
								<h6><a href="index.php?p=series&id=${s.idMainCatInfo}">${s.mainCatInfoName}</a></h6>
							</div>
						</div>
					</div>`
		}

		$("#seriescategories").html(html)
	}

	if(document.getElementById("btnMovieDetails")){
		document.getElementById("btnMovieDetails").addEventListener("click", movieDetails);
	}

	function movieDetails(){
		let moviename = document.getElementById("moviename").value.trim();
		let moviegenres = document.getElementById("moviegenres").value.trim();

		$.ajax({
			url : "models/movies/searchmovies.php",
			method : "POST",
			type : "JSON",
			data : {
				moviename : moviename,
				moviegenres : moviegenres,
				btn : true
			},
			success : function(data){
				console.table(data)
				printMovieDetails(data)
			},
			error : function (xhr, status, msg){
				console.error(xhr)
				console.warning(status)
				console.log(msg)
			}
		})
	}
	function printMovieDetails(movies){
		let html = ''
		for(let m of movies){
			html += `<div class="movie-item-style-2 movie-item-style-1">
						<img src="assets/images/uploads/${m.mainCatInfoCoverPhoto}" alt="${m.mainCatInfoName}">
						<div class="hvr-inner">
							<a  href="index.php?p=movies&id=${m.idMainCatInfo}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
						</div>
						<div class="mv-item-infor">
							<h6><a href="index.php?p=movies&id=${m.idMainCatInfo}">${m.mainCatInfoName}</a></h6>
						</div>
					</div>`
		}
		$("#movies").html(html)

	}

	if(document.getElementById("btnSeriesDetails")){
		document.getElementById("btnSeriesDetails").addEventListener("click", seriesDetails);
	}

	function seriesDetails(){
		let seriesname = document.getElementById("seriesname").value.trim();
		let seriesgenres = document.getElementById("seriesgenres").value.trim();

		$.ajax({
			url : "models/series/searchseries.php",
			method : "POST",
			type : "JSON",
			data : {
				seriesname : seriesname,
				seriesgenres : seriesgenres,
				btnn : true
			},
			success : function(data){
				console.table(data)
				printSeriesDetails(data)
			},
			error : function (xhr, status, msg){
				console.error(xhr)
				console.warning(status)
				console.log(msg)
			}
		})
	}

	function printSeriesDetails(series){
		let html = ''
		for(let s of series){
			html += `<div class="movie-item-style-2 movie-item-style-1">
						<img src="assets/images/uploads/${s.mainCatInfoCoverPhoto}" alt="${s.mainCatInfoName}">
						<div class="hvr-inner">
							<a  href="index.php?p=series&id=${s.idMainCatInfo}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
						</div>
						<div class="mv-item-infor">
							<h6><a href="index.php?p=series&id=${s.idMainCatInfo}">${s.mainCatInfoName}</a></h6>
						</div>
					</div>`
		}
		$("#series").html(html)
	}

</script>
</body>

</html>