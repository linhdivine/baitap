<?php 
		$host = 'localhost';
		$user = 'root';
		$pass = '';
		$db_name = 'webcuatoi';
		$conn = new mysqli($host,$user,$pass,$db_name) OR die('không kết nối được'. $conn->connect_error);
		$conn->query('set names utf8');
		
 ?>