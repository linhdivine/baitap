
<!-- 		dashoard-views -->
		<div class="dashoard-views col-md-10">
				<div class="content">
					<?php 
							if (isset($_GET['admin'])) {
								$admin = $_GET['admin'];
						
							if ($admin == 'loaitin') {
								include '/../core/loaitin/main.php';
							}
							elseif ($admin == 'baiviet') {
								include '/../core/baiviet/main.php';
							}
							else {
								header("HTTP/1.0 404 Not Found");
							}	
						}
						else {
								$admin='';
								include '/../core/admin.php';
								
						}
					?>	
				</div>
			</div>
		<!-- 	end dashoard-views -->

		