<!-- 		main-content	 -->
<?php
    if (isset($_GET['baiviet'])) {
      echo '<div id="xhtml" class="main-content"><div class="content">';
      require 'chitiettin.php';
      require 'tinlienquan.php';
      echo '</div></div>';
    }
    elseif(isset($_GET['search'])){
        echo '<div id="xhtml" class="main-content"><div class="content">';
         require 'timkiem.php';
        echo '</div></div>';
    }
    else {?>
     <div id="xhtml" class="main-content">
 <!--   slideshow -->
     <div id="slideshow" class="slider">
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
             <!-- Indicators -->
             <ol class="carousel-indicators">
                 <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                 <li data-target="#myCarousel" data-slide-to="1"></li>
                 <li data-target="#myCarousel" data-slide-to="2"></li>
             </ol>
             <!-- Wrapper for slides -->
             <div class="carousel-inner" role="listbox">
                 <div class="item active">
                     <img src="public/img/wide1.jpg" alt="">
                 </div>
                 <div class="item">
                     <img src="public/img/wide2.jpg" alt="">
                 </div>
                 <div class="item">
                     <img src="public/img/wide3.jpg" alt="">
                 </div>
             </div>
             <!-- Left and right controls -->
             <a class="left  carousel-control" href="#myCarousel" role="button" data-slide="prev">
       <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
       <span class="sr-only">Previous</span>
     </a>
             <a class="right  carousel-control" href="#myCarousel" role="button" data-slide="next">
       <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
       <span class="sr-only">Next</span>
     </a>
         </div>
     </div>
     <div class="content">
         <div class="roww">
           <?php 
           if (isset($_GET['loaitin'])) {
              $loai = $_GET["loaitin"]; 
              settype($loai, "int");
              include 'loaitin.php';
           }
           else {
            echo '<div class="tin-moi">
              <h4> tin mới nhât</h4>
            </div>';
             include 'tinmoi.php';
           }
         ?>    
         </div>
     </div>
   <!--   end main content -->
 </div>
<?php }
 ?>
