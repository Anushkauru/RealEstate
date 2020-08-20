<?php

$firstname=$_POST['firstname'];
$lasttname=$_POST['lasttname'];
$emailid=$_POST['emailid'];
$subjectname=$_POST['subjectname'];
$message=$_POST['message'];



//Connection
$conn = mysqli_connect("localhost", "root", "");
if(!$conn)
{
	die('ERROR COULD NOT CONNECT'.mysqli_error());
}

mysqli_select_db($conn,"realestate");

$query = "INSERT INTO contact(firstname,lasttname,emailid,subjectname,message) 
VALUES ('$firstname','$lasttname','$emailid','$subjectname','$message')";

if(!mysqli_query($conn,$query))
{
	die("ERROR INSERTING DATA".mysqli_error($conn));
}
else
{
	$msg="Data inserted successfully.";
			echo "<script type='text/javascript'>alert('$msg');</script>";
			header("Location: index.html");
}

?>