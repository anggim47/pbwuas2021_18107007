<?php 
	session_start();
	include 'db.php';
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Motorbekas37</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<div class="container">
		    <h1><a href="dashboard.php">Motorbekas37</a></h1>
		    <ul>
			    <li><a href="dashboard.php">Dashboard</a></li>
			    <li><a href="profil.php">Profil</a></li>
			    <li><a href="data-kategori.php">Data Kategori</a></li>
			    <li><a href="data-merek.php">Data Merek</a></li>
			    <li><a href="keluar-bro.php">Keluar Bro</a></li>
		    </ul>
		</div>
	</header>

	<div class="section">
		<div class="container">
			<h3>Tambah Data Kategori</h3>
			<div class="box">
				<form action="" method="POST">
					<input type="text" name="nama" placeholder="Nama Kategori" class="input-control" required>
					<input type="submit" name="submit" value="Submit" class="btn">
				</form>
				<?php 
					if(isset($_POST['submit'])){

						$nama = ucwords($_POST['nama']);

						$insert = mysqli_query($conn, "INSERT INTO tb_category VALUES (
											null,
											'".$nama."') ");
						if($insert){
							echo '<script>alert("Tambah Data Berhasil")</script>';
							echo '<script>window.location="data-kategori.php"</script>';
						}


					}
				?>
			</div>
		</div>
	</div>

	<footer>
		<div class="container">
			<small>Copyright $copy; 2021 - Motorbekas.</small>
		</div>
	</footer>
</body>
</html>