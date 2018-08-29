<?php 
			if (isset($_GET['id'])) {
 		 	$id =	$_GET['id'];
 		 	settype($id, 'int');
 }
	$sql = "SELECT * FROM loaitin WHERE idlt='$id'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$parent  = $row['parent_id'];

if (isset($_POST['update'])) {
    $tenloai = $_POST['tenloaitin'];
    $url = $_POST['url'];
    $theloai = $_POST['theloai'];
    // sửa loại tin
    $sql = "UPDATE loaitin SET tenlt='$tenloai', parent_id='$theloai', tenkhongdau='$url' WHERE idlt='$id'";
    $conn->query($sql);
   // header('location:index.php?admin=baiviet&node');
    header('location:index.php?admin=loaitin&ad=them');
}
 ?>
 <form action="index.php?admin=loaitin&ad=sua&id=<?=$row['idlt']; ?>" method="post">
 	<table class="table update">

 		<tr><td colspan="2"><span  class="title-form">sửa loại tin</span></td></tr>
 		<tr>
 			<td><span  class="title-form">tên loại tin</span></td>
 			<td><input type="text" name="tenloaitin" value="<?= $row['tenlt']; ?>" required> </td>
 		</tr>
 		<tr>
 			<td><span  class="title-form">URL Tĩnh</span></td>
 			<td><input type="text" name="url" value="<?= $row['tenkhongdau']; ?>" required> </td>
 		</tr><tr><td>thể loại</td><td><?php ad($parent) ?></td></tr>
 			</table>
		 <div class="update">
      <input type="submit" name="update" class="btn button"  value="sửa">
    </div>

 </form>
 <?php
 		function ad($parent){
 		   echo '<select name="theloai" id="theloai" class="form-control" required>';
 			  if ($parent == 1) {
 			  		echo '<option value="1">tin trong nước</option>';
 			  		echo '<option value="2">tin thế giới</option>';
 			  }
 			  elseif ($parent == 2) {
 			    echo '<option value="2">tin thế giới</option>';
 			     echo '<option value="1">tin trong nước</option>';
 			  }
           echo '</select>';
 		}
  ?>