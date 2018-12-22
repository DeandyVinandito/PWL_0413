<?php 
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'berita_0413';

$con = mysqli_connect($server,$username,$password);

if (mysqli_connect_error()) 
{
	echo "failed to connect to MYSQL".mysqli_connect_error();
}
else
{
	echo "koneksi sukses";
}
 ?>
