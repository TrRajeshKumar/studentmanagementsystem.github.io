<?php

	session_start();

	if(!isset($_SESSION['username']))
	{
		header("location:index.php");

	}
	elseif ($_SESSION['usertype']=='student') {
		header("location:index.php");
	}


	$host="localhost";
	$user="root";
	$password="";
	$db="schoolproject";

	$data=mysqli_connect($host,$user,$password,$db);

	$sql="SELECT * FROM addstudent";

	$result=mysqli_query($data,$sql);



?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Students Details</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
	<?php
		include 'admin_css.php';
	?>
	<style type="text/css">
		.content
		{
			margin-left: 20%;
			margin-top: 5%;
		}
		table, th, td 	
		{
		  border:1px solid black;
		  border-collapse: collapse;
		  width: 100%;
		}
		.table_th
		{
			padding: 20px;
			font-size: 20px;
			margin: auto;
			width: 100%;
		}
		.table_td
		{
			padding: 10px;
			font-size: 20px;
			width: 70%;
		}
		tr:nth-child(even) {
  		background-color: #D6EEEE;
		}
	</style>
</head>
<body>
	<?php

		include 'admin_sidebar.php';
	?>

	<div class="content">

		<h1>List of Students</h1>

		<table border="5px" style="width:100%">

			<tr>
				<th class="table_th">Gr No.</th>
				<th class="table_th">Student Name</th>
				<th class="table_th" style="width:70%">Class</th>
				<th class="table_th">Gender</th>
				<th class="table_th">Date of Birth</th>
				<th class="table_th">Father's Name</th>
				<th class="table_th">Mother's Name</th>
				<th class="table_th">Mobile Number</th>
				<th class="table_th">Other Number</th>
				<th class="table_th">DISE Number</th>
				<th class="table_th">Aadhar Number</th>
				<th class="table_th">Address</th>
				<th class="table_th">Caste</th>
				<th class="table_th">House</th>
				<th class="table_th">Edit</th>
			</tr>

			<?php

			while ($info=$result->fetch_assoc()) 
			{
				
			
			?>
			<tr>
				<td class="table_td">
					
					<?php echo"{$info['grno']}"; ?>
				</input>
				</td>
				<td class="table_td">
					<?php echo"{$info['stname']}"; ?>
				</td>
				<td class="table_td">
					<?php echo"{$info['class']}"; ?>
				</td>
				<td class="table_td">
					<?php echo"{$info['gender']}"; ?>
				</td>
				<td class="table_td">
					<?php echo"{$info['dob']}"; ?>
				</td>
				<td class="table_td">
					<?php echo"{$info['fname']}"; ?>
				</td>
				<td class="table_td">
					<?php echo"{$info['mname']}"; ?>
				</td>
				<td class="table_td">
					<?php echo"{$info['fmobile']}"; ?>
				</td>
				<td class="table_td">
					<?php echo"{$info['othermobile']}"; ?>
				</td>
				<td class="table_td">
					<?php echo"{$info['dise']}"; ?>
				</td>
				<td class="table_td">
					<?php echo"{$info['aadhar']}"; ?>
				</td>
				<td class="table_td">
					<?php echo"{$info['address']}"; ?>
				</td>
				<td class="table_td">
					<?php echo"{$info['caste']}"; ?>
				</td>
				<td class="table_td">
					<?php echo"{$info['house']}"; ?>
				</td>
				<td class="table_td">
					<?php echo"<a class='btn btn-primary' href='update_student.php?student_id={$info['id']}'>Update</a>";?>
				</td>

			</tr>

			<?php

			}

			?>

		</table>


	</div>

</body>
</html>