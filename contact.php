<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "decimus";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST["Submit"])){
date_default_timezone_set("Asia/Kolkata");
$time=date("d/m/Y")." at ".date("H:i a");
$sql="INSERT INTO bike_query (name,phone,email,query,time) VALUES ('".$_POST["Name"]."','".$_POST["Phone"]."','".$_POST["Email"]."','".$_POST["Message"]."','".$time."')";
$result = $conn->query($sql);
}
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
<title>Decimus Financial | Contact</title>
<!-- for-mobile-apps -->
<link rel="shortcut icon" href="images/icon.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
	<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
                            <a href="index.html" ><img src="images/website final.png"  alt="" usemap="#Teaser" /></a>
                            
			</div>
			<div class="agile-login">
				<ul>
					<li><a href="#"> Give a missed call at: 020-49131111 </a></li>
					
					
				</ul>
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>


<!-- //header -->
<!-- navigation -->
	<div class="navigation-agileits">
		<div class="container">
			<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav">
									<li class="active"><a href="index.html" class="act">Home</a></li>	
									<!-- Mega Menu -->
									<li class="active"><a href="about.html" class="act">About Us</a></li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Products<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>Vehicles</h6>
														<li><a href="#">2-Wheeler Financing</a></li>
														<li><a href="http://erick.decimus.in/"></a>E-Rickshaw</li>
                                                                                                                <li><a href="usedbike.html"></a>Used Bikes</li>
														
													</ul>
												</div>
												
												
											</div>
										</ul>
									</li>
                                                                        
									<li class="active"><a href="http://erick.decimus.in/" class="act">E-Rickshaw</a></li>
									
									
									<li><a href="calculator.html">EMI Calculator</a></li>
									
									<li><a href="#">Offers</a></li>
									
                                                                        <li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Help<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6></h6>
                                                                                                                <li><a href="contact.html">Contact Us</a></li>
														
                                                                                                                <li><a href="contact.html"></a>Message your problem</li>
														
													</ul>
												</div>
												
												
											</div>
										</ul>
									</li>
                                                                        <li style:color="red"><a href="registered.html">Apply now</a></li>
								</ul>
							</div>
							</nav>
			</div>
		</div>
		
<!-- //navigation -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Contact</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- contact -->
	<div class="about">
		<div class="w3_agileits_contact_grids">
			<div class="col-md-6 w3_agileits_contact_grid_left">
				<div class="agile_map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.4393237014215!2d73.87656531489259!3d18.50903898741569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c048218d49af%3A0x61776ce7ebac4bce!2sDecimus+Financial+Ltd!5e0!3m2!1sen!2sin!4v1493476689723" style="border:0"></iframe>
                                       </div>
				<div class="agileits_w3layouts_map_pos">
					<div class="agileits_w3layouts_map_pos1">
						<h3>Contact Info</h3>
						<p>Decimus House, 195,M.G.Road,Near Royal Bakery,Pune.</p>
						<ul class="wthree_contact_info_address">
							<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@decimus.in">info@decimus.in</a></li>
							<li><i class="fa fa-phone" aria-hidden="true"></i>+(0123) 232 232</li>
						</ul>
						<div class="w3_agile_social_icons w3_agile_social_icons_contact">
							<ul>
								<li><a href="#" class="icon icon-cube agile_facebook"></a></li>
								<li><a href="#" class="icon icon-cube agile_rss"></a></li>
								<li><a href="#" class="icon icon-cube agile_t"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 w3_agileits_contact_grid_right">
				<h2 class="w3_agile_header">Leave a<span> Message</span></h2>

				<form action="#" method="post">
					<span class="input input--ichiro">
						<input class="input__field input__field--ichiro" type="text" id="input-25" name="Name" placeholder=" " required="" />
						<label class="input__label input__label--ichiro" for="input-25">
							<span class="input__label-content input__label-content--ichiro">Your Name</span>
						</label>
					</span>
					<span class="input input--ichiro">
						<input class="input__field input__field--ichiro" type="" id="input-26" name="Phone" placeholder=" " required="" />
						<label class="input__label input__label--ichiro" for="input-26">
							<span class="input__label-content input__label-content--ichiro">Your Phone</span>
						</label>
					</span>
					<span class="input input--ichiro">
						<input class="input__field input__field--ichiro" type="email" id="input-27" name="Email" placeholder=" " required="" />
						<label class="input__label input__label--ichiro" for="input-27">
							<span class="input__label-content input__label-content--ichiro">Your Email</span>
						</label>
					</span>
					<textarea name="Message" placeholder="Your message here..." required=""></textarea>
					<input type="Submit" value="Submit" name="Submit">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- contact -->

<!-- //footer -->
<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Contact</h3>
					
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Decimus House, 195,M.G.Road<span>Pune 411001</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@decimus.in</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>020 6400 0324</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Information</h3>
					<ul class="info"> 
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="about.html">About Us</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="contact.html">Contact Us</a></li>
						<!--li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#"></a>Our Products</li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#"></a>E-Rickshaw</li-->
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="contact.html">Feedback</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Category</h3>
					<ul class="info"> 
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#">Bikes</a></li>
                                                
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="erick.decimus.in">E-Rickshaw</a></li>
                                                <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#">SME Loans</a></li>
						
					</ul>
				</div>
				<!--div class="col-md-3 w3_footer_grid">
					<h3>Profile</h3>
					<ul class="info"> 
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#">Store</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#">My Cart</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#">Login</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#">Create Account</a></li>
					</ul>
				</div-->
				<div class="clearfix"> </div>
			</div>
		</div>
		
		<div class="footer-copy">
			
			<div class="container">
				<p>© 2017 Decimus Financial. All rights reserved | Design by <a href="#">Decimus Financial</a></p>
			</div>
		</div>
		
	</div>	
	<div class="footer-botm">
			<div class="container">
				<div class="w3layouts-foot">
					<ul>
						<li><a href="https://www.facebook.com/Decimusfinancial/" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="payment-w3ls">	
					<img src="images/card.png" alt=" " class="img-responsive">
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<!-- //footer -->	
<!-- Bootstrap Core JavaScript -->

<script src="js/bootstrap.min.js"></script>

<!-- top-header and slider -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	
<!-- //main slider-banner --> 
</body>
</html>
