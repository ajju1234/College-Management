<html>
	<head>
		<title>Student Update</title>
		<link rel="stylesheet" href="registor.css">
	<head>
	<body>
		<div class="header">
			<h2>UPDATE STUDENT DETAILS</h2>
		</div>
		<form  name="myForm" action="" method="GET">
			<div class="input-group">
				<br><label>Email ID</label>
				<br><input type="text" name="email" value="<?php echo $_GET['email']; ?>" required>
			</div>
			<div class="input-group">
				<br><label>Mobile Number</label>
				<br><input type="text" name="phone" pattern="[0-9]{10}" value="<?php echo $_GET['phone']; ?>" required>
			</div>
			<div class="input-group">
				<br><label>Class</label>
				<br><input type="text" name="class" value="<?php echo $_GET['class']; ?>" required>
			</div>
			<div class="input-group">
				<br><label>Address</label>
				<br><input type="text" name="address" value="<?php echo $_GET['address']; ?>" required>
			</div>
			<div class="input-group">
				<br><button type="submit" name="submit">Update</button>
			</div>
			<div class="input-group">
				<br><button type="cancel" name="cancel" value="cancel"><a href="studentdetail.html" style="text-decoration:none; color:white;">Cancel</a></button>
			</div>
		</form>
	</body>
</html>

<?php
	$email=$_GET['email'];
	$pho=$_GET['phone'];
	$class=$_GET['class'];
	$add=$_GET['address'];
	if(!empty($email) && !empty($pho)&& !empty($class) && !empty($add))
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
			if(isset($_GET['submit']))
			{	
				$sql="UPDATE STUDENT SET mobile='$pho',class='$class',address='$add' where email='$email'";
				if($conn->query($sql))
				{
					header('location:studentdetail.html');
				}
				else
				{
					echo "<center>Data Not Updated Successfully</center>";
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