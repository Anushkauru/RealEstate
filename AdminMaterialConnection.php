<?php
$MaterialName=$_POST['MaterialName'];
$Manufacturer=$_POST['Manufacturer'];
$Quantity=$_POST['Quantity'];
$AmountPerUnit=$_POST['AmountPerUnit'];
$Cost=$Quantity*$AmountPerUnit;
//Connection
$conn = mysqli_connect("localhost", "root", "");
if(!$conn)
{
	die('ERROR COULD NOT CONNECT'.mysqli_error());
}
mysqli_select_db($conn,"realestate");
//insert those values in tables
$query = "INSERT INTO materialadmin(MaterialName,Manufacturer,Quantity,AmountPerUnit,Cost) VALUES ('$MaterialName','$Manufacturer','$Quantity','$AmountPerUnit','$Cost')";
if(!mysqli_query($conn,$query))
{
	die("ERROR INSERTING DATA".mysqli_error($conn));
}
else
{
	header("Location: index.html"); //after onclick event redirect to main page i.e index.html
}
?>



