<?php
session_start();
if(!isset($_SESSION["TYPE"] ) && !isset($_SESSION["ID"] ) ){
	header("Location: login.php");
}else if($_SESSION["TYPE"] == 0 ){
	$type = $_SESSION["TYPE"] ;
	$id = $_SESSION["ID"]; 
}else{
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html class="no-js">

<?php include ("./include/head.html") ?>

<body>

<body>
	
	<div id="canvas">
		<div id="box_wrapper">
			     <?php include ("./include/header.html") ?>
				 <?php $active = "admin"; include ("./include/sidebar.html") ?>
    
		

			<section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2>Control Panel</h2>
							<ol class="breadcrumb highlightlinks">
								<li> <a href="#">
								Admin
						</a> </li><br>
							<a href="php/logout.php"> <button>Logout</button></a>	
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