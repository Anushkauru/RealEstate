
<?php

require 'ClientMaterial.php';

$AadharNumber=$_POST['CustomerAadharNumber'];
$MaterialName=$_POST['materialclient'];
$ManufacturerId=$_POST['materialadmin'];
$Quantity=$_POST['Quantity'];


//Connection
$conn = mysqli_connect("localhost", "root", "");
if(!$conn)
{
	die('ERROR COULD NOT CONNECT'.mysqli_error());
}

	mysqli_select_db($conn,"realestate");
		
		$records=mysqli_query($conn,"SELECT Manufacturer from materialadmin where id=". $ManufacturerId);
		while ($materialadmin = mysqli_fetch_assoc($records)){
               $res=$materialadmin['Manufacturer'];
		}
		
		$records1=mysqli_query($conn,"SELECT AmountPerUnit from materialadmin where id=". $ManufacturerId);
		while ($AmountPerUnit = mysqli_fetch_assoc($records1)){
				   $res1=$AmountPerUnit['AmountPerUnit'];
		}
		$Cost=$Quantity*$res1;


		$query = "INSERT INTO materialclient(manufacturer_id,AadharNumber,MaterialName,Manufacturer,Quantity,AmountPerUnit,Cost) VALUES ('$ManufacturerId','$AadharNumber','$MaterialName','$res','$Quantity','$res1','$Cost')";
		$allowed ="UPDATE materialadmin SET Quantity=Quantity-'$Quantity' , Cost=Quantity*AmountPerUnit WHERE id='$ManufacturerId'";


		if(!mysqli_query($conn,$query))
		{
			die("ERROR INSERTING DATA".mysqli_error($conn));
		}
		else
		{
			$msg="Confirm Submission?";
			echo "<script type='text/javascript'>alert('$msg');</script>";
			header("Location: index.html");
			
		}

		if(!mysqli_query($conn,$allowed))
		{
			die("ERROR UPDATING DATA".mysqli_error($conn));
		}
		
	


		
?>