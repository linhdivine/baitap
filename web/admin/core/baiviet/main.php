<?php 
	if (isset($_GET['node'])) {
		$node = $_GET['node'];
	}
	else {
		$node = '';
	}
	if ($node == 'them') {
			include 'them.php';
	}
	elseif ($node == 'sua') {
		include 'sua.php';
	}
	elseif ($node == 'xem-chi-tiet') {
		include 'node.php';
	}
	elseif ($node == 'xoa') {
		include 'xoa.php';
		include 'lietke.php';
	}
	else {
		include 'lietke.php';
	}

 ?>
