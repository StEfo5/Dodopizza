<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'dodopizza');
	mysqli_query($con, "DELETE FROM basket");
	header("Location: index.php");
 ?>