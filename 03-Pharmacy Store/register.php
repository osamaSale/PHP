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
<html class="no-js">

<?php include("./include/head.html"); ?>


<body>


	<div id="canvas">
		<div id="box_wrapper">

			<?php include("./include/header.html") ?>

			<?php $active = "register";
			include("./include/header_down.html"); ?>

			<section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2>Register</h2>

						</div>
					</div>
				</div>
			</section>
			<section class="ls section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<form action="./php/register.php" method="post" class="shop-register" role="form" enctype="multipart/form-data">
							<div class="col-sm-12">
								<div class="form-group address-field validate-required" id="billing_address_fields">
									<label for="billing_address_1" class="control-label">
										<span class="grey"> Name</span>
										<span class="required">*</span>
									</label>
									<input type="text" class="form-control " name="NAME" required>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group address-field validate-required" id="billing_address_fields">
									<label for="billing_address_1" class="control-label">
										<span class="grey">Email</span>
										<span class="required">*</span>
									</label>
									<input type="email" class="form-control " name="EMAIL" required>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group address-field validate-required" id="billing_address_fields">
									<label for="billing_address_1" class="control-label">
										<span class="grey">Password</span>
										<span class="required">*</span>
									</label>
									<input type="password" class="form-control " name="PASSWORD" required>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group address-field validate-required" id="billing_address_fields">
									<label for="billing_address_1" class="control-label">
										<span class="grey">Phone Number</span>
										<span class="required">*</span>
									</label>
									<input type="text" class="form-control " name="PHONE" required>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group address-field validate-required" id="billing_address_fields">
									<label for="billing_address_1" class="control-label">
										<span class="grey">Genearl</span>
										<span class="required">*</span>
									</label>
									<select type="text" class="form-control " name="GENDER">
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</div>
							</div>
							
							<div class="col-sm-12">
								<div class="form-group address-field validate-required" id="billing_address_fields">
									<label for="billing_address_1" class="control-label">
										<span class="grey">COUNTRY</span>
										<span class="required">*</span>
									</label>
									<input type="text" class="form-control " name="COUNTRY" required>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group address-field validate-required" id="billing_address_fields">
									<label for="billing_address_1" class="control-label">
										<span class="grey">CITY</span>
										<span class="required">*</span>
									</label>
									<input type="text" class="form-control " name="CITY" required>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group address-field validate-required" id="billing_address_fields">
									<label for="billing_address_1" class="control-label">
										<span class="grey">ADDRESS</span>
										<span class="required">*</span>
									</label>
									<input type="text" class="form-control " name="ADDRESS" required>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group address-field validate-required" id="billing_address_fields">
									<label for="billing_address_1" class="control-label">
										<span class="grey">ZIPCODE</span>
										<span class="required">*</span>
									</label>
									<input type="text" class="form-control " name="ZIPCODE" required>
								</div>
							</div>
							<div class="col-sm-12">
								<button type="submit" class="theme_button wide_button color1 topmargin_40">Register</button>
								<button type="reset" class="theme_button wide_button">Clear Form</button>
							</div>
						</form>
					</div>
				</div>
			</section>
			<?php include("./include/footer.html"); ?>
		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->
	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
</body>


</html>