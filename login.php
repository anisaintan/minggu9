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
	<h1>SELAMAT DATANG! </h1></br>
	<center><h3/></br>SILAHKAN MASUK TERLEBIH DAHULU</h3></center>

	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>

		<form>
			<label>Username</label>
			<input type="text" name="user" class="form_login" placeholder="username">

			<label>Password</label>
			<input type="text" name="pass" class="form_login" placeholder="password">

			<input type="submit" name="login" class="tombol_login" value="LOGIN">

			<br/>
			<br/>
			<center>
				<a class="link" href="join.php">klik di sini untuk membuat akun</a>
			</center>
		</form>
		<?php
			if(isset($_POST ['login'])){
				$user = $_POST['username'];
				$pass = $_POST['password'];
				
				$query = $koneksi->prepare("SELECT * FROM login WHERE username = :user AND passsword = : pass");
				$query->bindValue (':user', $user);
				$query->bindValue (':pass', $pass);
				$query->execute();
				$cek = $query->rowCount();
				if ($cek > 0){
					$data = $query->fetch();
					$_SESSION ['username'] = $data ['id'];
					$_SESSION ['nama'] = $data ['nama'];
					echo "<script>alert('SELAMAT! LOGIN BERHASIL');</script>";
					if ($data['hak']==1)
					{
						header ("Location: index.php");
					}
					else{
						echo "<script>alert('LOGIN GAGAL! SILHAKAN ULANGI LAGI!');</script>";
					}
				}
			}
			?>
	</div>
</body>
</html>
<?php
?> 