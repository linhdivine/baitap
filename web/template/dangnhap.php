<div class="model">
 <div class="form-dangnhap">
        <div class="title-signin">
            <h3>đăng nhập</h3>
            <?=$message ?>
        </div>
        <form action="index.php?user=dangnhap" class="form-signin" method="post">
            <div class="user-login">
                <div class="title-user font"><span>tên đăng nhập</span></div>
                <input type="text" name="username" value="" class="nameuser form-control">
                <?= $error_user?>
            </div>
            <div class="password-login">
                <div class="title-email font"><span>mật khẩu</span></div>
                <input type="password" name="password" value="" class="pass-user form-control">
                <?= $error_pass?>
            </div>
            <div class="signin">
                <input type="submit" name="signin" value="đăng nhập" class="signin form-control">
            </div>
        </form>
    </div>
</div>