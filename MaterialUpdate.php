<?php

$submit=$_POST['SubmitButton'];



//Connection
$conn = mysqli_connect("localhost", "root", "");
if(!$conn)
{
	die('ERROR COULD NOT CONNECT'.mysqli_error());
}

mysqli_select_db($conn,"realestate");

if(isset($_POST['SubmitButton'])){

    $allowed = mysqli_query($conn,"UPDATE materialadmin SET Quantity=Quantity-'$Quantity' WHERE id='$ManufacturerId'");

}

if(!mysqli_query($conn,$allowed))
{
	die("ERROR UPDATING DATA DATA".mysqli_error($conn));
}
else
{
	echo("DATA UPDATED SUCCESSFULLY");
}


?>