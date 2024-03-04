<?php
session_start();
if (!isset($_SESSION["TYPE"]) && !isset($_SESSION["ID"])) {
	header("Location: login.php");
} else if ($_SESSION["TYPE"] == 0) {
	$type = $_SESSION["TYPE"];
	$id = $_SESSION["ID"];
} else {
	header("Location: login.php");
}
include("php/connect.php");
?>
<!DOCTYPE html>
<html class="no-js">

<?php include("./include/head.html") ?>

<body>

	<body>

		<div id="canvas">
			<div id="box_wrapper">
				<?php include("./include/header.html") ?>

				<?php $active = "email";
				include("./include/sidebar.html") ?>


				<section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 text-center">
								<h2>Control Panel</h2>
								<ol class="breadcrumb highlightlinks">
									<li> <a href="#">
											Admin
										</a> </li><br>
									<button>Email</button>
							</div>
							<table id="myTable" border="0" width="100">
								<thead>
									<tr>


										<th>Name </th>
										<th>Email </th>
										<th>Message </th>
										<th>Subject </th>
										<th>Delete</th>


									</tr>
								</thead>
								<tbody>
									<?php
									include("php/connect.php");

									$query = "SELECT * FROM `message`";
									$result = $link->query($query);
									while ($array = $result->fetch_array()) {
										$email_id = $array["ID"];
										$name = $array["NAME"];
										$email = $array["EMAIL"];
										$subject = $array["SUBJECT"];
										$message = $array["MESSAGE"];

										echo " <tr>
												<td>$name</td>
													<td>$email</td>
														 <td>	$message</td>
												<td>$subject</td>
												 <td><a href='php/delete_email.php?id=$email_id'>
								      <i class='fa fa-trash fa-2x'></i></a></td>	
											
												
											</tr>";
									}
									?>



								</tbody>
							</table>
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