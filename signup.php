<?php
include('config.php');
include('signupvalidate.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1 class="text-center">Add New Admin</h1>
<div class="form">
	<form method="post" action="signup.php">
	<?php include('errors.php'); ?>
	<input type="text" class="input-group" name="username" value="<?php echo $username; ?>" placeholder="Enter Your Username"><br>
	<input type="password" class="input-group" name="password1" value="<?php echo $password1; ?>" placeholder="Enter Your Password"><br>
	<input type="password" class="input-group" name="password2" value="<?php echo $password2; ?>" placeholder="Confirm Password"><br>
	<input type="submit" class="btn" name="signup" value="SignUp">
	<a href="index.php" class="btn" name="login" value="LogIn">LogIn</a>
	</form>
</div>