<!--    header -->
<header class="header-admin">
    <div class="container">
        <nav class="navbar navigation" role="navigation">
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class=""><a href="index.php">trang admin</a></li>
                    <li><a href="?admin=loaitin&ad=them">quản lý danh mục</a></li>
                    <li><a href="?admin=baiviet&node">quản lý bài viết</a></li>
                </ul>
                <ul class="profile">
                    <li><a href=""><?php echo $_SESSION['admin'] ?></a></li>
                    <li><img src="public/icon/student32.png" alt=""></li>
                    <li>
                        <a href="../core/logout.php">đăng xuất</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>
</header>
<!--    end header -->
