<?php
if(isset($_POST['signin'])){
    $user=$_POST['username'];
	$pass=$_POST['pass'];
	if($user=="admin" && $pass=="the_admin")
	{
		header('location:../dashboard.php');
	}
	else{
		echo '<script>alert("Wrong Username or Password")</script>';
	}
}
?>


<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>The Amazon Analyst</title>
	<meta charset="UTF-8">
	<meta name="description" content="SolMusic HTML Template">
	<meta name="keywords" content="music, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
 
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/modal.css" type="text/css">


	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section clearfix">
		<a href="index.html" class="site-logo">
			<img src="img/logo.png" alt="">
		</a>
		<div class="header-right">
			<!-- <a href="#" class="hr-btn">Help</a> -->
			<!-- <span>|</span> -->
			<div class="user-panel">
				<a href="" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#darkModalForm">Login</a>
				<!-- <a href="page-login.php" class="register">Create an account</a> -->
			</div> 
		</div>
		<!-- <ul class="main-menu">
			<li><a href="index.html">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Pages</a>
				<ul class="sub-menu">
					<li><a href="category.html">Category</a></li>
					<li><a href="playlist.html">Playlist</a></li>
					<li><a href="artist.html">Artist</a></li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</li>
			<li><a href="blog.html">News</a></li>
			<li><a href="contact.html">Contact</a></li>
		</ul> -->
	</header>
	<!-- Header section end -->

	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="hs-text">
								<h2> Hello World!<span> Let's Start Analyzing</span></h2>
								<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p> -->
								<a href=".././index.php" class="site-btn">Review Analysis</a>
								<a href=".././search/search.php" class="site-btn sb-c2">Product Comparison</a>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="hr-img">
								<img src="img/hero-bg.png" alt="" height="50%" width="50%">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

	<!-- Intro section -->
	<section class="intro-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="section-title">
						<h2>This is how we help you, folks!</h2>
					</div>
				</div>
				<div class="col-lg-6">
					<p>So you are provided with some Analytics here. We are upto read the Sentiments of the Reviews of the product that you wish to buy.
						Try it out and get impressed with what you get. Don't get trapped. There are a lot to choose and you may be disguided.
						Our Machine Learning technology helps you get better results. Try it now.</p>
						<p>
						You are not alone, we help you to choose the product that others of you also liked
						and trusts. Buy Safe and Enjoy your product!
					</p>
					<a href=".././index.php" class="site-btn">Try it now</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Intro section end -->

	<!-- How section -->
	<section class="how-section spad set-bg" data-setbg="img/how-to-bg.jpg">
		<div class="container text-white">
			<div class="section-title">
				<h2>How It Works?</h2>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="how-item">
						<div class="hi-icon">
							<img src="img/icons/brain.png" alt="">
						</div>
						<h4>NLTK</h4>
						<p>NLTK is a leading platform for building Python programs to work with human language data. It provides a suite of text processing libraries for classification, tokenization, stemming, tagging, parsing, and semantic reasoning etc.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="how-item">
						<div class="hi-icon">
							<img src="img/icons/pointer.png" alt="">
						</div>
						<h4>Beautiful Soup</h4>
						<p>Beautiful Soup is a library that makes it easy to scrape information from web pages. It sits atop an HTML or XML parser, providing Pythonic idioms for iterating, searching, and modifying the parse tree. </p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="how-item">
						<div class="hi-icon">
							<img src="img/icons/smartphone.png" alt="">
						</div>
						<h4>Scikit Learn</h4>
						<p>Scikit-learn is a free software machine learning library for the Python programming language.It features various classification, regression and clustering algorithms including support vector machines, random forests, gradient boosting, k-means and DBSCAN</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- How section end -->

	<section class="premium-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="section-title">
						<h2>About the creator</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6"  style="margin-left: 40%;;">
					<div class="premium-item">
						<img src="img/premium/profile.jpg" alt="">
						<h4>Amitha Arun</h4>
						<a href="amiarun.github.io" target="_blank">Know More About Me</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Subscription section -->
	<section class="subscription-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="sub-text">
						<h2>This is totally free to use.!</h2>
						<h3>Start using now</h3>
						<p>We doesn't have any expenses for this. All we had is some work and that can be paid with your happiness. These are the features that we provide to make our product more useful to you.</p>
						<a href="#" class="site-btn">Try it now</a>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="sub-list">
						<li><img src="img/icons/check-icon.png" alt="">Analyze A Product</li>
						<li><img src="img/icons/check-icon.png" alt="">Compare Different Products</li>
						<li><img src="img/icons/check-icon.png" alt="">Easy to Use</li>
						<li><img src="img/icons/check-icon.png" alt="">No Ad Interruptions</li>
						<li><img src="img/icons/check-icon.png" alt="">Powerful Algorithm</li>
						<li><img src="img/icons/check-icon.png" alt="">Admin Side Improvisation</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- Subscription section end -->


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-7 order-lg-2">
				</div>
				<div class="col-xl-6 col-lg-5 order-lg-1">
					<img src="img/logo.png" alt="">
					<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					<div class="social-links">
						<a href=""><i class="fa fa-instagram"></i></a>
						<a href=""><i class="fa fa-pinterest"></i></a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-youtube"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->
	
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/main.js"></script>

<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="darkModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog form-dark" role="document">
    <!--Content-->
    <div class="modal-content card card-image" >
      <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
        <!--Header-->
        <div class="modal-header text-center pb-4">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>LOGIN</strong> <a
              class="green-text font-weight-bold"><strong></strong></a></h3>
          <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
		<!--Body-->
		<form method="POST">
        	<div class="modal-body">
          <!--Body-->
          			<div class="md-form mb-5">
						<input type="text" id="Form-email5" name="username" id="username" placeholder="Username"class="form-control validate white-text">
						<label data-error="wrong" data-success="right" for="Form-email5"></label>
          			</div>

					<div class="md-form pb-3">
						<input type="password" id="pass" name="pass"  placeholder="Password" class="form-control validate white-text">
						<label data-error="wrong" data-success="right" for="Form-pass5"></label>
					</div>

          <!--Grid row-->
          			<div class="row d-flex align-items-center mb-4">

						<!--Grid column-->
						<div class="text-center mb-3 col-md-12">
						<input type="submit" id="signin" name="signin" value="Login" class="btn btn-success btn-block btn-rounded z-depth-1">
						</div>
						<!--Grid column-->
						
					</div>
				</form>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal -->
</body>
</html>