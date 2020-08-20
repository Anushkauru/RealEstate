<?php

$PurchaserName=$_POST['PurchaserName'];
$PurchaserMobile=$_POST['PurchaserMobile'];
$Agency=$_POST['Agency'];
$PropertyName=$_POST['PropertyName'];
$Area=$_POST['Area'];
$Amount=$_POST['Amount'];
$BalanceDue=$_POST['BalanceDue'];
$Status=$_POST['Status'];


//Connection
$conn = mysqli_connect("localhost", "root", "");
if(!$conn)
{
	die('ERROR COULD NOT CONNECT'.mysqli_error());
}

mysqli_select_db($conn,"realestate");

$query = "INSERT INTO purchasedetails(PurchaserName,PurchaserMobile,Agency,PropertyName,Area,Amount,BalanceDue,Status) 
VALUES ('$PurchaserName','$PurchaserMobile','$Agency','$PropertyName','$Area','$Amount','$BalanceDue','$Status')";

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