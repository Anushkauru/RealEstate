<?php

$ReportDate=$_POST['ReportDate'];
$ManagerName=$_POST['ManagerName'];
$ReportNumber=$_POST['ReportNumber'];
$MembersOfSalesTeam=$_POST['MembersOfSalesTeam'];
$NumberOfSales=$_POST['NumberOfSales'];



//Connection
$conn = mysqli_connect("localhost", "root", "");
if(!$conn)
{
	die('ERROR COULD NOT CONNECT'.mysqli_error());
}

mysqli_select_db($conn,"realestate");

$query = "INSERT INTO generatesalereportmonthly(ReportDate,ManagerName,ReportNumber,MembersOfSalesTeam,NumberOfSales) 
VALUES ('$ReportDate','$ManagerName','$ReportNumber','$MembersOfSalesTeam','$NumberOfSales')";

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