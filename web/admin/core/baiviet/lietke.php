<?php 
	$sql="SELECT *  from  loaitin,chitiettin WHERE chitiettin.idloaitin=loaitin.idlt AND loaitin.parent_id <> 0 ORDER BY chitiettin.id ASC limit $start,$limit";
	$result = $conn->query($sql);
	?>
		<table class="select table">
			<thead>
				<tr><th>số thứ tự</th><th>Tiêu đề tin</th><th>tên loại tin</th><th colspan="2">quản lý</th></tr>
			</thead>
            <tbody>	
	<?php
            while ($row = $result->fetch_assoc()){
		 ?>  
			<tr><td><?= $row['id']; ?></td><td><?= $row['tieude'] ?></td><td><?= $row['tenlt'] ?></td><td><a href="index.php?admin=baiviet&node=sua&id=<?= $row['id'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            </a></td>
             <td><a href="index.php?admin=baiviet&node=xoa&id=<?= $row['id'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>   
        </tr>
		<?php
            }
            echo '</tbody>';
        	echo '</table>';
            // phân trang
        	echo '<div class="navpagi">';
                   echo '<ul class="pagination"  style="float:right">';
            // Nút prev và first
            if ($current_page > 1)
            {
			echo '<li><a href="index.php?admin=baiviet&node&page='.($current_page -1).'">Prev</a></li>';
            }
            // lặp trong khoảng cách giữa min và max để hiển thị các nút
            for ($i = $min; $i <= $max; $i++)
            {
                // Trang hiện tại
                if ($current_page == $i){
                     echo '<li class="active"><a href="index.php?admin=baiviet&node&page='.$i.'">'.$i.'</a></li>';
                }
                else{
                    echo '<li><a href="index.php?admin=baiviet&node&page='.$i.'">'.$i.'</a></li>';
                }
            }
 
            // Nút last và next
            if ($current_page < $total_page)
            {
                echo '<li><a href="index.php?admin=baiviet&node&page='.($current_page + 1).'">Next</a></li>';
               
            }
             echo '</ul>';
				echo '</div>';



                ?>