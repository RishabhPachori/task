<?php
include('config.php');
session_start();
 $adm = $_SESSION['username'];
  if(!isset($_SESSION['password']))
  {
    header('location:index.php');
  }
$result=mysqli_query($conn,"SELECT * FROM user");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Information</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
	<nav class="navbar navbar-light bg-light justify-content-between">
  <a class="navbar-brand">Hello <?php echo $adm;?></a>
  <form class="form-inline">
   <a href="logout.php" class="btn btn-outline-success my-2 my-sm-0">Logout</a>
  </form>
</nav>
	<div>
	<table class="table">
		<tr>
			<th>UserId</th><th>Username</th><th>Action</th>
		</tr>
		<?php
		while($row=mysqli_fetch_array($result)){
			echo "<tr>";
			echo"<td>".$row['id']."</td>";
			echo"<td>".$row['username']."</td>";
			echo"<td><a href='delete_user.php?id=$row[id]'>Delete</a> </td></tr>";
		}
		?>
	</table>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
