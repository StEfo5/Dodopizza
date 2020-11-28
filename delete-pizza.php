<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'dodopizza');
	mysqli_query($con, "DELETE FROM basket WHERE id = {$_GET['id']}");
	header("Location: index.php");
 ?>