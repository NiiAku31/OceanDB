<?php

	session_start();

	if (isset($_SESSION['aid']))
	{
		header('location: admindash.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title> OceanDB's Order/Login </title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<style>
body	{  background-image: url("/Oceandb/dataimg/coral2.jpeg");
	}
	</style>
<body>

	<div class=" bg-dark pt-3 pb-3">
		<a href="../index.php"><button type="button" class="btn btn-success bg-primary ml-3" style="float:right; ">HOME</button></a>
		<a href="../login.php"><button type="button" class="btn btn-danger mr-3 " style="float:left;"><< Back</button></a>
		<h1 class="text-center text-light">OceanDB'S ORDER</h1>
	</div>
	<div class="mt-5 bg-info container text-center text-white">
		<h1>ADMIN LOGIN</h1>
	</div>

	<div class="container mt-5 pt-5">
		<table align="center">
			<form action="adminlogin.php" method="post">
				<tr>
					<td class="text-light">Username</td>
					<td ><input type="text" name="uname" value="admin" required></td>
				</tr>
				<tr>
					<td class="text-light">Password</td>
					<td><input type="password" name="pass" value="admin" required></td>
				</tr>
				<tr>
					<td colspan="2" align="center" height="80">
						<input type="submit" name="login" value="Log In">
					</td>
				</tr>
			</form>
		</table>
	</div>

	<script src="bootstrap/jss/jquery.min.js"></script>
	<script src="bootstrap/jss/popper.min.js"></script>
	<script src="bootstrap/jss/bootstrap.min.js"></script>
</body>
</html>

<?php

	include('../dbcon.php');

	if (isset($_POST['login']))
	{
		$uname = $_POST['uname'];
		$pass = $_POST['pass'];

		$query = "SELECT * FROM `admin` WHERE `username` = '$uname' AND `password` = '$pass'";
		$run = mysqli_query($conn, $query);
		$row = mysqli_num_rows($run);

		if($row < 1)
		{
			?>
				<script>
					alert("Username and Password not match");
					window.open('adminlogin.php', '_self');
				</script>
			<?php
		}
		else
		{
			$data = mysqli_fetch_assoc($run);

			$id = $data['id'];

			$_SESSION['aid'] = $id;

			header('location: admindash.php');
		}
	}

?>
