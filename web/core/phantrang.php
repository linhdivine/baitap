<?php

// KẾT NỐI CSDL
			if (!$conn) {
				include '../database/db_connect.php';
			}
			//  TÌM TỔNG SỐ RECORDS
			$result = mysqli_query($conn, 'select count(id) as total from chitiettin');
			$row = mysqli_fetch_assoc($result);
			$total_records = $row['total'];

			// TÌM LIMIT VÀ CURRENT_PAGE
			$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
			$limit = 5;
			$range = 5;
			$max = 0;
			$min = 0;
			// TÍNH TOÁN TOTAL_PAGE VÀ START
			// tổng số trang
			$total_page = ceil($total_records / $limit );

			// Giới hạn current_page trong khoảng 1 đến total_page
			if ($current_page > $total_page){
			    $current_page = $total_page;
			}
			else if ($current_page < 1){
			    $current_page = 1;
			}

			// Tìm Start
			$start = ($current_page - 1) * $limit;
			 	// TRUY VẤN LẤY DANH SÁCH TIN TỨC

			// Trước tiên tính middle, đây chính là số nằm giữa trong khoảng tổng số trang
			// mà bạn muốn hiển thị ra màn hình
			$middle = $range -1;
			if ($total_page < $range) {
				$min = 1;
				$max = $total_page;
			}
			else {
				$min = $current_page - $middle +1;
				$max = $current_page + $middle -1;

				if ($min < 1) {
					$min = 1;
					$max = $range;
				}
				else if ($max > $total_page) {
					$max = $total_page;
					$min = $total_page - $range +1;
				}
			}


 ?>
