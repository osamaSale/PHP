<?php
session_start();
include("php/connect.php");

if (isset($_SESSION["TYPE"]) && isset($_SESSION["ID"])) {
	if ($_SESSION["TYPE"] == 1) {
		$type = $_SESSION["TYPE"];
		$id = $_SESSION["ID"];
	} else {
		$id = 0;
	}
} else {
	$id = 0;
}
?>
<!DOCTYPE html>

<?php include("./include/head.html") ?>

<body>

	<div id="canvas">
		<div id="box_wrapper">


			<?php include("./include/header.html") ?>

			<?php $active = "home";
			include("./include/header_down.html"); ?>

			<section class="intro_section page_mainslider ds color">
				<div class="flexslider" data-dots="true" data-nav="false">
					<ul class="slides">

						<li> <img src="images/slide01.jpg" alt="">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer with_corner_border with_padding huge-padding" data-animation="slideExpandUp">
													<h5 class="thin"> Welcome to our website </h5>
													<h2 class="highlight"> We are here to answer all your <br><br>
														questions regarding medicines</h2>
													<a href="#" class="theme_button color2 inverse margin_0">Ask Now</a>
													<span class="bottom_corners"></span>
												</div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>

						<li> <img src="images/slide02.jpg" alt="">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer with_corner_border with_padding huge-padding" data-animation="slideExpandUp">
													<h5 class="thin"> We will Help You </h5>
													<h2 class="highlight"> To Live Healthy Life </h2>
													<a href="#" class="theme_button color2 inverse margin_0">Discover Now</a>
													<span class="bottom_corners"></span>
												</div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>

						<li> <img src="images/slide03.jpg" alt="">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer with_corner_border with_padding huge-padding" data-animation="slideExpandUp">
													<h5 class="thin"> Our mission </h5>
													<h2 class="highlight"> is to promote optimal outcomes <br> <br>for persons enduring any pain while </h2>
													<p> delivering industry-leading patient care with integrity, compassion, and excellence.</p>
													<a href="#" class="theme_button color2 inverse margin_0">Discover Now</a>
													<span class="bottom_corners"></span>
												</div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>

					</ul>
				</div>
				<!-- eof flexslider -->
			</section>


			<section id="products" class="ds color parallax page_gallery section_padding_top_100 section_padding_bottom_150 columns_padding_25">
				<div class="container">
					<div class="row display_table_md">
						<div class="col-md-6 col-md-push-6 display_table_cell_md"> <img src="images/gallery/01.jpg" alt="" class="rounded"> </div>
						<div class="col-md-6 col-md-pull-6 display_table_cell_md">
							<h2 class="section_header">See Our Products</h2>
							<p class="highlight bottommargin_20"><strong>We have several product candidates in development that we believe have been significantly de-risked.</strong></p>

							<p class="topmargin_30">
								<a href="#" class="theme_button color2 inverse">See All Products</a>
							</p>
						</div>
					</div>
				</div>
			</section>

			<section class="cs gradient section_padding_top_65 section_padding_bottom_50 columns_margin_bottom_20">
				<div class="container">
					<div class="row">
						<div class="col-md-20 col-sm-4 col-xs-6 col-xxs-12">
							<div class="teaser text-center">
								<h3 class="counter" data-from="0" data-to="20" data-speed="2100">0</h3>
								<p>Years Experience</p>
							</div>
						</div>
						<div class="col-md-20 col-sm-4 col-xs-6 col-xxs-12">
							<div class="teaser text-center">
								<h3 class="counter" data-from="0" data-to="893" data-speed="2100">0</h3>
								<p>Medicament Invented</p>
							</div>
						</div>
						<div class="col-md-20 col-sm-4 col-xs-6 col-xxs-12">
							<div class="teaser text-center">
								<h3 class="counter" data-from="0" data-to="75" data-speed="2100">0</h3>
								<p>Awards Winned</p>
							</div>
						</div>
						<div class="col-md-20 col-sm-6 col-xs-6 col-xxs-12">
							<div class="teaser text-center">
								<h3 class="counter-wrap"> <span class="counter" data-from="0" data-to="673" data-speed="2100"></span> <span class="counter-add">k</span> </h3>
								<p>Happy Clients</p>
							</div>
						</div>
						<div class="col-md-20 col-sm-6 col-xs-12">
							<div class="teaser text-center">
								<h3 class="counter" data-from="0" data-to="751" data-speed="2100">0</h3>
								<p>Pharmacies Partners</p>
							</div>
						</div>
					</div>
				</div>
			</section>


			<!--footer -->
			<?php include("./include/footer.html"); ?>



		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->
	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
</body>


</html>