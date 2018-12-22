<?php 
require_once("koneksi.php")
 ?>

 <h2>Tambah Admin</h2>
 <form action="" method="POST">
 	<table width="200" border="0">
 		<tr>
 			<td>Username</td>
 			<td><input type="text" name="username"></td>
 		</tr>
 		<tr>
 			<td>Password</td>
 			<td><input type="password" id="password" name="password"></td>
 		</tr>
 		<tr>
 			<td colspan="2"><input type="submit" name="submit" value="Insert"></td>
 		</tr>
 	</table>
 </form>

 <?php 
if (isset($_POST['submit'])) {
	$query="INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES ('NULL', '".$_POST[username]."', '".$_POST[password]."');";
	$hasil=mysqli_query($con,$query) or die (mysqli_error($con));

  ?>
  <script>
  	alert("data sukses di tambah");
  	window.location='admin.php';
  </script>
  <?php 
  	}
?>