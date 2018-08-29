<script src="../../library/ckeditor/ckeditor.js"></script>
<script>
   jQuery(document).ready(function($) {
    CKEDITOR.replace( 'content' );
   });
</script>
<?php

		if (isset($_GET['id'])) {
            $id =	$_GET['id'];
 		 	settype($id, 'int');
		 }
		$sql="SELECT *  from  loaitin,chitiettin WHERE chitiettin.id='$id' AND loaitin.parent_id <> 0";
		$result = $conn->query($sql);
		$as = $result->fetch_assoc();
		function loaitin($row, $result) {
			while ($row = $result->fetch_assoc()) {
			    echo '<option value="'.$row['idlt'].'">'.$row['tenlt'].'</option>';
			}
			return $row;
		}
        if (isset($_POST['edit'])) {
            $title = $_POST['inputpost'];
            $content = $_POST['content'];
            $descript = $_POST['descripttion'];
            $loaitin = $_POST['loaitin'];
            $name = $_FILES["urlimage"]["name"];
            move_uploaded_file($_FILES["urlimage"]['tmp_name'], '../public/img/' . $name . '');
            $sql = "UPDATE chitiettin SET tieude='$title',tomtat='$descript',noidung='$content',hinh='$name',idloaitin='$loaitin' WHERE id=$id";
            $conn->query($sql);
            header('location:?admin=baiviet&node');
        }
?>
<div class="colomns">
    <div class="title-add">
        <h2>sửa bài viết</h2>
    </div>
    <form id="posts" method="post" enctype="multipart/form-data">
        <div id="loaitin">
            <h4>loại tin</h4>
            <select name="loaitin" id="tuychon" class="form-control">
                <option value="<?=$as['idlt'] ?>"><?= $as['tenlt']?></option>
                <?php
                loaitin($row,$result);
                ?>
            </select>
        </div>
        <div class="title-post">
            <h4> tiêu đề bài viết</h4>
            <input type="text" name="inputpost" value="<?= $as['tieude']?>" class="input-post form-control">
        </div>
        <div class="noidung">
            <h4>nội dung</h4>
            <textarea name="content" id="content" ><?= $as['noidung']?></textarea>
        </div>
        <div class="descript">
            <h4> nội dung tóm tắt</h4>
            <textarea type="text" name="descripttion" class="tomtat form-control"><?= $as['tomtat']?></textarea>
        </div>
        <div class="urlimg">
            <h4> đường dẫn hình ảnh</h4>
            <input type="file" name="urlimage" value="" class="images form-control">
        </div>
        <div class="insert">
            <input type="submit" name="edit" value="đăng bài" class="button">
        </div>
    </form>
</div>