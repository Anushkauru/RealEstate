<?php
    $conn=mysqli_connect("localhost","root","","realestate");
    $edit=$_GET['edit'];
    $q="select * from customerbasicinformation where AadharNumber='$edit'";
    $run=mysqli_query($conn, $q);
    while($row=mysqli_fetch_array($run)){
		 $CustomerName=$row[0];
         $CustomerAddress=$row[1];
         $ContactNumber=$row[2];
         $AadharNumber=$row[3];
		 $EmailID=$row[4];
         $DateOfBirth=$row[5];
         $AddressProof=$row[6];
         $IdentityProof=$row[7];
		 $Profession=$row[8];
         $Requirements=$row[9];
         $Gender=$row[10];
    }
?>
    <form>
		CustomerName<input type="text" name="CustomerName" value="<?php echo $CustomerName; ?>">
        CustomerAddress<input type="text" name="CustomerAddress" value="<?php echo $CustomerAddress; ?>">
        ContactNumber<input type="text" name="CustomerContactNumber" value="<?php echo $ContactNumber; ?>">
        EmailID<input type="text" name="CustomerEmailID" value="<?php echo $EmailID; ?>">
		DateOfBirth<input type="text" name="DateOfBirth" value="<?php echo $DateOfBirth; ?>">
        AddressProof<input type="text" name="CustomerAddressProof" value="<?php echo $AddressProof; ?>">
        IdentityProof<input type="text" name="CustomerIdentityProof" value="<?php echo $IdentityProof; ?>">
        Profession<input type="text" name="CustomerProfession" value="<?php echo $Profession; ?>">
		Requirements<input type="text" name="Requirements" value="<?php echo $Requirements; ?>">
        Gender<input type="text" name="Gender" value="<?php echo $Gender; ?>">
        <button type="button" name="button"><a href=""> Update Record</a></button>
        <br><br>
    </form>
