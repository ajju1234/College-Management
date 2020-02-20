<?php
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
		$email=$_GET['email'];
		$query="DELETE from teacher where email='$email'";
		$data=mysqli_query($conn,$query);
		if($data>0)
		{
			header('location:teacherdetail.html');
		}
		else
		{
			echo '<h2><center><font color="red">Failed to delete data</font></center>
					<button type="cancel" name="cancel" value="cancel"><a href="teacherdetail.html">Cancel</a></button>
					</h2>';
		}
		$conn->close();
	}
?>