<?php
session_start();
include("php/connect.php");

if(isset($_SESSION["TYPE"] ) && isset($_SESSION["ID"] ) ){
	if($_SESSION["TYPE"] == 1 ){
		$type = $_SESSION["TYPE"] ;
		$id = $_SESSION["ID"];
	}
	else{
	$id = 0;
	}
}else{
	$id = 0;
}
?>
<!DOCTYPE html>

<html class="no-js">

<?php include ("./include/head.html");?>

<body>

	<div id="canvas">
		<div id="box_wrapper">
			
			
            <?php include ("./include/header.html"); ?>
    
		<?php $active = "about"; include ("./include/header_down.html");?>
			
			<section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2>hello</h2>
						</div>
					</div>
				</div>
			</section>
			<section id="about" class="ls section_padding_top_150 section_padding_bottom_150">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="section_header"> Welcome to Our Site! </h2>
							<p>We are a biopharmaceutical company focused on the discovery, development and commercialization of innovative therapies intended to improve outcomes in patients sufferings</p>
						</div>
					</div>
					<div class="row columns_margin_bottom_20">
						<div class="col-md-6 col-sm-6">
							<div class="teaser hover_icon with_padding big-padding with_border rounded text-center">
								<div class="teaser_icon size_big highlight"> <i class="rt-icon2-user"></i> </div>
								<h4 class="topmargin_20 hover-color2"><a href="#">Pharma Team</a></h4>
								<p class="content-3lines-ellipsis">Company was founded by scientists dedicated to create new therapeutics.</p>
								<p class="topmargin_30 bottommargin_0"> <a href="#" class="theme_button color2 inverse min_width_button">Our Team</a> </p>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="teaser hover_icon with_padding big-padding with_border rounded text-center with_corner_border">
								<div class="teaser_icon size_big highlight"> <i class="rt-icon2-bulb"></i> </div>
								<h4 class="topmargin_20 hover-color2"><a href="#">Pharma Focus</a></h4>
								<p class="content-3lines-ellipsis">We Interrogate the inner life of GPCR signaling to develop newest therapeutics.</p>
								<p class="topmargin_30 bottommargin_0"> <a href="#" class="theme_button color2 min_width_button">Discover Now</a> </p> <span class="bottom_corners"></span> </div>
						</div>
						
					</div>
				</div>
			</section>
			<section id="testimonials" class="ds color parallax page_testimonials section_padding_top_150 section_padding_bottom_150">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h2 class="section_header text-center"> Our clients  </h2>
							<div class="owl-carousel" data-responsive-lg="3" data-nav="false" data-dots="true">
								<blockquote class="with_border with_padding text-center rounded"> <img src="images/faces/01.jpg" alt=""> 
									<div class="item-meta">
										<h5 class="highlight hover-dark-color"><a href="#">Heidi J. Cobb</a></h5>
										<p class="highlight2">Customer</p>
									</div>
								</blockquote>
								<blockquote class="ls with_border with_padding text-center rounded"> <img src="images/faces/02.jpg" alt=""> 
									<div class="item-meta">
										<h5 class="highlight hover-dark-color"><a href="#">Felicia L. Brooks</a></h5>
										<p class="highlight2">Customer</p>
									</div>
								</blockquote>
								<blockquote class="with_border with_padding text-center rounded"> <img src="images/faces/03.jpg" alt=""> 
									<div class="item-meta">
										<h5 class="highlight hover-dark-color"><a href="#">Frank C. McGee</a></h5>
										<p class="highlight2">Customer</p>
									</div>
								</blockquote>
								<blockquote class="with_border with_padding text-center rounded"> <img src="images/faces/01.jpg" alt=""> 
									<div class="item-meta">
										<h5 class="highlight hover-dark-color"><a href="#">Heidi J. Cobb</a></h5>
										<p class="highlight2">Customer</p>
									</div>
								</blockquote>
								<blockquote class="ls with_border with_padding text-center rounded"> <img src="images/faces/02.jpg" alt=""> 
									<div class="item-meta">
										<h5 class="highlight hover-dark-color"><a href="#">Felicia L. Brooks</a></h5>
										<p class="highlight2">Customer</p>
									</div>
								</blockquote>
								<blockquote class="with_border with_padding text-center rounded"> <img src="images/faces/03.jpg" alt=""> 
									<div class="item-meta">
										<h5 class="highlight hover-dark-color"><a href="#">Frank C. McGee</a></h5>
										<p class="highlight2">Customer</p>
									</div>
								</blockquote>
								<blockquote class="with_border with_padding text-center rounded"> <img src="images/faces/01.jpg" alt=""> 
									<div class="item-meta">
										<h5 class="highlight hover-dark-color"><a href="#">Heidi J. Cobb</a></h5>
										<p class="highlight2">Customer</p>
									</div>
								</blockquote>
								<blockquote class="ls with_border with_padding text-center rounded"> <img src="images/faces/02.jpg" alt=""> 
									<div class="item-meta">
										<h5 class="highlight hover-dark-color"><a href="#">Felicia L. Brooks</a></h5>
										<p class="highlight2">Customer</p>
									</div>
								</blockquote>
								<blockquote class="with_border with_padding text-center rounded"> <img src="images/faces/03.jpg" alt=""> 
									<div class="item-meta">
										<h5 class="highlight hover-dark-color"><a href="#">Frank C. McGee</a></h5>
										<p class="highlight2">Customer</p>
									</div>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<?php include ("./include/footer.html");?>
		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->
	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
</body>


</html>