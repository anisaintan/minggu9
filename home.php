<?php 
	include 'conn.php'; 
	include 'conf.php'; 
?> 

<!DOCTYPE html> 

<html>
<head>
	<title></title>  
	<link rel="stylesheet" type="text/css" href="assets/css/css.css"> 
</head>
<body>  
	<div class="top-gray"></div>
	<div class="header">
		<div class="big-logo">SELAMAT DATANG</div>   
		<?php include 'menu.php';?>
	</div>
<h1>SELAT DATANG!</h1>
 
<h2>Tambah Data Sekolah</h2>
<form method="POST" action="proses/sekolah/save.php"
enctype="multipart/form-data">
<table>
	<tr> 
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr> 
	<tr> 
		<td>Alamat</td>
		<td><input type="text" name="alamat"></td> 
	</tr> 
	<tr> 
		<td>Logo</td>
		<td><input type="file" name="logo"></td> 
	</tr> 
	<tr> 
		<td></td>
		<td><button type="submit">Simpan</button></td> 
	</tr> 
</table>
 </form>