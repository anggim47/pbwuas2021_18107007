<?php 
	session_start();
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
			<h3>Dashboard</h3>
			<div class="box">
				<h4>Selamat Datang Bro <?php echo $_SESSION['a_global']->admin_name ?> di Motorbekas37</h4>
			</div>
		</div>
	</div>

	<footer>
		<div class="container">
			<small>Copyright $copy; 2021 - Motorbekas37.</small>
		</div>
	</footer>
</body>
</html>