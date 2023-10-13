<?php 

session_start();

$host="localhost";

$user="root";

$password="";

$db="schoolproject";


$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
	die("connection error");
}
if(isset($_POST['submit']))
{
	$grno=$_POST['grno'];
	$stname=$_POST['stname'];
	$class=$_POST['class'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$fmobile=$_POST['fmobile'];
	$othermobile=$_POST['othermobile'];
	$dise=$_POST['dise'];
	$aadhar=$_POST['aadhar'];
	$address=$_POST['address'];
	$caste=$_POST['caste'];
	$house=$_POST['house'];

	$sql="INSERT INTO addstudent(grno,stname,class,gender,dob,fname,mname,fmobile,othermobile,dise,aadhar,address,caste,house) VALUES ('$grno','$stname','$class', '$gender','$dob','$fname','$mname','$fmobile','$othermobile','$dise','$aadhar','$address','$caste','$house')";

	$result=mysqli_query($data,$sql);

	if($result)
	{
		$_SESSION['message']="Student Added";

		header("location: addstudent.php");
	}
	else
	{
		echo "Not Submitted";
	}
}




?>

