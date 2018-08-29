<?php 
$result = mysqli_query($conn, $sql);
 
$categories = array();
 
while ($row = mysqli_fetch_assoc($result)){
    $categories[] = $row;
}
 
// BƯỚC 2: HÀM ĐỆ QUY HIỂN THỊ CATEGORIES
function showCategories($categories, $parent_id = 0, $char = '', $stt = 0)
{
    // BƯỚC 2.1: LẤY DANH SÁCH CATE CON
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
     
    // BƯỚC 2.2: HIỂN THỊ DANH SÁCH CHUYÊN MỤC CON NẾU CÓ
    if ($cate_child)
    {
        if ($stt == 0){
         echo '<li>';
         echo '<a  class="dropdown-toggle" href="#">';
         echo $item['tenlt'];
         echo '</a>';
         echo '</li>';
        }
        else if ($stt == 1){
             echo '<ul class="dropdown">';
              echo '<li>';
              echo '<a  class="dropdown-toggle" href="index.php?loaitin='.$item['idlt'].'">';
              echo $item['tenlt'];
              echo '</a>';
             echo '</li>';
             echo '</ul>';
        }
        else if ($stt == 2){
             echo '<ul class="dropdown">';
              echo '<li>';
              echo '<a  class="dropdown-toggle" href="index.php?loaitin='.$item['idlt'].'">';
              echo $item['tenlt'];
              echo '</a>';
             echo '</li>';
             echo '</ul>';
        }
         
    
        foreach ($cate_child as $key => $item)
        {
             echo '<li>';
         echo '<a  class="dropdown-toggle" href="">';
         echo $item['tenlt'];
         echo '</a>';
         echo '</li>';

        }
       
    }
}

 ?>