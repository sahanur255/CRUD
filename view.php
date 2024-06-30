<?php
 include('db_connect.php');
?>
<table  width="700" border="1">
	<tr>
		<td>First Name </td>
		<td>Last Name </td>
		<td>Email Id</td>
		<td>Password</td>
		<td>Gender</td>
		<td>Address</td>
		<td>Date Of Birth </td>
		<td>Hobbies</td>
		<td>City</td>
		<td>Country</td>
		<td>Phone Number</td>
		<td>Edit</td>
		<td>Delete</td>
	</tr>
	<?php
	 $sel="select *from register";
	 $qry=mysqli_query($con,$sel);
	 while($rows=mysqli_fetch_array($qry)) {
	
	?>
	
	<tr>
		<td><?php echo $rows['f_name'] ?></td>
		<td><?php echo $rows['l_name'] ?></td>
		<td><?php echo $rows['email'] ?></td>
		<td><?php echo $rows['password'] ?></td>
		<td><?php echo $rows['gender'] ?></td>
		<td><?php echo $rows['address'] ?></td>s
		<td><?php echo $rows['dob'] ?></td>
		<td><?php echo $rows['hobbies'] ?></td>
		<td><?php echo $rows['city'] ?></td>
		<td><?php echo $rows['country'] ?></td>
		<td><?php echo $rows['phone'] ?></td>
		<td><a href="edit.php?id=<?php echo $rows['id'] ?>">Edit</a></td>
		<td><a href="delete.php?id=<?php echo $rows['id'] ?>">Delete</a></td>
	</tr>
<?php
}
?>
</table>
