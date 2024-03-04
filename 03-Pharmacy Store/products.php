<?php
session_start();
if(!isset($_SESSION["TYPE"] ) && !isset($_SESSION["ID"] ) ){
	header("Location: login.php");
}else if($_SESSION["TYPE"] == 1 ){
	$type = $_SESSION["TYPE"] ;
	$id = $_SESSION["ID"]; 
}else{
	header("Location: login.php");
}
include("./php/connect.php");
?>
<!DOCTYPE html>
<html class="no-js">

<?php include ("./include/head.html") ?>

<body>

<body>
	
	<div id="canvas">
		<div id="box_wrapper">
			     <?php include ("./include/header.html") ?>
				 <?php $active = "products"; include ("./include/header_down.html") ?>
    
		

			<section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2>Products</h2>
						</div>
					</div>
				</div>
			</section>
	
			<section class="ls section_padding_top_150 section_padding_bottom_130">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="columns-4">
								<ul id="products" class="products list-unstyled">
							<?php 
							$query = "SELECT * FROM `products`  ORDER BY `ID` DESC";
							$result = $link->query($query);
							while($array = $result->fetch_array()){
								$product_id = $array["ID"];
								$name = $array["NAME"];
								$price = $array["PRICE"];
								$image = $array["IMAGE"];
								$description = $array["DESCRIPTION"];

							echo'
								<form  action="php/cart.php?action=add" method="post">
									<input value="'.$id.'"  name="ID" class="form-control" type="hidden" >
									<input value="'.$product_id.'"  name="PRODUCT_ID" class="form-control" type="hidden" >
									
									<li class="product type-product" style="height:400px;width:292px;">
										<div class="vertical-item content-padding text-center with_border">
											<div class="item-media bottommargin_30">
												<img src="'.$image.'" alt="" style="width:150px;height:150px;margin-top: 10px;" />
											</div>
											<div class="item-content">
												<h4 class="hover-color2 bottommargin_0">
													'.$name.'
												</h4>
												
												<p class="price semibold"> 
													<ins>
														<span class="amount">$'.$price.'</span>
													</ins> 
												</p>
												
												
												<p>'.$description.' </p>
												<p class="topmargin_30"> 
													<input type="submit" value="Add to Cart" class="theme_button color2 inverse min_width_button">
												</p>
											</div>
										</div>
									</li>
								</form>	
									
							';
							}
							?>
								</ul>
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