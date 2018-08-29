<?php
    ob_start();
    session_start();
    $message = '';
    $error_user = '';
    $error_pass = '';
    if (isset($_POST['signin'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        if (empty($user)){
            $error_user = '<span style="color: #FF0000">tài khoản không được để trống</span>';
            return false;
        }
        elseif (empty($pass)){
            $error_pass = '<span style="color: #FF0000">mật khẩu không được để trống</span>';
        }
        else{
            $sql = "select * from user where name='$user' and password='$pass'";
            $result = mysqli_query($conn,$sql);
            if (mysqli_num_rows($result)>0){
                $admin = mysqli_fetch_assoc($result);
               if ($admin['user_id'] == 1){
                   $message = '<span style="color: #00ff00">đăng nhập thành công</span>';
                   $_SESSION['admin'] = $admin['fullname'];
                   if (isset($_SESSION['admin'])){
                       header('location:admin/index.php');
                   }
                   else{
                       unset($_SESSION['admin']);
                       header('location:index.php');
                   }
               }
               else{
                   $message = '<span style="color: #FF0000">thông tin đăng nhập sai</span>';

               }
            }
            else {
                $message = '<span style="color: #FF0000">đăng nhập thất bại</span>';
            }
        }

    }
?>