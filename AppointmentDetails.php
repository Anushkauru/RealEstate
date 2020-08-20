<?php

$Time=$_POST['Time'];
$Venue=$_POST['Venue'];
$CustomerName=$_POST['CustomerName'];
$AppointmentDate=$_POST['AppointmentDate'];


//Connection
$conn = mysqli_connect("localhost", "root", "");
if(!$conn)
{
	die('ERROR COULD NOT CONNECT'.mysqli_error());
}

mysqli_select_db($conn,"realestate");

$query = "INSERT INTO appointmentdetails(Time,Venue,CustomerName,AppointmentDate) 
VALUES ('$Time','$Venue','$CustomerName','$AppointmentDate')";

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