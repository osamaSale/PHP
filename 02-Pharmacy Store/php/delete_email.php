<?php
include("connect.php");
$id = $_GET["id"];
$query = "DELETE FROM `message` WHERE `ID`=$id";
$link->query($query);


header("Location: ../email.php");
?>