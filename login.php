<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<h1>PENDAFTARAN SISWA DIDIK BARU<br/> SMA Negeri 1 Bululawang</h1>
 
	<div class="kotak_login">
		<h1 class="tulisan_login">Silahkan login</h1>
<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
   require_once("koneksi.php");
?>

<title>Form Login</title> 
<div align='center'>
  <form action="proseslogin.php" method="post">
  <h2>Masuk</h2>
  <table>
  <tbody>
  <tr><td><h3>Username</h3></td>
  <td><input name="username" type="text" class="form_login"></td></tr>
  <tr><td><h3>Password</h3></td>
  <td><input name="password" type="password" class="form_login"></td></tr>
  <tr><td colspan="2" align="right"><input value="Login" type="submit" class="tombol_login">
  <br/>
  <br/>
  <input value="Batal" type="reset" class="tombol_login"></td></tr>
  <tr><td colspan="2" align="center">Belum Punya akun ? <a href="daftar.php" class=""><b>Daftar</b></a></td></tr>
  </tbody>
  </table>
  </form>
</div>
