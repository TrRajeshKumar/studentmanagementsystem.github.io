<?php
session_start();

if(!isset($_SESSION['username']))
{
	header("location: index.php");
}
elseif ($_SESSION['usertype']=='admin') {
	header("location: index.php");
}
elseif ($_SESSION['usertype']=='teacher') {
	header("location: index.php");
}
?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Home</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
	<header class ="header">
		
		<a href="">Student Dashboard</a>
		<div class="logout">
		
			<a href="logout.php" class="btn btn-danger">Logout</a>
		</div>
	</header>

	<aside>
		<ul>
			<li>
				<a href="">Profile</a>
			</li>
			<li>
				<a href="">Result</a>
			</li>
			
			
		</ul>
	</aside>

	<div>
		
	</div>
</body>
</html>