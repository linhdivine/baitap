<script src="../../library/ckeditor/ckeditor.js"></script>
<script>
   jQuery(document).ready(function($) {
    CKEDITOR.replace( 'content' );
   });
</script>
<?php
		$sql = "SELECT * FROM loaitin WHERE parent_id <> 0";
		$result = $conn->query($sql);
		function loaitin($row, $result) {
			while ($row = $result->fetch_assoc()) {
			    echo '<option value="'.$row['idlt'].'">'.$row['tenlt'].'</option>';
			}
			return $row; 
		}

        if (isset($_POST['submit'])) {
            $title = $_POST['inputpost'];
            $content = $_POST['content'];
            $descript = $_POST['descripttion'];
            $loaitin = $_POST['loaitin'];
            $name = $_FILES["urlimage"]["name"];
            move_uploaded_file($_FILES["urlimage"]['tmp_name'], '../public/img/' . $name . '');

            if ($title == ''){
                //header('location:index.php?admin=baiviet&node=them');
                 return header('location:index.php?admin=baiviet&node=them');
            }
            else{
                $sql = "INSERT INTO `chitiettin`(`tieude`, `tomtat`, `noidung`, `hinh`,  `idloaitin`) VALUES('$title','$descript','$content','$name','$loaitin') ";
                $conn->query($sql);
                header('location:index.php?admin=baiviet&node');
            }


        }
 ?>
<div class="colomns">
	<div class="title-add">
		<h2>thêm bài viết</h2>
	</div>
<form id="posts" method="post" enctype="multipart/form-data">
		<div id="loaitin">
			<h4>loại tin</h4>
		<select name="loaitin" id="tuychon" class="form-control">
			<option value="">---chọn danh mục---</option>
				<?php 
						loaitin($row,$result);
				 ?>
		</select>
	</div>
	<div class="title-post">
		<h4> tiêu đề bài viết</h4>
		<input type="text" name="inputpost" value="" class="input-post form-control">
	</div>
		<div class="noidung">
			 <h4>nội dung</h4>
		<textarea name="content" id="content" ></textarea>
	</div>
	<div class="descript">
		<h4> nội dung tóm tắt</h4>
		<textarea type="text" name="descripttion" value="" class="tomtat form-control"></textarea>
	</div>
	<div class="urlimg">
		<h4> đường dẫn hình ảnh</h4>
		<input type="file" name="urlimage" value="" class="images form-control">
	</div>
	<div class="insert">
		<input type="submit" name="submit" value="đăng bài" id="insert" class="button">
	</div>
</form>
</div>