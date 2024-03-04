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
				 <?php $active = "modify_product"; include ("./include/sidebar.html") ?>
    
		

			<section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2>Modify Product</h2>
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
							</div>
						</form>
					</div>
					<hr>
				</div>
			</section>


			<?php 
			if(isset($_POST["PRODUCT"]) ){	
				$product_id = $_POST["PRODUCT"];
				$query = "SELECT * FROM `products` WHERE `ID`=$product_id";
				$result = $link->query($query);
				$array = $result->fetch_array();
				$name = $array["NAME"];
				$price = $array["PRICE"];
				$image = $array["IMAGE"];
				$description = $array["DESCRIPTION"];
			echo'
			<section class="ls section_padding_bottom_100" style="padding-top:0px;">
				<div class="container">
					<div class="row">
						<form  action="php/modify_product.php" method="post"  enctype="multipart/form-data">
						
							<input type="hidden" class="form-control " name="PRODUCT_ID" value="'.$product_id.'" >
							
							<div class="col-sm-12">
								<div class="form-group address-field validate-required" id="billing_address_fields">
									<label for="billing_address_1" class="control-label">
										<span class="grey">Edit Product Name</span>
										<span class="required">*</span>
									</label>
									<input type="text" class="form-control " name="NAME" value="'.$name.'" required>
								</div>
							</div>
							
							<div class="col-sm-12">
								<div class="form-group address-field validate-required" id="billing_address_fields">
									<label for="billing_address_1" class="control-label">
										<span class="grey">Edit Product Price</span>
										<span class="required">*</span>
									</label>
									<input type="number" class="form-control " name="PRICE" value="'.$price.'" min="1" step="0.10" required>
								</div>
							</div>
							
							<div class="col-sm-12">
								<div class="form-group address-field validate-required" id="billing_address_fields">
									<label for="billing_address_1" class="control-label">
										<span class="grey">Edit Product Image</span>
										<span class="required">*</span>
									</label>
									<input  name="FILE" type="file" class="form-control"  > 
									<img src="'.$image.'" style="width:100px;height:100px;" alt="" >
								</div>
							</div>
							
							<div class="col-sm-12">
								<div class="form-group address-field validate-" id="billing_address_fields">
									<label for="billing_address_1" class="control-label">
										<span class="grey">Edit Product Description</span>
										<span class="required">*</span>
									</label>
									<textarea cols="30" rows="6" name="DESCRIPTION" class="form-control">'.$description.'</textarea>
								</div>
							</div>
							
							<div class="col-sm-12"> 
								<button type="submit" class="theme_button wide_button color1 topmargin_40">Edit</button>
								<button type="reset" class="theme_button wide_button">Clear Form</button>
							</div>
						</form>
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