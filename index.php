<?php
include('config.php');
include('loginvalidate.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1 class="text-center">Admin</h1>
<div class="form">
	<form method="post" action="index.php">
	<?php include('errors.php'); ?>
	<input type="text" class="input-group" name="username" value="" placeholder="Enter Your Username"><br>
	<input type="password" class="input-group" name="password" value="" placeholder="Enter Your Password"><br>
	<input type="submit" class="btn" name="login" value="Login">
	<a href="signup.php" class="btn" name="signup" value="SignUp">SignUp</a>
	</form>
</div>