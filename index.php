<?php
include'con.php';
include 'conf.php'; 
	session_start();
	if(!isset($_SESSION['username'])){
		header("location:login.php");
	}else{

?>

<!DOCTYPE html>

<html>

<head>

	<title>Halaman Beranda</title>

	<link rel="stylesheet" type="text/css" href="styles.css">

</head>

<body>

	<section>

		<center>

			<font style="font-size:40px;">Selamat Datang,<?php echo $_SESSION['user'] ?> 

			ini adalah Halaman Beranda</font>

		</center>

	</section>

</body>

</html>

<?php } ?>