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
		<div class="big-logo">SILAHKAN MENDAFTAR</div>   
		<?php include 'menu.php';?>
	</div>
	
<div class="kotak_login">
		<p class="tulisan_login">DAFTAR</p>

		<form>
			<label>Masukkan Nama</label>
			<input type="text" name="user" class="form_login" placeholder="nama">
			<label>Masukkan Username</label>
			<input type="text" name="user" class="form_login" placeholder="username">
			<label>Masukkan Password</label>
			<input type="text" name="pass" class="form_login" placeholder="password">

			<a href="login.php"><input type="submit" class="tombol_login" value="DAFTAR"></input></a>
			</br>
			<center>
				<a class="link" href="home.php">klik di sini untuk kembali</a>
			</center>
		</form>
</div>
	
</body>
</html>
<?php
?> 