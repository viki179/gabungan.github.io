<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<style>
  body{
   background-image: url("");
   background-repeat: no-repeat;
   background-position: center top;
   background-size: 600px;
   background-color: rgba(245, 244, 177, 0.993);
   padding: 40px;
   font-family: "Sofia", sans-serif;
   }
 h2 {
 font-weight:755px;
 font-size:85px;
 color: rgba(17, 107, 107, 0.993);
 text-shadow:
   0 0 3px #FFFFA0,
   0 0 5px #FFFF4D,
   0 0 9px #FFFF41,
   0 0 20px #FFFF2A,
   0 0 25px #FFFF2B,
   0 0 30px #FEFE00,
   0 0 40px #F7F700;
}
</style>
</head>
<body>
<?php
   session_start();
   session_destroy();
?>

<div align="center">
  <h2>Anda telah berhasil logout..</h2>
  <h1>Silahkan klik <a href="login.php">Disini</a> untuk login kembali</h1>
</div>
</body>