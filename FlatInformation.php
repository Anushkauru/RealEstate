<?php

$AadharNumber=$_POST['AadharNumber'];
$Location=$_POST['Location'];
$PropertyType=$_POST['PropertyType'];
$MinPrice=$_POST['MinimumPrice'];
$MaxPrice=$_POST['MaximumPrice'];
$BedRooms=$_POST['Bedrooms'];
$BathRooms=$_POST['Bathrooms'];
$Area_Sq_Ft=$_POST['Area_Sq_ft'];
$Status=$_POST['Status'];


//Connection
$conn = mysqli_connect("localhost", "root", "");
if(!$conn)
{
	die('ERROR COULD NOT CONNECT'.mysqli_error());
}

mysqli_select_db($conn,"realestate");

$query = "INSERT INTO FlatInformation(AadharNumber,Location,PropertyType,MinPrice,MaxPrice,BedRooms,BathRooms,Area_Sq_Ft,Status) 
VALUES ('$AadharNumber','$Location','$PropertyType','$MinPrice','$MaxPrice','$BedRooms','$BathRooms','$Area_Sq_Ft','$Status')";

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