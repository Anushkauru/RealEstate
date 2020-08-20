<?php
	require 'DropDownConnection.php';
	
	if(isset($_POST['mid']))
	{
		$db=new DropDownConnection;
		$conn=$db->connect();
		
		$stmt=$conn->prepare("SELECT * FROM materialclient where manufacturer_id= " . $_POST['mid']);
		$stmt->execute();
		$Materials=$stmt->fetchAll(PDO::FETCH_ASSOC);
		
		echo json_encode($Materials);
	}
	
	function loadManufacturers()
	{
		$db=new DropDownConnection;
		$conn=$db->connect();
		
		$stmt=$conn->prepare("SELECT * FROM materialadmin");
		$stmt->execute();
		$Manufacturers=$stmt->fetchAll(PDO::FETCH_ASSOC);
		
		return $Manufacturers;
	}

?>