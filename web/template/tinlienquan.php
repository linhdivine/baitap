<?php 

	 	$sql = "SELECT * FROM chitiettin WHERE id <> $baiviet ORDER BY RAND()  LIMIT 0,5";
	 	$result = mysqli_query($conn,$sql);
	 	echo '<div class="tinlienquan">';
	 	echo '<h4> Tin liên quan :	</h4 <br>';
	 	while ($ros = mysqli_fetch_assoc($result)) {
	 		echo '<a style="display:block" href="index.php?baiviet='.$ros['id'].'">'. $ros['tieude'] .'</a>';	 			
 		}
 		echo '</div>';
 ?>