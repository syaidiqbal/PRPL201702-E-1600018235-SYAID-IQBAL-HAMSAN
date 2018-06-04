<html >
	<head>
	<link rel="stylesheet" href="images/HigherGround.css" type="text/css" />
	<title>Restoran Gue</title>
	</head>
	<body>
	<div id="wrap">
	<div id="top-bg"></div>
	<div id="header">
	<h1 id="logo-text"><a href="#" title="">SYAID IQBAL<span>HAMSAN</span></a></h1>
	<p id="slogan">1600018235</p>
	<div id="header-links">
	</div>
	</div>
	<div id="header-photo"></div>
	<div id="nav">
	<ul>
	<li id="current"><a href="home.html">Home</a></li>
	<li><a href="index.php">Order</a></li>
	<li><a href="galery.php">Galerry</a></li>
	</ul>
	</div>
	<div id="content-wrap">
	<div id="main"> <a name="TemplateInfo"></a>
	<h2><a href="index.html" title=""></a></h2>
	<?php
	// membuat koneksi
	$konek = new mysqli("localhost","root","","balres");

	// mengecek koneksi
	if($konek->connect_error){
	  die("Koneksi Gagal Karena : ". $konek->connect_error);
	}

	$idcustomer = $_GET['idcustomer'];

	$customer = mysqli_query($konek, " SELECT * FROM customer where idcustomer='$idcustomer'");
	$row = mysqli_fetch_array($customer);

	?>

	<html>
	  <head>
		<meta charset="utf-8">
		<title>Restoran Gue</title>
	  </head>
	  <body>
		<a href="order.php">Kembali Ke Menu</a>
		<h1>Edit Data Pesanan</h1>
		<form action="update_customer.php" method="post">
		  <td><input type="hidden" name="idcustomer" value="<?php echo $row['idcustomer'];?>"/></td>

		  <table>
			<tr>
			  <td>No. Meja</td>
			  <td>:</td>

			  <td><input type="text" disabled  value="<?php echo $row['idcustomer'];?>"/></td>
			</tr>
			<tr>
			  <td>Nama Pelanggan</td>
			  <td>:</td>
			  <td><input type="text" name="namacustomer" value="<?php echo $row['namacustomer'];?>"></td>
			</tr>
			<tr>
			  <td>Alamat Pelanggan</td>
			  <td>:</td>
			  <td><input type="text" name="alamatcustomer" value="<?php echo $row['alamatcustomer'];?>"></textarea></td>
			</tr>
			<tr>
			  <td>Makanan</td>
			  <td>:</td>
			  <td><input type="text" name="pilihanmakanan" value="<?php echo $row['pilihanmakanan'];?>"></td>
			</tr>
			<tr>
			  <td>Minuman</td>
			  <td>:</td>
			  <td><input type="text" name="pilihanminuman" value="<?php echo $row['pilihanminuman'];?>"></td>
			</tr>
			<tr>
			  <td colspan="2"></td>
			  <td><input type="submit" value="Submit"></td>
			</tr>

		  </table>
		</form>
	  </body>
	</html>
