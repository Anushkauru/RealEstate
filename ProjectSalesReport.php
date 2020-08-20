<?php

$PropertyName=$_POST['PropertyName'];
$ReportDate=$_POST['ReportDate'];
$Amount=$_POST['Amount'];
$Invoice=$_POST['Invoice'];
$TotalAmount=$_POST['TotalAmount'];
$PaidAmount=$_POST['PaidAmount'];
$BalanceDue=$_POST['BalanceDue'];


//Connection
$conn = mysqli_connect("localhost", "root", "");
if(!$conn)
{
	die('ERROR COULD NOT CONNECT'.mysqli_error());
}

mysqli_select_db($conn,"realestate");

$query = "INSERT INTO ProjectSalesReport(PropertyName,ReportDate,Amount,Invoice,TotalAmount,PaidAmount,BalanceDue) 
VALUES ('$PropertyName','$ReportDate','$Amount','$Invoice','$TotalAmount','$PaidAmount','$BalanceDue')";

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