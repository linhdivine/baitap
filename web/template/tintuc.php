<?php
    include '../core/phantrang.php';
  $sql =  "SELECT * FROM chitiettin  LIMIT $start, $limit where id=$_GET['baiviet']";
             $result = mysqli_query($connc,$sql);
           if (isset($result)) {
             while ($row = mysqli_fetch_assoc($result)) {
              ?>
                  <div class="roww">
                    <div class="node">
                      <div class="proimg">
                        <a href=""><img src="public/img/<?php echo $row['hinh'] ?>" alt="" width="100%" ></a>
                      </div>
                       <div class="proinfo">
                         <a href="index.php?baiviet=$row['id']"><h4><?= $row['tieude'] ?></h4></a>
                         <p><?= $row['tomtat'] ?></p>
                       </div>
                    </div>
                  </div>
              <?php   
             }
           }
           }  



           ?>

         <div id="main_pagination" class="paginations">
           <ul class="pagination">
              <?php
               if ($total_records > $limit) {
                 if ($current_page > 1) {
                   echo '<li class="previous"><a href="?page='.($current_page-1).'">Prev</a></li>';
                   for ($i= $min; $i <= $max ; $i++) {
                       if ($current_page == $i) {
                         echo '
                           <li><span>'.$i.'</span></li>';
                       }
                       else {
                        echo '<li><a href="?page='.$i.'">'.$i.'</a></li> ';
                       }
                   }
                   if ($current_page < $total_page && $total_page > 1) {
                        echo '<li class="next"><a href="?page='.($current_page+1).'">Next</a> </li> ';
                   }
                 }
                 else {
                   for ($i= $min; $i <= $max ; $i++) {
                       if ($current_page == $i) {
                         echo '
                           <li><span>'.$i.'</span></li>';
                       }
                       else {
                        echo '<li><a href="?page='.$i.'">'.$i.'</a></li> ';

                       }


                   }
                   if ($current_page < $total_page && $total_page > 1) {
                        echo '<li class="next"><a href="?page='.($current_page+1).'">Next</a> </li> ';
                   }
                 }

               }

              ?>
           </ul>
         </div>