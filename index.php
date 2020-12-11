<!DOCTYPE html>
<html>
<head>
<style>
   body{
   background-image: url("https://lh3.googleusercontent.com/proxy/4oRiFPMRZn86lI9hVVgkfGaOEI3LABGOeTykGQrWIeWdDhEolsomZdFQ9BN-xoI2V8f24u86U-_vLuYok2WemBNv0A9v-vW4WRbw7Mthma3dVVQ05cv3utoUkujB5eEGewHtMPU");
   background-repeat: no-repeat;
   background-position: center top;
   background-size: 600px;
   background-color: #f5e6fe;
   padding: 40px;
   }
   h2 {
   font-weight:680px;
   font-size:135px;
   color:#45BEF7;
   text-shadow:
   0px 1px #577079,
   0px 2px #577079,
  0px 3px #577079,
   0px 4px #577079,
   0px 5px #577079,
   0px 6px #577079,
   0px 7px #577079,
   0px 7px 10px #333;
}
</style>
</head>
<body>
<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>

<title>Halaman Sukses Login</title>
<div align='center'>
  <h2> Selamat Datang <b><br><?php echo $username;?></b></h2><a href="logout.php"><b>Logout</b></a>
</div>
</body>