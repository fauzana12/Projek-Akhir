<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:koneksi.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>

<title>Halaman Sukses Login</title>
<div align='center' style="color:red;">
	<style>
  body{
    background-image: url("RS.jpg");
  }
</style>
   Selamat Datang, <b><?php echo $username;?></b> <a href="logout.php"><b>logout</b></a>
</div>