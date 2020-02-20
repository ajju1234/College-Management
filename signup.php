<html>
	<head>
		<title>Signup</title>
		<link rel="stylesheet" href="registor.css">
	<head>
	<body>
		<div class="header" style="width:25%;">
			<h2>CREATE ID</h2>
		</div>
		<form  name="myForm" action="" method="POST" style="width:25%;">
			<div class="input-group">
				<label>Username</label>
				<br><input type="text" name="username" required>
			</div>
			<div class="input-group">
				<br><label>Password</label>
				<br><input type="password" name="password_1" required>
			</div>
			<div class="input-group">
				<br><label>Confirm Password</label>
				<br><input type="password" name="password_2" required>
			</div>
			<div class="input-group">
				<br><button type="submit" name="login">Create</button>
			</div>
			<div class="input-group">
				<br><button type="cancel" name="cancel" value="cancel"><a href="home.html" style="text-decoration:none; color:white;">Back</a></button>
			</div>
		</form>
	</body>
</html>

<?php
	$username=filter_input(INPUT_POST,'username');
	$password_1=filter_input(INPUT_POST,'password_1');
	$password_2=filter_input(INPUT_POST,'password_2');
	if(!empty($username) && !empty($password_1) && !empty($password_2))
	{
		$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="test";
		$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
		if(mysqli_connect_error())
		{
			die('Connection error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
		}
		else
		{
			$queryl="SELECT username FROM signup where username='{$username}'";
            $result=mysqli_query($conn,$queryl);
            $user=mysqli_fetch_all($result,MYSQLI_ASSOC);
            if($user)
			{
				echo "<center>Use Another Username For Creating</center>";
            }
			else
			{
				if($password_1==$password_2)
				{
					$sql="INSERT INTO signup(username,password_1,password_2)
						values ('$username','$password_1','$password_2')";
					if($conn->query($sql))
					{	
						header('location:registor.php');
					}
					else
					{
						echo "Error:".$sql."<br>".$conn->error;
					}
				}
				else
				{
					echo "<center>Again Write Your Password</center>";
				}
			}
			$conn->close();
		}
	}
	else
	{
		die();
	}
?>