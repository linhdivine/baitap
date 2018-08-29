<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<title></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="public/css/normalize.css">
    <link rel="stylesheet" href="public/css/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/submit.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="public/js/main.js"></script>
</head>
<body class="columns">
	<?php
            require "database/db_connect.php";
            require "core/login.php";
            require 'core/menu.php';
			require 'core/phantrang.php';
            if (isset($_GET['user'])) {
                $user = $_GET['user'];
                if ($user == 'dangnhap') {
                    include 'template/dangnhap.php';
                }
                else{
                    $user = "";
                    header('location:?user=dangnhap');
                }
            }
            else{
                require 'template/header.php';
                require 'template/sidebar-first.php';
                require 'template/main-content.php';
                require 'template/footer.php';
            }


	?>
</body>
</html>