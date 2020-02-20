<html>
	<head>
		<title>login page</title>
		<link rel="stylesheet" href="registor.css">
	</head>
	<body>
		<div class="header" style="width:25%;">
			<h2>LOGIN</h2>
		</div>
		<form name="myForm" method="POST" action="" style="width:25%;">
			<div class="input-group">
				<label>Username</label>
				<br><input type="text" name="username" required>
			</div>
			<div class="input-group">
				<br><label>Password</label>
				<br><input type="password" name="password" required>
			</div>
			<div class="input-group">
				<br><button type="submit" name="login">Login</button>
			</div>
			<div class="input-group">
				<br><button type="cancel" name="cancel"><a href="home.html" style="text-decoration:none; color:white;">Back</a></button>
			</div>
			<br><center><a href="signup.php">Sign Up</a></center>
		</form>
	</body>
</html>

<?php
	$username=filter_input(INPUT_POST,'username');
	$password=filter_input(INPUT_POST,'password');
	if(!empty($username) && !empty($password))
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
			$queryl="SELECT * FROM signup where username='{$username}' AND password_1='{$password}' AND password_2='{$password}'";
            $result=mysqli_query($conn,$queryl);
            $user=mysqli_fetch_all($result,MYSQLI_ASSOC);
            if($user)
			{
				header('location:detail.html');
				$conn->close();
		    }
			else
			{
				echo "<center>Invalid username and password</center>";
			}
		}
	}
	else
	{
		die();
	}
?>