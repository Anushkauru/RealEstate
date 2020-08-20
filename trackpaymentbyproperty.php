<?php

$PropertyName=$_POST['PropertyName'];
$Cost=$_POST['Cost'];
$PaymentDate=$_POST['PaymentDate'];
$BalanceDue=$_POST['BalanceDue'];
$AmountPaid=$_POST['AmountPaid'];
$InstallmentDate=$_POST['InstallmentDate'];



//Connection
$conn = mysqli_connect("localhost", "root", "");
if(!$conn)
{
	die('ERROR COULD NOT CONNECT'.mysqli_error());
}

mysqli_select_db($conn,"realestate");

$query = "INSERT INTO trackpaymentbyproperty(PropertyName,Cost,PaymentDate,BalanceDue,AmountPaid,InstallmentDate) 
VALUES ('$PropertyName','$Cost','$PaymentDate','$BalanceDue','$AmountPaid','$InstallmentDate')";

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