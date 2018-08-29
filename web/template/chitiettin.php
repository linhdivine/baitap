<?php 
	$conn = mysqli_connect('localhost','root','','webcuatoi') or die('không kết nối được');
	mysqli_query($conn,"set names utf8");
	if (isset($_GET['baiviet'])) {
			$baiviet = $_GET['baiviet'];
			settype($baiviet, "int");
			if ($baiviet < 1) {
					$baiviet = 1;
			}
		$sql = " SELECT * FROM chitiettin where id=$baiviet";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
		?>

	 <div class=" node so<?= $row['id'] ?>">
	 	<div class="title">
	 		<h1><?= $row['tieude'] ?></h1>
	 	</div>
	 	<?php echo $row['noidung']?>
	 </div>
	 	<?php
	 	}
	 	
 ?>

 <style>
 	
ul#Tinhte_Galleria__dfc93a1467049c6270df88a3c8a77ab5_2 {
  position: static;
  width: 100%;
}
ul {
  list-style: none;
}
#Tinhte_Galleria__dfc93a1467049c6270df88a3c8a77ab5_2 li {
  position: static;
}
		

 </style>