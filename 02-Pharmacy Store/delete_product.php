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
				 <?php $active = "delete_product"; include ("./include/sidebar.html") ?>
    
		

			<section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2>Delete Product</h2>
						</div>
					</div>
				</div>
			</section>
	
	
			<section class="ls section_padding_top_75 section_padding_bottom_75">
				<div class="container">
					<div class="row">
						<form  action="#" method="post">
							<div class="col-sm-12">
								<div class="form-group address-field validate-required" id="billing_address_fields">
									<label for="billing_address_1" class="control-label">
										<span class="grey">Choose Product *</span>
									</label> 	
									<select  type="text" class="form-control " name="PRODUCT">
									<?php
									$query = "SELECT * FROM `products` ORDER BY `ID` DESC";
									$result = $link->query($query);
									while($array = $result->fetch_array() ){
										$name = $array["NAME"];
										$product_id = $array["ID"];
										echo "<option value='$product_id'>$name</option>";
									}
									?>
	                               </select>
								</div>
							</div>
							
							<div class="col-sm-12"> 
								<button type="submit" class="theme_button wide_button color1">Show</button>
								<input type="submit" name="SHOW" value="Show all" class="theme_button wide_button">
							</div>
							<div class="col-sm-12"> 
								
							</div>
						</form>
					</div>
					<hr>
				</div>
			</section>
			
			<?php 
			if(isset($_POST["SHOW"]) ){	
			echo'
			<section class="ls section_padding_top_75 section_padding_bottom_75">
				<div class="container" style="padding-top:0px;">
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
									$query = "SELECT * FROM `products` ORDER BY `ID` DESC";
									$result = $link->query($query);
									while($array = $result->fetch_array() ){
										$name = $array["NAME"];
										$product_id = $array["ID"];
										$price = $array["PRICE"];
										$image = $array["IMAGE"];
										$description = $array["DESCRIPTION"];
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
												<a href="php/delete_product.php?product_id='.$product_id.'" title="Remove this item">
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
			';
			}
			
			else if(isset($_POST["PRODUCT"]) ){	
				$product_id = $_POST["PRODUCT"];
				$query = "SELECT * FROM `products` WHERE `ID`=$product_id";
				$result = $link->query($query);
				$array = $result->fetch_array();
				$name = $array["NAME"];
				$price = $array["PRICE"];
				$image = $array["IMAGE"];
				$description = $array["DESCRIPTION"];
			echo'
			<section class="ls section_padding_top_75 section_padding_bottom_75">
				<div class="container" style="padding-top:0px;">
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
											<td class="product-remove">
												<a href="php/delete_product.php?product_id='.$product_id.'" title="Remove this item">
													<i class="fa fa-trash-o fa-2x"></i>
												</a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
					</div>
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