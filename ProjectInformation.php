<?php

$RERANumber=$_POST['RERANumber'];
$Facilities=$_POST['Facilities'];
$ProjectStatus=$_POST['ProjectStatus'];



//Connection
$conn = mysqli_connect("localhost", "root", "");
if(!$conn)
{
	die('ERROR COULD NOT CONNECT'.mysqli_error());
}

mysqli_select_db($conn,"realestate");

$query = "INSERT INTO ProjectInformation(RERANumber,Facilities,ProjectStatus) 
VALUES ('$RERANumber','$Facilities','$ProjectStatus')";

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