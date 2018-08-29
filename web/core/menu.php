<?php 
    if (!$conn) {
        include '../database/db_connect.php';
    }
// LẤY DANH SÁCH CATEGORIES
$sql = 'SELECT * FROM loaitin';
$loaitin = mysqli_query($conn, $sql);  
    $categories = array();

    while ($row = mysqli_fetch_assoc($loaitin)){

        $categories[] = $row;
    }

// HÀM ĐỆ QUY HIỂN THỊ CATEGORIES
function showCategories($categories, $parent_id = 0, $stt = 0)
{
    //LẤY DANH SÁCH CATE CON
    $cate_child = array();
    foreach ($categories as $key => $item)
    {
        // Nếu là chuyên mục con thì hiển thị
        if ($item['parent_id'] == $parent_id)
        {
            $cate_child[] = $item;
            unset($categories[$key]);
        }
    }

    // HIỂN THỊ DANH SÁCH CHUYÊN MỤC CON NẾU CÓ
    if ($cate_child)
    {
        if ($stt == 0){
        foreach ($cate_child as $key => $item)
        {
            // Hiển thị tiêu đề chuyên mục
            echo '<li><i class="fa fa-caret-right" aria-hidden="true"></i> ';
            echo '<a class="dropdown-toggle" href="#">';
            echo $item['tenlt'];         
            echo '</a>';
            showCategories($categories, $item['idlt'], ++$stt);
         echo '</li>';
        }
        }
        else if ($stt == 1){
             echo '<ul class="dropdown">';
        foreach ($cate_child as $key => $item)
        {
            // Hiển thị tiêu đề chuyên mục
              echo '<li> <i class="fa fa-caret-right" aria-hidden="true"></i> ';
             echo '<a class="dropdown-toggle" href="index.php?loaitin='.$item['idlt'].'">';
                echo $item['tenlt'];
             echo ' </a>';
            showCategories($categories, $item['idlt'], ++$stt);
          echo '</li>';
        }
        echo '</ul>';
        }
        else if ($stt == 2){
        echo '<ul class="dropdown">';
        foreach ($cate_child as $key => $item)
        {
            // Hiển thị tiêu đề chuyên mục
            echo '<li><i class="fa fa-caret-right" aria-hidden="true"></i> ';
            echo '<a class="dropdown-toggle" href="index.php?loaitin='.$item['idlt'].'">';
            echo $item['tenlt'];         
            echo '</a>';
            showCategories($categories, $item['idlt'], ++$stt);
         echo '</li>';
        }
        echo '</ul>';
        
        }
         else if ($stt == 3){
        echo '<ul class="dropdown">';
        foreach ($cate_child as $key => $item)
        {
            // Hiển thị tiêu đề chuyên mục
            echo '<li><i class="fa fa-caret-right" aria-hidden="true"></i> ';
            echo '<a class="dropdown-toggle" href="index.php?loaitin='.$item['idlt'].'">';
            echo $item['tenlt'];         
            echo '</a>';
            showCategories($categories, $item['idlt'], ++$stt);
         echo '</li>';
        }
        echo '</ul>';
        
        }
         else if ($stt == 4){
        echo '<ul class="dropdown">';
        foreach ($cate_child as $key => $item)
        {
            // Hiển thị tiêu đề chuyên mục
            echo '<li><i class="fa fa-caret-right" aria-hidden="true"></i> ';
            echo '<a class="dropdown-toggle" href="index.php?loaitin='.$item['idlt'].'">';
            echo $item['tenlt'];         
            echo '</a>';
            showCategories($categories, $item['idlt'], ++$stt);
         echo '</li>';
        }
        echo '</ul>';
        
        }
         else if ($stt == 5){
        echo '<ul class="dropdown">';
        foreach ($cate_child as $key => $item)
        {
            // Hiển thị tiêu đề chuyên mục
            echo '<li><i class="fa fa-caret-right" aria-hidden="true"></i> ';
            echo '<a class="dropdown-toggle" href="index.php?loaitin='.$item['idlt'].'">';
            echo $item['tenlt'];         
            echo '</a>';
            showCategories($categories, $item['idlt'], ++$stt);
         echo '</li>';
        }
        echo '</ul>';
        
        }
         
      
    }
}
 ?>