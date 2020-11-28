<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'dodopizza');
	mysqli_query($con, "INSERT INTO basket (name, img, price) VALUES ('{$_GET['name']}', '{$_GET['img']}', '{$_GET['price']}')");
	header("Location: index.php");
 ?>