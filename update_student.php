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
	
	$id=$_GET['student_id'];

	$sql="SELECT * FROM addstudent WHERE id='$id'";

	$result=mysqli_query($data,$sql);

	$info=$result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form to Google Sheets</title>
    <style type="text/css">
        body
        {
            background-color: #344a72;
            font-family: 'roboto', sans-serif;
        }
        .det
        {
            width: 600px;
            height: 100%;
            background-color: white;
            margin: auto;
            border-radius: 5px;
        }
        h1
        {
            text-align: center;
            margin-top: 35px;
        }
        h4
        {
            text-align: center;
        }
        form
        {
            width: 600px;
            margin-left: 20px;
        }
        form label
        {
            margin-top: 100px;
            font-size: 18px;
        }
        
        input
         {   width: 250px;
            padding: 7px ;
            border:none;
            border: 2px solid grey;
            border-radius:5px ;
            outline: none;

        }
        input[name="grno"]
         {   width: 150px;
            padding: 7px ;
            border:none;
            border: 2px solid grey;
            border-radius:5px ;
            outline: none;

        }
        input[name="class"]
         {   width: 150px;
            padding: 7px ;
            border:none;
            border: 2px solid grey;
            border-radius:5px ;
            outline: none;

        }
        input[name="stname"]
         {   width: 550px;
            padding: 7px ;
            border:none;
            border: 2px solid grey;
            border-radius:5px ;
            outline: none;

        }
        input[name="gender"]
         {   width: 150px;
            padding: 7px ;
            border:none;
            border: 2px solid grey;
            border-radius:5px ;
            outline: none;

        }
        input[name="dob"]
         {   width: 150px;
            padding: 7px ;
            border:none;
            border: 2px solid grey;
            border-radius:5px ;
            outline: none;

        }
                

        textarea
        {
            width: 550px;
            padding: 7px ;
            border:none;
            border: 2px solid grey;
            border-radius:5px ;
            outline: none;

        }
        button
        {
            width: 250px;
            padding: 35px ;
            margin-top: 20px;
            margin-bottom: 35px;
            border: none;
            background-color: #49c1a2;
            color: white;
            font-size: 18px;

        }
    </style>
</head>
<body>
   
	

    <div class="det">
    <h1>Update Entry Form</h1>
    <h4>Enter All Details in Capital Letters Only</h4>
    <form action="data_check.php" method="POST" id="contact-form">
        <label for="gr">Gr No:</label>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;
        <label for="cls">Class:</label>
        <label><font size="3px">(Ex:- I-A,III-A,IV-A)</font></label> <br>
        <input type="text" name="grno" min="100" max="4000" value="<?php echo"{$info['grno']}";?>" required>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
        <input type="text" name="class" value="<?php echo"{$info['class']}";?>" required><br><br>
        <label for="stname">Student's Name:</label><br>
        <input type="text" name="stname" value="<?php echo"{$info['stname']}";?>" required><br><br>
        <label for="gen">Gender</label>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <label for="dob">Date of Birth</label>
        <label><font size="3px">(Ex-01/01/2000)</font></label> <br>
        <input type="text"  name="gender" value="<?php echo"{$info['gender']}";?>" required>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <input type="text"  name="dob" value="<?php echo"{$info['dob']}";?>" required><br><br>
        <label for="fname">Father's Name</label>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
        <label for="mname">Mother's Name</label>
        <input type="text"  name="fname" value="<?php echo"{$info['fname']}";?>" required>
        &emsp;
        <input type="text"  name="mname" value="<?php echo"{$info['mname']}";?>" required><br><br>
        <label for="mob">Father's Mobile Number</label>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <label for="wts">Whatsapp Number</label>
        <input type="text" name="fmobile" value="<?php echo"{$info['fmobile']}";?>" required>
        &emsp;
        <input type="text"  name="othermobile" value="<?php echo"{$info['othermobile']}";?>" required><br><br>
        <label for="dise">DISE Number</label>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <label for="adhr">Aadhar Number</label>
        <input type="text"  name="dise" value="<?php echo"{$info['dise']}";?>" required>
        &emsp;
        <input type="text"  name="aadhar" value="<?php echo"{$info['aadhar']}";?>" required><br><br>
        <label for="caste">Caste</label>
        <input type="text"  name="caste"value="<?php echo"{$info['caste']}";?>"><br><br>
        <label for="house">House</label>
        <input type="text"  name="house"value="<?php echo"{$info['house']}";?>"><br><br>
        <label for="add">Address</label><br>
        <textarea  name="address" value="<?php echo"{$info['address']}";?>" required></textarea> <br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <button type="submit" name="update">Update</button>
    </form>
</div>
