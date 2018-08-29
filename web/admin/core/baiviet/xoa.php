<?php 
			include '/../config.php';
			$id = $_GET['id'];
			settype($id, 'int');
			$sql = "DELETE FROM chitiettin WHERE id='$id'";
			$conn->query($sql);
			header('location:index.php?admin=baiviet&node');
 ?>