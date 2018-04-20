<!DOCTYPE html>
<html>
<head>
<title>Decimus Financial | YAMAHA</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css_bike/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css_bike/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="js_bike/jquery-1.11.1.min.js"></script>
   

<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js_bike/move-top.js"></script>
<script type="text/javascript" src="js_bike/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="css_bike/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->

<!---//End-rate---->

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
									
									<li><a href="offer.php">Offers</a></li>
									
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
                                                                        <li style:color="red"><a href="registered.php">Apply now</a></li>
								</ul>
							</div>
							</nav>
			</div>
		</div>
		
<!-- //navigation -->
	<div class="logo_products">
		<div class="container">
		<div class="w3ls_logo_products_left1">
				
			</div>
			
		<div class="w3l_search">
			<form action="search.php" method="post">
				<input type="search" name="Search" placeholder="Search for a Product..." required="">
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
				<div class="clearfix"></div>
			</form>
		</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
		
<!-- //navigation -->

	

<!--content-->

<!--content-->
  <!-- Carousel
    ================================================== -->
    <!-- /.carousel -->

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

$sql = "SELECT * FROM bikes WHERE brand='yamaha'";
$result = $conn->query($sql);


       // echo "Name: " . $row["name"]. "<br>";     
       echo'<div class="product">';
		echo'<div class="container">';
			
				echo'<div class=" con-w3l">';
				if ($result->num_rows > 0) {
    // output data of each row
    $id=0;
    while($row = $result->fetch_assoc()) {
    					
                                   
							echo'<div class="col-md-3 pro-1" data-toggle="modal" data-target="#'.$id.'" class="offer-img">';
								echo'<div class="col-m">';
								echo'<a href="#">';
										echo'<img src="data:image;base64,'.$row["image"].' " class="img-responsive" alt="" height="200px">';
									echo'</a>';
									echo'<div class="mid-1">';
										echo'<div class="women">';
											echo'<h6><a href="#">'. $row["name"].'<br></a></h6>';
											echo'<h5><a href="#">'. $row["brand"].'<br></a></h5>';
											echo'<h5><a href="#">'. $row["type"].'<br></a></h5>';						
										echo'</div>';
										echo'<div class="mid-2">';
											echo'<p>'. $row["capacity"].'cc   '. $row["milage"].'kmpl    '. $row["bhp"].'bhp  <br>   '. $row["starttype"].'start</p>';
											echo'<p><font size="3px" color="black">On road price,Pune:</font></p><br><br><br>';
											echo'<p ><em class="item_price"><font color="black">Rs.'. $row["price"].'</font></em></p><br>';
											  echo'<div class="block">';
												echo'<div class="starbox small ghosting"> </div>';
											echo'</div>';
											echo'<div class="clearfix"></div>';
										echo'</div>';
											echo'<div class="add add-2">';
										   echo'<button class="btn btn-danger my-cart-btn" data-id="1" data-name="product 1" data-summary="summary 1" data-price="6.00" data-quantity="1" data-image="images/bike17.gif">EMI starts at<br>Rs.'. $row["emi"].'</button>';
										   echo'<a href="registered.html"><button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="17" data-name="Moisturiser" data-summary="summary 17" data-price="0.80" data-quantity="1" data-image="images/bike17.gif">Apply Now</button></a>';
										echo'</div>';
									echo'</div>';
								echo'</div>';
							echo'</div>';
							echo'<div class="modal fade" id="'.$id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">';
				echo'<div class="modal-dialog" role="document">';
					echo'<div class="modal-content modal-info">';
						echo'<div class="modal-header">';
							echo'<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	';					
						echo'</div>';
						echo'<div class="modal-body modal-spa">';
								echo'<div class="col-md-5 span-2">';
											echo'<div class="item">';
												echo'<img src="data:image;base64,'.$row["image"].' " class="img-responsive" alt="">';
											echo'</div>';
								echo'</div>';
								echo'<div class="col-md-7 span-1 ">';
									echo'<h3>'. $row["name"].'<br></h3>';
									echo'<p class="in-para"></p>';
									echo'<div class="price_single">';
									echo'<h5>On road Price,Pune</h5>';
									  echo'<span class="reducedfrom ">Rs.'. $row["price"].'</span>';
									
									 echo'<div class="clearfix"></div>';
									echo'</div>';
									echo'<h4 class="quick">Key Specifications:</h4>';
									echo'<p class="quick_desc">Engine Capacity:'. $row["capacity"].' cc<br>
                                                                            Milleage:'. $row["milage"].'kmpl<br>
                                                                            Maxpower: '. $row["bhp"].' bhp<br>
                                                                        '. $row["starttype"].' Start</p>';
									 echo'<div class="add-to">';
									 		echo'<button class="btn btn-danger my-cart-btn " data-id="1" data-name="product 1" data-summary="summary 1" data-price="6.00" data-quantity="1" data-image="images/bike17.gif">EMI starts at<br>Rs.'. $row["emi"].'</button>';
										   echo'<a href="registered.html"><button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="17" data-name="Moisturiser" data-summary="summary 17" data-price="0.80" data-quantity="1" data-image="images/bike17.gif">Apply Now</button></a>';
										   echo'<a href="calculator.html"><button type="button" class="btn btn-primary custom-button-width"><img src="images/fwdlogo/calculator.png" height="50px" width="50px"><p>EMI Calculator<br><br></p></button></a>';
									
											
                                                                         echo'</div>';
								echo'</div>';
								echo'<div class="clearfix"> </div>';
							echo'</div>';
						echo'</div>';
					echo'</div>';
				echo'</div>';
				$id++;
							   }
} else {
    echo "0 results";
}
							echo'</div>';
							echo'</div>';
							echo'</div>';

$conn->close();
?>

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
						
					</ul>
				</div>
				<div class="payment-w3ls">	
					<img src="http://hitwebcounter.com/counter/counter.php?page=6690792&style=0010&nbdigits=5&type=page&initCount=0" title="" Alt=""   border="0" >

				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<!-- //footer -->

<!-- smooth scrolling -->
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
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="js_bike/bootstrap.js"></script>
<!-- //for bootstrap working -->

  </body>
  </html>



