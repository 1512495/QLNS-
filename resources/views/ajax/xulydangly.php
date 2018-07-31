<?php 
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"qlns");
	mysqli_query($con, "SET NAMES 'utf8'");

	$em = $_GET["em"];
	$qr="SELECT * FROM users WHERE email = '$em'";

	$kq = mysqli_query($con,$qr);
	$dong = mysqli_num_rows($kq);
	echo $dong;
 ?>