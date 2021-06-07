<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
   require_once("koneksi.php");
?>

<title>Form Login</title>
  
<div align='center'>
  <style>
  body{
    background-image: url("RS.jpg");
  }
</style>
  <form action="proseslogin.php" method="post">
  <h1 style="color:red;">SILAHKAN LOGIN!</h1>
  <table>
  <tbody style="color:blue;">
  <tr><td>Username</td><td> : <input name="username" type="text"></td></tr>
  <tr><td>Password</td><td> : <input name="disini" type="password"></td></tr>
  <tr><td colspan="4" align="right"><input value="Login" type="submit"> <input value="Batal" type="reset"></td></tr>
  <tr><td colspan="4" align="center">Belum Punya akun ? <a href="daftar.php"><b>Daftar</b></a></td></tr>
  <tr><td colspan="4" align="center"><a href="ubahpassword.php"><b>ubah pasword</b></a></td></tr>
  </tbody>
  </table>
  </form>
</div>