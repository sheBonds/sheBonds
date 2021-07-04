<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="images/logo.png" type="image/png" />
	<title>She Bonds - Connect her with Experts</title>
</head>
<body background="image\bg.png" style="margin-top: 30px;text-align: center;">
<?php
	session_start();
	if (isset($_SESSION['UserFullName'])){
		session_destroy();
		echo "<h1>Logout successfull. Redirect to home page in 3 seconds. <br>Click <a href='home.php'>here</a> if no response.</h1>";
		header('Refresh: 2; home.php');
	}
?>
</body>
</html>
