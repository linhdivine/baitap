   <?php
            $sql =  "SELECT * FROM chitiettin  wHERE idloaitin=$loai";
             $result = mysqli_query($conn,$sql);
             if ($result) {
             while ($row = mysqli_fetch_assoc($result)) {
              ?>
                    <div class="node">
                      <div class="proimg">
                        <a href="index.php?baiviet=<?php echo $row['id'] ?>"><img src="public/img/<?php echo $row['hinh'] ?>" alt=""></a>
                      </div>
                       <div class="proinfo">
                         <h4><a href="index.php?baiviet=<?php echo $row['id'] ?>"><?= $row['tieude'] ?></a></h4>
                         <p><?= $row['tomtat'] ?></p>
                         <span><i class="fa fa-eye" aria-hidden="true"></i> <?= $row['luotxem'] ?> lượt xem</span>
                       </div>
                    </div>

              <?php   
             }
           }
           