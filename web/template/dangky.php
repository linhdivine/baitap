<?php
include "/../core/signup.php";
?>
<div class="form-dangky">
    <div class="title-signup">
        <h3>
        <?php
        //($message == null) ? echo 'đăng ký tài khoản tại đây'; : echo $message ;
        ?>
        </h3>
        <p><?=$message ?></p>
    </div>
    <form action="index.php?user=dangky" class="form-signup" method="post">
            <div class="user">
                <div class="title-user font"><span>tên đăng nhập</span></div>
                <input type="text" name="username" value="" class="nameuser form-control" required>
            </div>
            <div class="email">
                <div class="title-email font"><span>Email</span></div>
                <input type="email" name="emailuser" value="" class="useremail form-control" required>
            </div>
            <div class="fullname">
                <div class="title-fullname font"><span>họ và tên</span></div>
                <input type="text" name="fullname" value="" class="fullname form-control" required>
            </div>

        <div class="birthday">
            <div class="title-fullname font"><span>ngày sinh</span></div>
            <input type="date" name="birthday" value="" class="birthday form-control">
        </div>
        <div class="password">
            <div class="title-password font"><span>mật khẩu</span></div>
            <input type="text" name="pass" value="" class="pass form-control" required>
        </div>
        <div class="password-confim">
            <div class="title-passwordconfim font"><span>mật khẩu xác nhận</span></div>
            <input type="text" name="passwordconfim" value="" class="confim form-control">
        </div>
        <div class="dangky">
            <input type="submit" name="signup" value="đăng ký" class="sign-up form-control">
        </div>
    </form>
</div>