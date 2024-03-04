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
                <?php $active = "add_product"; include ("./include/sidebar.html") ?>



                <section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h2>Add Product</h2>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="ls section_padding_top_100 section_padding_bottom_100">
                    <div class="container">
                        <div class="row">
                            <form action="php/add_product.php" method="post" enctype="multipart/form-data">

                                <div class="col-sm-12">
                                    <div class="form-group address-field validate-required" id="billing_address_fields">
                                        <label for="billing_address_1" class="control-label">
                                            <span class="grey">Enter Product Name</span>
                                            <span class="required">*</span>
                                        </label>
                                        <input type="text" class="form-control " name="NAME" required>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group address-field validate-required" id="billing_address_fields">
                                        <label for="billing_address_1" class="control-label">
                                            <span class="grey">Enter Product Price</span>
                                            <span class="required">*</span>
                                        </label>
                                        <input type="number" class="form-control " name="PRICE" min="1" step="0.10"
                                            required>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group address-field validate-required" id="billing_address_fields">
                                        <label for="billing_address_1" class="control-label">
                                            <span class="grey">Upload Product Image</span>
                                            <span class="required">*</span>
                                        </label>
                                        <input name="FILE" type="file" class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group address-field validate-" id="billing_address_fields">
                                        <label for="billing_address_1" class="control-label">
                                            <span class="grey">Enter Product Description</span>
                                            <span class="required">*</span>
                                        </label>
                                        <textarea cols="30" rows="6" name="DESCRIPTION" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <button type="submit"
                                        class="theme_button wide_button color1 topmargin_40">Add</button>
                                    <button type="reset" class="theme_button wide_button">Clear Form</button>
                                </div>
                            </form>

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