<?php 
	$error = '';
	if (isset($_POST['submit'])) {
	    $txxt = $_POST['texttxt'];
		if (empty($txxt)) {
            $error = '<span style="color:red">trường này không được để trống</span>';
		}
		var_dump($_POST);
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title></title>
 	<link rel="stylesheet" href="">
 </head>
 <body>
 		<form action="wap.php" method="post">
 			<?php echo $error ?>
 			<input type="text" name="texttxt" >
            <input type="password" >
 			<input type="submit" name="submit" value="check">
 		</form>
 </body>
 </html>