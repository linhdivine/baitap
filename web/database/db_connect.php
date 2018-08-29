<?php 
// kết nối database
 	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'webcuatoi';
 	$conn = mysqli_connect($servername, $username, $password, $dbname) or die('kết nối thất bại');
 	mysqli_query($conn,'SET NAMES UTF8');
 ?>
