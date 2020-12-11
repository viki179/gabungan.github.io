<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="style1.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
      <div class="login">

          <div class="avatar">
            <i class="fa fa-user"></i>
          </div>
<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
?>

<title>Form Pendaftaran</title>
<div align='center'>
  <form action="prosesdaftar.php" method="post">
  <table>
  <tbody>
  <tr><td colspan="2" align="center"><h1>Daftar Baru</h1></td></tr>
  <tr>
    <td class="fas fa-envelope-open-text">Username<input name="username" type="text" class="box-login"></td>
  </tr>
    <td class="fas fa-lock">Password<input name="password" type="password" class="box-login"></td>
  </tr>
  <tr><td colspan="2" align="center"><input value="Daftar" type="submit" class="btn-login"> <input value="Batal" type="reset"></td></tr>
  <tr><td colspan="2" align="center">Sudah Punya akun ? <a href="login.php"><b>Login</b></a></td></tr>
  </tbody>
  </table>
  </form> 
</div>
  </head>
  </html>
