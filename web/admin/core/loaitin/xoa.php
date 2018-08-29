<?php 
			include '/../config.php';
			$id = $_GET['id'];
			settype($id, 'int');
			$sql = "DELETE FROM loaitin WHERE idlt='$id'";
			$conn->query($sql);
			header('location:index.php?admin=loaitin&ad');
 ?>