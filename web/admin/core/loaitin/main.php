
<?php 
	if (isset($_GET['ad'])) {
		$loaitin = $_GET['ad'];
	}
	else {
		$loaitin = null;
	}
		if ($loaitin == 'them') {
			echo '<div class="col-md-6">';
				include 'them.php';
			echo '</div>';
			echo '<div class="col-md-6">';
				include 'lietke.php';
			echo '</div>';
			echo '<div class="clearfix"></div>';	
		}
		elseif ($loaitin == 'sua') {
				echo '<div class="col-md-6">';
				include 'sua.php';
			echo '</div>';
			echo '<div class="col-md-6">';
				include 'lietke.php';
			echo '</div>';
			echo '<div class="clearfix"></div>';
			
		}elseif ($loaitin == 'xoa') {
						include 'xoa.php';
						include 'lietke.php';
		}
		else {
					include 'lietke.php';
		}
?>