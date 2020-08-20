<?php

$TotalAmount=$_POST['TotalAmount'];
$AmountPaid=$_POST['AmountPaid'];
$AmountDue=$_POST['AmountDue'];
$PaymentDate=$_POST['PaymentDate'];
$PaymentMode=$_POST['PaymentMode'];
$NextPaymentDate=$_POST['NextPaymentDate'];


//Connection
$conn = mysqli_connect("localhost", "root", "");
if(!$conn)
{
	die('ERROR COULD NOT CONNECT'.mysqli_error());
}

mysqli_select_db($conn,"realestate");

$query = "INSERT INTO billinginformation(TotalAmount,AmountPaid,AmountDue,PaymentDate,PaymentMode,NextPaymentDate) 
VALUES ('$TotalAmount','$AmountPaid','$AmountDue','$PaymentDate','$PaymentMode','$NextPaymentDate')";

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