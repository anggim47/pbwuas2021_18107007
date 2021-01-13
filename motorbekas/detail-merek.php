<?php
	error_reporting(0); 
	include 'db.php';
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
	$a = mysqli_fetch_object($kontak);

	$merek = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_id = '".$_GET['id']."' ");
	$p = mysqli_fetch_object($merek);
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
		    <h1><a href="index.php">Motorbekas37</a></h1>
		    <ul>
			    <li><a href="merek.php">Merek</a></li>
			 	
		    </ul>
		</div>
	</header>

	<div class="search">
		<div class="container">
			<form action="merek.php">
				<input type="text" name="search" placeholder="Cari Merek" value="<?php echo $_GET['search'] ?>">
				<input type="hidden" name="kat" value="<?php echo $_GET['kat'] ?>">
				<input type="submit" name="cari" value="Cari Merek">
			</form>
		</div>
	</div>

	<div class="section">
		<div class="container">
			<h3>Detail Motor</h3>
			<div class="box">
				<div class="col-2">
					<img src="produk/<?php echo $p->product_image ?>"width="100%">
				</div>
				<div class="col-2">
					<h3><?php echo $p->product_name ?></h3>
					<h4>Rp. <?php echo number_format($p->product_price) ?></h4>
					<p>Deskripsi :<br>
						<?php echo $p->product_description ?>
					</p>
					<p><a href="https://api.Whatsapp.com/send?phone=<?php echo $a->admin_telp ?>&text=Bro, ane saya mau beli motor ente." target="_blank">
						Hubungi Via Whatsapp 
						<img src="img/5ae21cc526c97415d3213554.png" width="70px"></a>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="footer">
		<div class="container">
			<h4>Alamat</h4>
			<p><?php echo $a->admin_address ?></p>

			<h4>Email</h4>
			<p><?php echo $a->admin_email ?></p>

			<h4>No Tlp</h4>
			<p><?php echo $a->admin_telp ?></p>
			<small>Copyright &copy; 2021 - Motorbekas37</small>
		</div>
	</div>
</body>
</html>