<?php 
	$sql = "SELECT * FROM loaitin WHERE parent_id <> 0";
	$query = $conn->query($sql);
 ?>
 	<table class="select table">
 		<tr>
 			<th>cấp chỉ mục</th>
 			<th>tên danh mục</th>
 			<th>URl tĩnh</th>
 			<th colspan="2">quản lý</th>
 		</tr>
		<?php
			while ($row = $query->fetch_assoc()) {
			    ?>
						<tr>
							<td><?php 
									if ($row['parent_id'] == 1) {
										echo 'tin trong nước';
									}
									elseif ($row['parent_id'] == 2) {
										echo 'tin thế giới';
									}
							 ?></td>
							<td><?= $row['tenlt'] ?></td>
							<td><?= $row['tenkhongdau'] ?></td>
							<td><a href="?admin=loaitin&ad=sua&id=<?= $row['idlt'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
							<td><a class="clear" href="?admin=loaitin&ad=xoa&id=<?= $row['idlt'] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
						</tr>
			    <?php
			}
		 ?>
 	</table>