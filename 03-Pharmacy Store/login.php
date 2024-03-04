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

<?php include("./include/head.html") ?>


<body>


	<div id="canvas">
		<div id="box_wrapper">

			<?php include("./include/header.html") ?>

			<?php $active = "control";
			include("./include/header_down.html"); ?>

			<section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2>Login</h2>

						</div>
					</div>
				</div>
			</section>
			<section class="ls section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<form action="php/login.php" method="post" class="shop-register" role="form">


							<div class="col-sm-12">
								<div class="form-group address-field validate-required" id="billing_address_fields"> <label for="billing_address_1" class="control-label">
										<span class="grey">Choose your user type</span>
										<span class="required">*</span>
									</label> <select type="text" class="form-control " name="TYPE">
										<option value="0">Admin</option>
										<option value="1">User</option>

									</select></div>
							</div>
							<div class="col-sm-12">
								<div class="form-group address-field validate-required" id="billing_address_fields"> <label for="billing_address_1" class="control-label">
										<span class="grey">Enter your email</span>
										<span class="required">*</span>
									</label> <input type="email" class="form-control " name="EMAIL"> </div>
							</div>
							<div class="col-sm-12">
								<div class="form-group address-field validate-required" id="billing_address_fields"> <label for="billing_address_1" class="control-label">
										<span class="grey">Enter your password</span>
										<span class="required">*</span>
									</label> <input type="password" class="form-control " name="PASSWORD"> </div>
							</div>
							<div class="col-sm-12"> <button type="submit" class="theme_button wide_button color1 topmargin_40">Login</button> <button type="reset" class="theme_button wide_button">Clear Form</button> </div>
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