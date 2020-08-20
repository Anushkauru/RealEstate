<table border="2">
    <tr>
        <th>CustomerName</th>
        <th>CustomerAddress</th>
        <th> ContactNumber</th>
        <th>AadharNumber</th>
        <th> EmailID </th>
		<th>DateOfBirth</th>
        <th>AddressProof</th>	
        <th> IdentityProof</th>
        <th>Profession</th>
        <th> Requirements </th>
		<th> Gender </th>
		<th> Edit </th>

    </tr>
<?php
     $conn=mysqli_connect("localhost","root","","realestate");
     $q2="select * from customerbasicinformation";
     $run=mysqli_query($conn, $q2);
     while($row=mysqli_fetch_array($run))
     {
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
     ?>
    <tr>
        <td><?php echo $CustomerName; ?></td>
        <td><?php echo $CustomerAddress; ?></td>
        <td><?php echo $ContactNumber; ?></td>
        <td><?php echo $AadharNumber; ?></td>
		<td><?php echo $EmailID; ?></td>
        <td><?php echo $DateOfBirth; ?></td>
        <td><?php echo $AddressProof; ?></td>
        <td><?php echo $IdentityProof; ?></td>
		<td><?php echo $Profession; ?></td>
        <td><?php echo $Requirements; ?></td>
        <td><?php echo $Gender; ?></td>
        <td><a href="edit.php?edit=<?php echo $AadharNumber; ?>"> Edit </a></td>
    </tr>
 <?php } ?>
 </table> 