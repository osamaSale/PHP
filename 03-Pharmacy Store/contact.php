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

<?php include ("./include/head.html") ?>

<body>

	<div id="canvas">
		<div id="box_wrapper">
			
			
            <?php include ("./include/header.html") ?>
    
		<?php $active = "contact"; include ("./include/header_down.html");?>
			
			
			<section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2> hi</h2>
							
						</div>
					</div>
				</div>
			</section>
			
			<section class="ls section_padding_top_75 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 to_animate" data-animation="pullDown">
							<div class="teaser text-center">
								<div class="teaser_icon highlight size_small"> <i class="rt-icon2-phone5"></i> </div>
								<p> <span class="grey">Phone:</span> (+962) 78 88 88888
								 </p>
							</div>
						</div>
						<div class="col-sm-4 to_animate" data-animation="pullDown">
							<div class="teaser text-center">
								<div class="teaser_icon highlight size_small"> <i class="rt-icon2-location2"></i> </div>
								<p> Amman, Mecca Street </p>
							</div>
						</div>
						<div class="col-sm-4 to_animate" data-animation="pullDown">
							<div class="teaser text-center">
								<div class="teaser_icon highlight size_small"> <i class="rt-icon2-world"></i> </div>
								<p>info@pharmacy-store.com</p>
							</div>
						</div>
					</div>
					<div class="row topmargin_60">
						<div style="margin:5px; paddihg:20px; background:#ec5c42;"  class="col-sm-12 to_animate">
							<form action="php/add_message.php" method="post"class="  main_color2 parallax columns_padding_5"  >
								<div class="row">
									<div class="col-sm-6">
										<p class="form-group">  <i class="fa fa-user grey" aria-hidden="true"></i> <input type="text" aria-required="true" size="30" value="" name="NAME" id="name" class="form-control" placeholder="Full Name"></p>

										<p class="form-group">  <i class="fa fa-envelope grey" aria-hidden="true"></i> <input type="email" aria-required="true" size="30" value="" name="EMAIL" id="email" class="form-control" placeholder="Email Address">											</p>
										<p class="form-group"> <i class="fa fa-flag grey" aria-hidden="true"></i> <input type="text" aria-required="true" size="30" value="" name="SUBJECT" id="subject" class="form-control" placeholder="Subject">											</p>
									</div>
									<div class="col-sm-6">
										<p class="contact-form-message form-group"> <i class="fa fa-comment grey" aria-hidden="true"></i> <textarea aria-required="true" rows="3" cols="45" name="MESSAGE" id="message" class="form-control" placeholder="Message"></textarea> </p>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<input type="submit" value="Send massage"> 
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
				<!--footer -->
			
			<?php include ("./include/footer.html");?>
			
			
		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->
	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
</body>


</html>