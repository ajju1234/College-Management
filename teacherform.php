<html>
	<head>
		<title>Teacher Form</title>
		<link rel="stylesheet" href="registor.css">
	<head>
	<body>
		<div class="header">
			<h2>TEACHER DETAILS</h2>
		</div>
		<form  name="myForm" action="" method="POST">
			<div class="input-group">
				<label>First Name</label>
				<br><input type="text" name="fn" required>
			</div>
			<div class="input-group">
				<br><label>Middle Name</label>
				<br><input type="text" name="mn" required>
			</div>
			<div class="input-group">
				<br><label>Last Name</label>
				<br><input type="text" name="ln"required>
			</div>
			<div class="input-group">
				<br><label>Date Of Birth</label>
				<br><input type="date" name="dob" required>
			</div>
			<div class="input-group">
				<br><label>Gender</label>
			</div>
				<br><input type="radio" name="gender" value="male">  Male
				<br><input type="radio" name="gender" value="female">  Female
				<br><input type="radio" name="gender" value="other">  Other
			<div class="input-group">
				<br><label>Email ID</label>
				<br><input type="email" name="email" required>
			</div>
			<div class="input-group">
				<br><label>Mobile Number</label>
				<br><input type="text" pattern="{0-9}[10]" name="phone" required>
			</div>
			<div class="input-group">
				<br><label>Qualification</label>
				<br><input type="text" name="q" required>
			</div>
			<div class="input-group">
				<br><label>Address</label>
				<br><input type="text" name="address" required>
			</div>
			<div class="input-group">
				<br><label>Salary</label>
				<br><input type="tel" pattern="{0-9}" name="salary" required>
			</div>
			<div class="input-group">
				<br><button type="submit" name="submit">Submit</button>
			</div>
			<div class="input-group">
				<br><button type="reset" name="reset" value="reset">Reset</button>
			</div>
			<div class="input-group">
				<br><button type="cancel" name="cancel" value="cancel"><a href="teacherdetail.html" style="text-decoration:none; color:white;">Back</a></button>
			</div>
		</form>
	</body>
</html>

<?php
	$f=filter_input(INPUT_POST,'fn');
	$m=filter_input(INPUT_POST,'mn');
	$l=filter_input(INPUT_POST,'ln');
	$dob=filter_input(INPUT_POST,'dob');
	$g=filter_input(INPUT_POST,'gender');
	$email=filter_input(INPUT_POST,'email');
	$pho=filter_input(INPUT_POST,'phone');
	$q=filter_input(INPUT_POST,'q');	
	$add=filter_input(INPUT_POST,'address');
	$sal=filter_input(INPUT_POST,'salary');
	if(!empty($f) && !empty($m) && !empty($l) && !empty($dob) && !empty($g) && !empty($email) && !empty($pho) && !empty($q) && !empty($add) && !empty($sal))
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
			$queryl="SELECT email FROM teacher where email='{$email}'";
            $result=mysqli_query($conn,$queryl);
            $user=mysqli_fetch_all($result,MYSQLI_ASSOC);
            if($user)
			{
				echo "<center>Use Another Email Account</center>";
            }
			else
			{
				$sql="INSERT INTO teacher(firstname,middlename,lastname,dob,gender,email,mobile,q,address,salary)
					values ('$f','$m','$l','$dob','$g','$email','$pho','$q','$add','$sal')";
				if($conn->query($sql))
				{	
					header('location:teacherdetail.html');
				}
				else
				{
					echo "Error:".$sql."<br>".$conn->error;
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