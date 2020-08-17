<?php
include('config.php');
$username="";
$password1="";
$password2="";
$errors=array();
if(isset($_POST['signup']))
{
	$username=($_POST['username']);
	$password1=($_POST['password1']);
	$password2=($_POST['password2']);


	if(empty($username))
	{
		array_push($errors, "username is required");

	}
	if(empty($password1 & $password2))
	{
		array_push($errors, "password is required");
		
	}

	if($password1 != $password2)
	{
		array_push($errors, "password do not match");
		
	}

	if(count($errors)==0)
	{
		$flag=0;
		$sql="Select * from user where username='$username'";
		$result=mysqli_query($conn,$sql);
		while($row = $result->fetch_array())
		{
			if($username==$row['username'])
			{
				$flag=1;
				//
			}
		}
		if($flag==1)
		{
			array_push($errors, "username is already exist");
		}
		else
			{
		$password=$password1;   
		$query="INSERT INTO user (username,password) VALUES ('$username','$password')";
		mysqli_query($conn,$query);
		$_SESSION['username'] = $username;
		header('location:profile.php');
			}
	}
}
?>