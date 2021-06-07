<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
<style>
  body{
    background-image: url("RS.jpg");
  }
</style>
</head>
  <div class="container" align='center'>
      <div class="content" >
        <div class="box-daftar">
            
            <LEGEND style="color:red;">DAFTAR DISINI!</LEGEND>
            <form action="prosesdaftar.php" method="post" name="random_form" style="color:blue;">
              Nama lengkap<br>
              <input type="text" name="username" onkeyup="huruf(this);" /><br>
              Telepon<br>
              <input type="text" name="telepon" maxlength="13" onkeyup="angka(this);"/><br>
              Email<br>
              <input type="email" name="email" id="email"><br>
              Password<br>
              <input type="text" name="disini" pattern="[a-zA-Z0-9]{8,12}"><br><br> 
              <input type="button" value="Generate Password" onclick="random_all();">
              <input type="submit" onClick="validasi()" value="Submit"><br>
              Sudah daftar ? <a href="login.php">login</a>
            </form>
            
        </div>
      </div>
  </div>

</body>
<script type="text/javascript">
  function huruf(a){
    if (!/^[A-za-z]*$/.test(a.value)) {
      a.value = a.value.substring(0,a.value.length-1);
    }
  }
  
  function angka(a){
    if (!/^[0-9]*$/.test(a.value)) {
      a.value = a.value.substring(0,a.value.length-1);
    }
  }

  function cekEmail(nilai, pesan) {
        var email = /^([a-zA-Z0-9_.+- ])+@(([a-zA-Z0-9- ])+.)+([a-zA-Z0-9- ]{2,4})+$/;
            if(nilai.value.match(email)) {
                return true;
            }
            else {
                alert(pesan);
                nilai.focus();
                return false;
             }
    }
    function validasi() {
        cekEmail(document.getElementById('email'), 'Email tidak benar!!');
    }
  
 function random_all() {
        var campur = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
        var panjang = Math.floor(Math.random() * 2);
        var panjang1 = 8;
        var panjang2 = 12;
        var random_all = '';
        if (panjang == 0) {
          for (var i=0; i<panjang1; i++) {
            var hasil = Math.floor(Math.random() * campur.length);
            random_all += campur.substring(hasil,hasil+1);
        }
        document.random_form.disini.value = random_all;
        }else if (panjang == 1) {
          for (var i=0; i<panjang2; i++) {
            var hasil = Math.floor(Math.random() * campur.length);
            random_all += campur.substring(hasil,hasil+1);
        }
        document.random_form.disini.value = random_all;
        }
    }
  </script>
</html>