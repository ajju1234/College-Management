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
		$queryl="SELECT * FROM student";
        $result=mysqli_query($conn,$queryl);
        $user=mysqli_num_rows($result);
        if($user!=0)
		{
			?>
			<style>
				body {font-size: 120%; background:black;}
				td
				{
					background-color:#F8F8FF;
					padding:10px;
				}
				th
				{
					color:white;
					background-color:#5F9EA0;
					padding:10px;
				}
			</style>
			<table>
				<tr>
					<th>F_Name</th>
					<th>M_Name</th>
					<th>L_Name</th>
					<th>DOB</th>
					<th>Gender</th>
					<th>Email</th>	
					<th>Phone_No.</th>
					<th>10th</th>
					<th>12th</th>
					<th>Class</th>
					<th>Course</th>
					<th>Address</th>
					<th colspan="2">Operation</th>
				</tr>
			<?php
			while($data=mysqli_fetch_assoc($result))
			{
				echo "<tr>
						<td>".$data['firstname']."</td>
						<td>".$data['middlename']."</td>
						<td>".$data['lastname']."</td>
						<td>".$data['dob']."</td>
						<td>".$data['gender']."</td>
						<td>".$data['email']."</td>
						<td>".$data['mobile']."</td>
						<td>".$data['10th']."</td>
						<td>".$data['12th']."</td>
						<td>".$data['class']."</td>
						<td>".$data['course']."</td>
						<td>".$data['address']."</td>
						<td><a href='studentupdate.php ? email=$data[email] & phone=$data[mobile] & class=$data[class] & address=$data[address]'>edit</a></td>
						<td><a href='studentdelete.php ? email=$data[email]'>delete</a></td>
					</tr>";
			}
		}
		else
		{
			echo "NO RECORD";
		}
	}
?>
</table>