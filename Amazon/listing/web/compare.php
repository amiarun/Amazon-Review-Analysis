<?php
set_time_limit(0);
$python=`python url1.py`;
$python=`python compare.py`;
// shell_exec('tryurl.py');

# Here's My Try
$t_name1=file_get_contents('C:\xamppnew\htdocs\Amazon\listing\cname1.txt');
$t_price1=file_get_contents('C:\xamppnew\htdocs\Amazon\listing\cprice1.txt');
$t_rate1=file_get_contents('C:\xamppnew\htdocs\Amazon\listing\crate1.txt');
$t_polarity1=file_get_contents('C:\xamppnew\htdocs\Amazon\listing\polarity1.txt');

$t_name2=file_get_contents('C:\xamppnew\htdocs\Amazon\listing\cname2.txt');
$t_price2=file_get_contents('C:\xamppnew\htdocs\Amazon\listing\cprice2.txt');
$t_rate2=file_get_contents('C:\xamppnew\htdocs\Amazon\listing\crate2.txt');
$t_polarity2=file_get_contents('C:\xamppnew\htdocs\Amazon\listing\polarity2.txt');

$t_name3=file_get_contents('C:\xamppnew\htdocs\Amazon\listing\cname3.txt');
$t_price3=file_get_contents('C:\xamppnew\htdocs\Amazon\listing\cprice3.txt');
$t_rate3=file_get_contents('C:\xamppnew\htdocs\Amazon\listing\crate3.txt');
$t_polarity3=file_get_contents('C:\xamppnew\htdocs\Amazon\listing\polarity3.txt');

$t_name4=file_get_contents('C:\xamppnew\htdocs\Amazon\listing\cname4.txt');
$t_price4=file_get_contents('C:\xamppnew\htdocs\Amazon\listing\cprice4.txt');
$t_rate4=file_get_contents('C:\xamppnew\htdocs\Amazon\listing\crate4.txt');
$t_polarity4=file_get_contents('C:\xamppnew\htdocs\Amazon\listing\polarity4.txt');


$name1=trim($t_name1);
$price1=trim($t_price1);
$rate1=trim($t_rate1);
$pol1=trim($t_polarity1);

$name2=trim($t_name2);
$price2=trim($t_price2);
$rate2=trim($t_rate2);
$pol2=trim($t_polarity2);

$name3=trim($t_name3);
$price3=trim($t_price3);
$rate3=trim($t_rate3);
$pol3=trim($t_polarity3);

$name4=trim($t_name4);
$price4=trim($t_price4);
$rate4=trim($t_rate4);
$pol4=trim($t_polarity4);

# End Of My Trial

?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>The Amazon Analyst</title>
	
	<!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Fitness Pricing tables a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
	
	<!-- css files -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!-- //web-fonts -->
	
</head>
<body>
		<!--header-->
		<div class="header-w3l" >
		<h1>Amazon Product Comparison</h1>
		</div>
		<!--//header-->
		<!--main-->
			<!-- pricing plans -->
			<div class="pricing">
				<div class="w3l-pricing-grids">
					<div class="agileits-pricing-grid first">
						<div class="pricing_grid">
							<div class="wthree-pricing-info pricing-top">
								<h4><?php echo $name1 ?></h4>
								
							</div>
							<div class="pricing-bottom">
								<div class="pricing-bottom-bottom">

								<span><p>Price : ₹<span><?php echo $price1 ?></span></p><span>
									<!-- <p><span class="fa fa-check"></span><span>Training</span> Overview</p> -->
									<!-- <p><span class="fa fa-times"></span><span>Beginner </span> Classes</p> -->
									<!-- <p><span class="fa fa-times"></span><span>Personal </span> Training</p>   -->
									<p><span>Customer Rating : </span><div class="buy-button">
								   <a class="popup-with-zoom-anim" href="#small-dialog"><?php echo $rate1 ?></a>
								</div></p>
								<p><span>Polarity Rating : </span><div class="buy-button">
								   <a class="popup-with-zoom-anim" href="#small-dialog"><?php echo $pol1 ?></a>
								</div></p>
									<!-- <p class="text"><span class="fa fa-times"></span><span>Foundation</span> Training</p> -->
									<!-- <a class="popup-with-zoom-anim" href="#small-dialog"></a> -->
								</div>
								<!-- <div class="buy-button">
								   <a class="popup-with-zoom-anim" href="#small-dialog"></a>
								</div> -->
							</div>
						</div>
					</div>
					<div class="agileits-pricing-grid second">
						<div class="pricing_grid">
							<div class="wthree-pricing-info pricing-top blue-top">
								<h4><?php echo $name2 ?></h4>
								<!-- <p>₹<span><?php echo $price2 ?></span></p> -->
							</div>
							<div class="pricing-bottom">
								<div class="pricing-bottom-bottom blue-pricing-bottom-top">
								<span><p>Price : ₹<span><?php echo $price2 ?></span></p><span>
									<!-- <p><span class="fa fa-check"></span><span>Training</span> Overview</p>
									<p><span class="fa fa-check"></span><span>Beginner </span> Classes</p>
									<p><span class="fa fa-times"></span><span>Personal </span> Training</p>  
									<p><span class="fa fa-times"></span><span>Olympic </span> weightlifting</p>
									<p class="text"><span class="fa fa-times"></span><span>Foundation</span> Training</p> -->
									<p><span>Customer Rating : </span><div class="buy-button">
									<a class="popup-with-zoom-anim" href="#small-dialog"><?php echo $rate2 ?></a>
								</div></p>
								<p><span>Polarity Rating : </span><div class="buy-button">
								<a class="popup-with-zoom-anim" href="#small-dialog"><?php echo $pol2 ?></a>
								</div></p>
								</div>
								<!-- <div class="buy-button">
									<a class="popup-with-zoom-anim" href="#small-dialog">Buy Now</a>
								</div> -->
							</div>
						</div>
					</div>
					<div class="agileits-pricing-grid third">
						<div class="pricing_grid">
							<div class="wthree-pricing-info pricing-top green-top">
								<h4><?php echo $name3 ?></h4>
								
							</div>
							<div class="pricing-bottom">
								<div class="pricing-bottom-bottom green-pricing-bottom-top">
								<span><p>Price : ₹<span><?php echo $price3 ?></span></p><span>
								<p><span>Customer Rating : </span><div class="buy-button">
								<a class="popup-with-zoom-anim" href="#small-dialog"><?php echo $rate3 ?></a>
								</div></p>
								<p><span>Polarity Rating : </span><div class="buy-button">
								<a class="popup-with-zoom-anim" href="#small-dialog"><?php echo $pol3 ?></a>
								</div></p>	
								</div>
								<!-- <div class="buy-button">
									<a class="popup-with-zoom-anim" href="#small-dialog">Buy Now</a>
								</div> -->
							</div>
						</div>
					</div>
					
					<div class="agileits-pricing-grid fourth">
						<div class="pricing_grid">
							<div class="wthree-pricing-info pricing-top yellow-top">
								<h4><?php echo $name4 ?></h4>
								
							</div>
							<div class="pricing-bottom">
								<div class="pricing-bottom-bottom yellow-pricing-bottom-top">
								<span><p>Price : ₹<span><?php echo $price4 ?></span></p></span>
									<!-- <p><span class="fa fa-check"></span><span>Training</span> Overview</p>
									<p><span class="fa fa-check"></span><span>Beginner </span> Classes</p>
									<p><span class="fa fa-check"></span><span>Personal </span> Training</p>  
									<p><span class="fa fa-check"></span><span>Olympic </span> weightlifting</p>
									<p class="text"><span class="fa fa-check"></span><span>Foundation</span> Training</p> -->
									<p><span>Customer Rating : </span><div class="buy-button">
									<a class="popup-with-zoom-anim" href="#small-dialog"><?php echo $rate4 ?></a>
								</div></p>
								<p><span>Polarity Rating : </span><div class="buy-button">
								<a class="popup-with-zoom-anim" href="#small-dialog"><?php echo $pol1 ?></a>
								</div></p>
								</div>
								<!-- <div class="buy-button">
									<a class="popup-with-zoom-anim" href="#small-dialog">Buy Now</a>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //pricing plans -->
		<!--//main-->
	<!--footer-->
	<div class="footer">
		<p>&copy; 2018 Fitness Pricing Tables. All Rights Reserved | Design By <a href="http://w3layouts.com">W3layouts</a></p>
	</div>
	<!--//footer-->
		
	<!--pop-up-grid-->
	<div id="popup">
		<div id="small-dialog" class="mfp-hide">
			<div class="signin-form profile">
				<h3>Register Here</h3>
				<div class="login-form">
					<form action="#" method="post">
						<input type="text" name="name" placeholder="Username" required="">
						<input type="email" name="email" placeholder="E-mail" required="">
						<input type="text" name="Number" placeholder="Contact Number" required="">
						<input type="password" name="password" placeholder="Password" required="">
						<input type="password" name="password" placeholder="Confirm Password" required="">
						<input type="submit" value="Submit">
					</form>
				</div>
			</div>
		</div>
	</div>						
	<!--pop-up-grid-->

	<!-- jquery -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- //jquery -->
	
	<!-- Pop-up for pricing tables -->
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<script>
		$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
		});
																						
	});
	</script>
	<!-- //Pop-up for pricing tables -->

</body>
</html>