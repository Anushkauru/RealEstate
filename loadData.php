<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"realestate");

$output='';

if(isset($_POST["id"]))
{
	if($_POSt["id"] != '')
	{
		$sql= "SELECT AmountPerUnit FROM materialadmin WHERE id='".$_POST["id"]."' ";
		
	}
	else
	{
		
	}
	
	$result=mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result))
	{
		$output.=$row["AmountPerUnit"];
	}

}
?>