<?php
include('config.php');
$username="";
$password="";
$errors = array();
if(isset($_POST['login']))
	{
 	$username=($_POST['username']);
 	$password=($_POST['password']);

		if(empty($username))
		{
			array_push($errors, "username is required");
		}
		if(empty($password))
		{
			array_push($errors, "password is required");
		}


		if(count($errors)==0)
		{
			$password=$password;  
			$query="SELECT * FROM user WHERE username='$username' AND password='$password'";
			$result=mysqli_query($conn,$query);
			while($row = $result->fetch_array())
			{
			$row['username']; 
			}
				if(mysqli_num_rows($result)==1)
				{
					session_start();
					$_SESSION['username'] = $username;
		        	$_SESSION['password'] = $password;
		        	header("location:profile.php?uAN=$username");
				}
				else{
					array_push($errors,"wrong username and password");
				}
				
		}
	}
?>
