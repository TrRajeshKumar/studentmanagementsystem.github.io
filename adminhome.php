
<?php
session_start();

if(!isset($_SESSION['username']))
{
	header("location: index.php");
}
elseif ($_SESSION['usertype']=='student') {
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
	<?php
		include 'admin_css.php';
	?>
</head>
<body>
	<?php

		include 'admin_sidebar.php';
	?>
	</body>
	<div>
		
	</div>
</body>
</html>