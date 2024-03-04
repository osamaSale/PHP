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
				 <?php $active = "user"; include ("./include/header_down.html") ?>
			<section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2>User Account</h2>
						</div>
					</div>
				</div>
			</section>
	
			<?php 
				$query = "SELECT * FROM `user` WHERE `ID`=$id";
				$result = $link->query($query);
				$array = $result->fetch_array();
				$name = $array["NAME"];
				$email = $array["EMAIL"];
				$password = $array["PASSWORD"];
				$phone = $array["PHONE"];
				$gender = $array["GENDER"];
				$gender_option = ['Male','Female'];
				$country = $array["COUNTRY"];
				$city = $array["CITY"];
				$address = $array["ADDRESS"];
				$zipcode = $array["ZIPCODE"];
			echo'
			<section class="ls section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<h4>Keep your information up-to-date!</h4>
					<div class="row">
						<form  action="php/user.php" method="post" class="shop-register" role="form">
						
							<input value="'.$id.'"  name="ID" class="form-control" type="hidden" >
							
							<div class="col-sm-12">
								<div class="form-group address-field validate-required" id="billing_address_fields">
									<label for="billing_address_1" class="control-label">
										<span class="grey">Your Name</span>
										<span class="required">*</span>
									</label>
									<input type="text" class="form-control " name="NAME" value="'.$name.'" required>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group address-field validate-required" id="billing_address_fields">
									<label for="billing_address_1" class="control-label">
										<span class="grey">Email</span>
										<span class="required">*</span>
									</label>
									<input type="email" class="form-control " name="EMAIL" value="'.$email.'" required>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group address-field validate-required" id="billing_address_fields">
									<label for="billing_address_1" class="control-label">
										<span class="grey">Password</span>
										<span class="required">*</span>
									</label>
									<input type="password" class="form-control " name="PASSWORD" value="'.$password.'" required>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group address-field validate-required" id="billing_address_fields">
									<label for="billing_address_1" class="control-label">
										<span class="grey">Phone Number</span>
										<span class="required">*</span>
									</label>
									<input type="text" class="form-control " name="PHONE" required value="'.$phone.'">
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group address-field validate-required" id="billing_address_fields">
									<label for="billing_address_1" class="control-label">
										<span class="grey">Gender</span>
										<span class="required">*</span>
									</label>
									<select  type="text" class="form-control " name="GENDER">
										';
										foreach ($gender_option as $option) {
											echo "<option value='$option'";
											if ($gender == $option) {
												echo 'selected';
											}
											echo ">$option</option>"; 
										}
										echo'
	                               </select>
								  </div>
							</div>
							<div class="col-sm-12">
								<div class="form-group address-field validate-required" id="billing_address_fields">
									<label for="billing_address_1" class="control-label">
										<span class="grey">Country</span>
										<span class="required">*</span>
									</label>
									<input type="text" class="form-control " name="COUNTRY" value="'.$country.'" required>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group address-field validate-required" id="billing_address_fields">
									<label for="billing_address_1" class="control-label">
										<span class="grey">City</span>
										<span class="required">*</span>
									</label>
									<input type="text" class="form-control " name="CITY" value="'.$city.'" required>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group address-field validate-required" id="billing_address_fields">
									<label for="billing_address_1" class="control-label">
										<span class="grey">Address</span>
										<span class="required">*</span>
									</label>
									<input type="text" class="form-control " name="ADDRESS" value="'.$address.'"  required>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group address-field validate-required" id="billing_address_fields">
									<label for="billing_address_1" class="control-label">
										<span class="grey">Zip Code</span>
										<span class="required">*</span>
									</label>
									<input type="text" class="form-control " name="ZIPCODE" value="'.$zipcode.'" required>
								</div>
							</div>
							<div class="col-sm-12">
								<button type="submit" class="theme_button wide_button color1 topmargin_40">Update</button>
							</div>
						</form>
					</div>
				</div>
			</section>
			';
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