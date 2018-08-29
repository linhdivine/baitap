<?php
    $tenloai_error ='';
    $url_error ='';
    $theloai_error = '';
    $link ="select * from loaitin order by idlt asc";
    $query = $conn->query($link);
if (isset($_POST['insert'])) {
    $tenloai = $_POST['tenloaitin'];
    $url = $_POST['url'];
    $theloai = $_POST['theloai'];
    if (empty($tenloai)) {
        $tenloai_error ='<span style="color: red"> trường này không được bỏ trống</span>';

    }
    elseif (empty($url)) {
        $url_error = '<span style="color: red">  trường này không được bỏ trống</span>';
    }
    elseif (empty($theloai)) {
        $url_error = '<span style="color: red">  trường này không được bỏ trống</span>';
    }
    else {
        while ($row = $query->fetch_assoc()){
            if ($tenloai == $row['tenlt']){
                $tenloai_error ='<h3 style="color: red">loại tin đã tồn tại</h3>';
                exit($tenloai_error);
            }
        }
        $sql = "INSERT INTO loaitin(tenlt,tenkhongdau,parent_id) VALUES ('$tenloai','$url','$theloai')";
        $conn->query($sql);
        header('localtion:?admin=loaitin&ad=them');
    }
 }
?>
<form method="post">
    <table class="insert table">
        <tr>
            <th colspan="2">thêm loại tin</th>
        </tr>
        <tr>
            <td>tên loại tin</td>
            <td><input type="text" name="tenloaitin" class="form-control" value=""  />
                <?=$tenloai_error ?>
            </td>
        </tr>
        <tr>
            <td>URL Tĩnh</td>
            <td><input type="text" name="url" class="form-control" value="" />
                <?=$url_error ?>
            </td>
        </tr>
        <tr>
            <td>thể loại</td>
            <td>
                <select name="theloai" id="theloai" class="form-control">
                    <option value="" selected>--chọn thể loại--</option>
                    <?php
                    while ($thl = $query->fetch_assoc()) {
                        if ($thl['parent_id'] == 0){
                        ?>
                        <option value="<?=$thl['idlt']?>"><?=$thl['tenlt']?></option>
                        <?php
                        }
                    } ?>
                </select>
            </td>
        </tr>
    </table>
    <div class="update">
        <input type="submit" name="insert" id="" class="btn button"  value="Thêm">
    </div>
</form>