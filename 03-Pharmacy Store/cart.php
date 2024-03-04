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
include("php/connect.php");
?>
<!DOCTYPE html>
<html class="no-js">

<?php include ("./include/head.html") ?>

<body>

<body>
	
	<div id="canvas">
		<div id="box_wrapper">
			     <?php include ("./include/header.html") ?>
				 <?php $active = "cart"; include ("./include/header_down.html");?>
    
		

			<section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2>Your Cart</h2>
						</div>
					</div>
				</div>
			</section>


			<?php 
			
			$total = 0;
			$query = "SELECT * FROM `cart` WHERE `USER_ID`=$id ORDER BY `ID` DESC";
			$result = $link->query($query);
			if ($result->num_rows > 0) {
			echo'
			<section class="ls section_padding_top_75">
				<div class="container" >
					<div class="row" style="background-color: #fff;border: 1px solid #fff;border-radius: 4px;margin-bottom: 30px;padding: 20px; position: relative;">
						<div class="table-responsive">
								<table class="table shop_table cart cart-table">
									<thead>
										<tr>
											<td class="product-info">Product</td>
											<td class="product-price-td">Price</td>
											<td class="product-remove">&nbsp;</td>
										</tr>
									</thead>
									<tbody>
									';
			while($array = $result->fetch_array()){
				$cart_id = $array["ID"];
				$product_id = $array["PRODUCT_ID"];
				$query1 = "SELECT * FROM `products` WHERE `ID`=$product_id";
				$result1 = $link->query($query1);
				$array1 = $result1->fetch_array();
				$name = $array1["NAME"];
				$price = $array1["PRICE"];
				$image = $array1["IMAGE"];
				$description = $array1["DESCRIPTION"];
				$total += $price;
										echo'
										<tr class="cart_item">
											<td class="product-info">
												<div class="media">
													<div class="media-left">
														<a href="shop-product-right.html">
															<img class="media-object cart-product-image" src="'.$image.'" alt="">
														</a>
													</div>
													<div class="media-body">
														<h4 class="media-heading">
															<a href="shop-product-right.html">'.$name.'</a>
														</h4>
														<p class="">'.$description.'</p>
													</div>
												</div>
											</td>
											<td class="product-price">
												<span class="currencies">JOD</span><span class="amount">'.$price.'</span>
											</td>
											<td class="product">
												<a href="php/cart.php?action=delete&user_id='.$id.'&product_id='.$product_id.'" title="Remove this item">
													<i class="fa fa-trash-o fa-2x"></i>
												</a>
											</td>
										</tr>
										';
									}
									echo'
									</tbody>
								</table>
							</div>
					</div>
				</div>
			</section>
			
			<section class="ls  section_padding_bottom_75 columns_padding_25">
				<div class="container">
					<div class="row">
						<div class="col-sm-7 col-md-8 col-lg-9 col-sm-push-2 col-md-push-2 col-lg-push-2">
							<div class="cart-collaterals with_padding with_border">
								<div class="cart_totals">
									<h4>Cart Total</h4>
									<table class="table">
										<tbody>
											<tr class="order-total">
												<td class="grey">Order Total</td>
												<td><strong class="grey"><span class="currencies">JOD</span>
													<span class="amount"><?php echo $total; ?></span> </strong> 
												</td>
											</tr>
										</tbody>
									</table>
									<form  action="php/cart.php?action=order" method="post">
										<input value="'.$id.'"  name="ID" class="form-control" type="hidden" >
										<div class="cart-buttons"> 
											<input type="submit" value="Order now!" class="theme_button color2">
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			';
			}else {
				echo '
				<section class="ls section_padding_top_100 section_padding_bottom_100">
					<div class="container" style="text-align:center;">
						<h4>Your Cart is Empty</h4>
					</div>
				</section>
				';
			}
			?>
			
			
			
						
			<?php include ("./include/footer.html");?>
		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->
	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>

</body>


</html>