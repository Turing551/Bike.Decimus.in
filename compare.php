<?php
$dbhost_name = "localhost"; // Your host name 
$database = "decimus";       // Your database name
$username = "root";            // Your login userid 
$password = "";            // Your password 
try {
$dbo = new PDO('mysql:host='.$dbhost_name.';dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Decimus Financial | Home </title>
<!-- for-mobile-apps -->
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
<link href="css/chinnu.css" rel="stylesheet">


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
<style>
            /* CodePen demo */
body {
  background: white;
  color: #fff;
  text-align: center;
  font-family: Arial, Helvetica;
}

.big {
  font-size: 1.2em;
}

.small {
  font-size: .7em;
}

.square {
  width: .7em;
  height: .7em;
  margin: .5em;
  display: inline-block;
}

/* Custom dropdown */
.custom-dropdown {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  margin: 10px; /* demo only */
}

.custom-dropdown select {
  background-color: #6296ea;
  color: white;
  font-size: inherit;
  padding: .5em;
  padding-right: 2.5em;	
  border: 0;
  margin: 0;
  border-radius: 3px;
  text-indent: 0.01px;
  text-overflow: '';
  -webkit-appearance: button; /* hide default arrow in chrome OSX */
}

.custom-dropdown::before,
.custom-dropdown::after {
  content: "";
  position: absolute;
  pointer-events: none;
}

.custom-dropdown::after { /*  Custom dropdown arrow */
  content: "\25BC";
  height: 1em;
  font-size: .625em;
  line-height: 1;
  right: 1.2em;
  top: 50%;
  margin-top: -.5em;
}

.custom-dropdown::before { /*  Custom dropdown arrow cover */
  width: 2em;
  right: 0;
  top: 0;
  bottom: 0;
  border-radius: 0 3px 3px 0;
}

.custom-dropdown select[disabled] {
  color: rgba(0,0,0,.3);
}

.custom-dropdown select[disabled]::after {
  color: rgba(0,0,0,.1);
}

.custom-dropdown::before {
  background-color: rgba(0,0,0,.15);
}

.custom-dropdown::after {
  color: rgba(0,0,0,.4);
}
            </style>
            
            
                    <style>
            
h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:auto;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 20px;
  color: black;
  text-transform: uppercase;
  font-weight:bold;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 18px;
  color: black;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: white;
  background: linear-gradient(to right, white, white);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}
 

            </style>
            
            
            <script>
                /* JS for demo only */
var colors = ['1abc9c', '2c3e50', '2980b9', '7f8c8d', 'f1c40f', 'd35400', '27ae60'];

colors.each(function (color) {
  $$('.color-picker')[0].insert(
    '<div class="square" style="background: #' + color + '"></div>'
  );
});

$$('.color-picker')[0].on('click', '.square', function(event, square) {
  background = square.getStyle('background');
  $$('.custom-dropdown select').each(function (dropdown) {
    dropdown.setStyle({'background' : background});
  });
});

/*
 * Original version at
 * http://red-team-design.com/making-html-dropdowns-not-suck
 */ 
            </script>
            <SCRIPT language=JavaScript>
function reload(form)
{
var val=form.cat.options[form.cat.options.selectedIndex].value;
self.location='compare.php?cat=' + val ;
}
function reload2(form)
{
var val=form.cat.options[form.cat.options.selectedIndex].value;
var val3=form.subcat.options[form.subcat.options.selectedIndex].value;
var val2=form.cat2.options[form.cat2.options.selectedIndex].value;
self.location='compare.php?cat='+val+'&cat2=' + val2 +'&cat3='+val3;
}
function reload3(form)
{
var val=form.cat.options[form.cat.options.selectedIndex].value;
var val3=form.subcat.options[form.subcat.options.selectedIndex].value;
var val2=form.cat2.options[form.cat2.options.selectedIndex].value;
var val4=form.subcat2.options[form.subcat2.options.selectedIndex].value;
self.location='compare.php?cat='+val+'&cat2=' + val2 +'&cat3='+val3+'&cat4='+val4;
}

</script>



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
	<div class="navigation-agileits" id="header">
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
														
														<a href="#"><li>2-Wheeler Financing</li></a>
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
                                                                        <li style:color="red"><a href="registered.php">APPLY NOW</a></li>
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
	
        


<br/><br/>
<h1><font color="black">COMPARE BIKES</font></h1>
<br>
<?php
	@$cat=$_GET['cat'];
	@$cat2=$_GET['cat2'];
	@$cat3=$_GET['cat3'];
	@$cat4=$_GET['cat4'];
	$quer2="SELECT DISTINCT brand FROM bikes order by brand";
	$quer22="SELECT DISTINCT brand FROM bikes order by brand";
	if(isset($cat) and strlen($cat) > 0){
	$quer="SELECT DISTINCT name FROM bikes where brand='".$cat."' order by name"; 
	}else{$quer="SELECT DISTINCT name FROM bikes order by name"; } 
	if(isset($cat2) and strlen($cat2) > 0){
	$quer12="SELECT DISTINCT name FROM bikes where brand='".$cat2."' order by name"; 
	}else{$quer12="SELECT DISTINCT name FROM bikes order by name"; }
	echo "<form method=post name=f1 action=''>
		<span class='custom-dropdown big'>
		    <select name='cat' onchange=\"reload(this.form)\"><option value=''>Select Brand</option>";
		    foreach ($dbo->query($quer2) as $noticia2) {
			if($noticia2['brand']==@$cat){echo "<option selected value='$noticia2[brand]'>$noticia2[brand]</option>"."<BR>";}
			else{echo  "<option value='$noticia2[brand]'>$noticia2[brand]</option>";}
			}
			echo "</select>
		</span>

		<span class='custom-dropdown big'>";
		    echo "<select name='cat2' onchange=\"reload2(this.form)\"><option value=''>Select Brand</option>";
			foreach ($dbo->query($quer22) as $noticia22) {
			if($noticia22['brand']==@$cat2){echo "<option selected value='$noticia22[brand]'>$noticia22[brand]</option>"."<BR>";}
			else{echo  "<option value='$noticia22[brand]'>$noticia22[brand]</option>";}
			}
			echo "</select>
		</span>

		<br/>

		<span class='custom-dropdown big'>";
		    echo "<select name='subcat'><option value=''>Select one</option>";
			foreach ($dbo->query($quer) as $noticia) {
				if($noticia['name']==@$cat3){echo "<option selected value='$noticia[name]'>$noticia[name]</option>"."<BR>";}
			else{echo  "<option value='$noticia[name]'>$noticia[name]</option>";}
			}
			echo "</select>
		</span>

		<span class='custom-dropdown big'>";
		    echo "<select name='subcat2' onchange=\"reload3(this.form)\"><option value=''>Select one</option>";
			foreach ($dbo->query($quer12) as $noticia) {
			if($noticia['name']==@$cat4){echo "<option selected value='$noticia[name]'>$noticia[name]</option>"."<BR>";}
			else{echo  "<option value='$noticia[name]'>$noticia[name]</option>";}
			}
			echo "</select>
		</span>
     <br><br>
     <input type='submit' class='btn btn-danger' style='margin-left:11%;' value='COMPARE BIKES' name='submit'>
     
     <a href='compare.php'><button type='button' class='btn btn-danger' style='float:right;margin-right:10%;'>Reset</button></a>

     <style>select, option { width: 300px; } table{overflow-y:hidden;}</style>
     </form><br><br><br>";?>


     <?php
     if(isset($_POST['submit'])){
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
		//echo "hello";
	  //-------------------------------------table------------------------------------------//
	    $sql1="SELECT * FROM bikes WHERE name='".$_POST["subcat"]."'";
	    $sql2="SELECT * FROM bikes WHERE name='".$_POST["subcat2"]."'";
	    $result1 = $conn->query($sql1);
	    $result2 = $conn->query($sql2);

	    if ($result1->num_rows > 0 and $result2->num_rows > 0){
	    while($row1 = $result1->fetch_assoc() and $row2 = $result2->fetch_assoc())
	    {
	    	echo "
		<section>
  <h1>Comparing Selected Bikes</h1>
  <div class='tbl-header'>
    <table cellpadding='0' cellspacing='0' border='0'>
      <thead>
        <tr>
          <th>SPECIFICATIONS</th>
          <th>Bike 1</th>
          <th>Bike 2</th>       
        </tr>
      </thead>
    </table>
  </div>
  <div class='tbl-content'>
    <table cellpadding='0' cellspacing='0' border='0'>
      <tbody>
        <tr>
          <td>Image</td>
          <td>"; echo '<img src="data:image;base64,'.$row1['image'].'" height="150px" width="250px">'; echo "</td>
          <td>"; echo '<img src="data:image;base64,'.$row2['image'].'" height="150px" width="250px">'; echo "</td>        
        </tr>
        <tr>
          <td>Brand</td>
          <td>";echo $row1['brand'];echo "</td>
          <td>";echo $row2['brand'];echo "</td>        
        </tr>
        <tr>
          <td>Nmae</td>
          <td>";echo $row1['name'];echo "</td>
          <td>";echo $row2['name'];echo "</td>        
        </tr>
        <tr>
          <td>Price</td>
          <td><font size='5px'>Rs.";echo $row1['price'];echo "</font></td>
          <td><font size='5px'>Rs.";echo $row2['price'];echo "</font></</td>         
        </tr>
        <tr>
          <td>EMI</td>
          <td><font size='4px'>Rs.";echo $row1['emi'];echo "</font></</td>
          <td><font size='4px'>Rs.";echo $row2['emi'];echo "</font></</td>       
        </tr>
        <tr>
          <td>Type</td>
          <td>";echo $row1['type'];echo "</font></</td>
          <td><";echo $row2['type'];echo "</font></</td>       
        </tr>
        <tr>
          <td>Capacity</td>
          <td>";echo $row1['capacity'];echo "</font></</td>
          <td>";echo $row2['capacity'];echo "</font></</td>       
        </tr>
        <tr>
          <td>Milage</td>
          <td>";echo $row1['milage'];echo "</font></</td>
          <td>";echo $row2['milage'];echo "</font></</td>       
        </tr>
        <tr>
          <td>BHP</td>
          <td>";echo $row1['bhp'];echo "</font></</td>
          <td>";echo $row2['bhp'];echo "</font></</td>       
        </tr>
        <tr>
          <td>RPM</td>
          <td>";echo $row1['rpm'];echo "</font></</td>
          <td>";echo $row2['rpm'];echo "</font></</td>       
        </tr>
        <tr>
          <td>Start Type</td>
          <td>";echo $row1['starttype'];echo "</font></</td>
          <td>";echo $row2['starttype'];echo "</font></</td>       
        </tr>
        <tr>
          <td>Key Features</td>
          <td>";echo nl2br($row1['keyfea']);echo "</font></</td>
          <td>";echo nl2br($row2['keyfea']);echo "</font></</td>       
        </tr>
        <tr>
          <td>Number of Gears</td>
          <td>";echo $row1['nog'];echo "</font></</td>
          <td>";echo $row2['nog'];echo "</font></</td>       
        </tr>
        <tr>
          <td>Front Break Type</td>
          <td>";echo $row1['fbt'];echo "</font></</td>
          <td>";echo $row2['fbt'];echo "</font></</td>       
        </tr>
        <tr>
          <td>Rear Break Type</td>
          <td>";echo $row1['rbt'];echo "</font></</td>
          <td>";echo $row2['rbt'];echo "</font></</td>       
        </tr>
        <tr>
          <td>Speedometer</td>
          <td>";echo $row1['sm'];echo "</font></</td>
          <td>";echo $row2['sm'];echo "</font></</td>       
        </tr>
        <tr>
          <td>Fuel Warning Indicator</td>
          <td>";echo $row1['fwi'];echo "</font></</td>
          <td>";echo $row2['fwi'];echo "</font></</td>       
        </tr>
        <tr>
          <td>Gear Indicator</td>
          <td>";echo $row1['gi'];echo "</font></</td>
          <td>";echo $row2['gi'];echo "</font></</td>       
        </tr>
      </tbody>
    </table>
  </div>
</section>	
 ";
	    }
		}else {
	    echo "0 results";
		}
		$row1 = $result1->fetch_assoc();
		$row2 = $result2->fetch_assoc();
		}

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
