<?php
require_once("koneksi.php");
?>

<table border="2px">
	<tr>
		<th>ID</th>
		<th>USER</th>
		<th>PASS</th>
		<th><CENTER style="">
		<span class="style1">Aksi</span></th>
	</tr>

	<?php 
	$query = mysqli_query($con,"SELECT * FROM admin");
	while ($record = mysqli_fetch_array($query)) {
	
	 ?>
	 <tr>
	 	<td><?php echo $record["id_admin"]; ?></td>
	 	<td><?php echo $record["username"]; ?></td>
	 	<td><?php echo $record["password"]; ?></td>
	 </tr>
	 <tr>
	 	
	 </tr>
	 

	 <?php 
	}
	  ?>
</table>
