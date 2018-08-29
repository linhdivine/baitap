<?php 
	$sql = "SELECT * FROM chitiettin 	ORDER BY id DESC LIMIT 0,5";
	$result = mysqli_query($conn,$sql);
	while ($row =mysqli_fetch_assoc($result)) {
	    ?>
                  <div class="roww">
                    <div class="node">
                      <div class="proimg">
                        <a href="index.php?baiviet=<?= $row['id'] ?>"><img src="public/img/<?php echo $row['hinh'] ?>" alt="" width="100%" ></a>
                      </div>
                       <div class="proinfo">
                         <a href="index.php?baiviet=<?= $row['id'] ?>"><h4><?= $row['tieude'] ?></h4></a>
                         <p><?= $row['tomtat'] ?></p>
                         <span><i class="fa fa-eye" aria-hidden="true"></i> <?= $row['luotxem'] ?> lượt xem</span>
                       </div>
                    </div>
                  </div>
	    <?php
	}
 ?>