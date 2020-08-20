<?php

$CustomerName=$_POST['CustomerName'];
$CustomerAddress=$_POST['CustomerAddress'];
$ContactNumber=$_POST['CustomerContactNumber'];
$AadharNumber=$_POST['CustomerAadharNumber'];
$EmailID=$_POST['CustomerEmailID'];
$DateOfBirth=$_POST['DateOfBirth'];
$AddressProof=$_POST['CustomerAddressProof'];
$IdentityProof=$_POST['CustomerIdentityProof'];
$Profession=$_POST['CustomerProfession'];
$Requirements=implode(",",$_POST["Requirements"]);
$Gender=$_POST['Gender'];

//Connection
$conn = mysqli_connect("localhost", "root", "");
if(!$conn)
{
	die('ERROR COULD NOT CONNECT'.mysqli_error());
}

mysqli_select_db($conn,"realestate");

$query = "INSERT INTO CustomerBasicInformation(CustomerName,CustomerAddress,ContactNumber,AadharNumber,EmailID,DateOfBirth,AddressProof,
	IdentityProof,Profession,Requirements,Gender) VALUES ('$CustomerName','$CustomerAddress','$ContactNumber','$AadharNumber','$EmailID','$DateOfBirth','$AddressProof',
	'$IdentityProof','$Profession','$Requirements','$Gender')";

if(!mysqli_query($conn,$query))
{
	die("ERROR INSERTING DATA".mysqli_error($conn));
}
else
{
	echo("DATA INSERTED SUCCESSFULLY");
}

?>