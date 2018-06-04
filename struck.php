<html>
<head>
	<link href ="struk.css" rel = "stylesheet" type="text/css" media = "all" />
	<script type="text/javascript">
		
	</script>
</head>
<body>

	<div class="container">
		<h1> RESTORAN GUE </h1>
		<h2> BILL PEMBAYARAN </h2>
		<h3> Jalan Pakel Baru Selatan No. 5 , Yogyakarta</h3>
		<h2> ==================== </h2>	

<?php
$tgl_skrg = date("d-m-Y");

$host = "localhost";
$username = "root";
$password = "";
$db_name = "balres";

$konek = new mysqli($host, $username, $password , $db_name);


if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}else {

$user = $_GET['user'];

$sql = "select * from customer where namapelanggan = '$user' ";
$data = $konek->query($sql);
echo "<table border='0'>";

if ($data->num_rows > 0){
	while ($row = $data->fetch_assoc()) {
		echo "<tr>";
		echo "<td>TANGGAL </td>";
		echo "<td> : </td>";
		echo "<td> $tgl_skrg </td>";
		echo "</tr>";
		echo "<td></td>";
		echo "<tr>";
		echo "<td> NAMA PEMESAN </td>";
		echo "<td> : </td>";
		echo "<td>".$row['namapelanggan']."</td>";
		echo "</tr>";
		echo "<td></td>";
		echo "<tr>";
		echo "<td> Nasi Goreng </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu1']*9000;
		echo "</td>";
		echo "<td>".$row['menu1']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Mie Rebus </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu2']*7000;
		echo "</td>";
		echo "<td>".$row['menu2']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Spagheti </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu3']*10000;
		echo "</td>";
		echo "<td>".$row['menu3']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Ayam Bakar </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu4']*12000;
		echo "</td>";
		echo "<td>".$row['menu4']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Ayam Goreng </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu5']*12000;
		echo "</td>";
		echo "<td>".$row['menu5']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Nila Bakar </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu6']*8000;
		echo "</td>";
		echo "<td>".$row['menu6']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Nila Goreng </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu7']*8000;
		echo "</td>";
		echo "<td>".$row['menu7']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Air Mineral </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu8']*500;
		echo "</td>";
		echo "<td>".$row['menu8']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Es Jeruk </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu9']*2000;
		echo "</td>";
		echo "<td>".$row['menu9']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Es Teh </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu10']*2000;
		echo "</td>";
		echo "<td>".$row['menu10']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Teh Hangat </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu11']*1000;
		echo "</td>";
		echo "<td>".$row['menu11']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Kopi Hitam </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu12']*3000;
		echo "</td>";
		echo "<td>".$row['menu12']."</td>";
		echo "</tr>";

		echo "<td></td>";
		echo "<tr>";
		echo "<td><b> JUMLAH BARANG </td>";
		echo "<td><b> : </td>";
		echo "<td></td>";
		echo "<td><b>".$row['totalbarang'];
		echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><b> TOTAL HARGA </td>";
		echo "<td><b> : </td>";
		echo "<td></td>";
		echo "<td><b>".$row['bayar'];
		echo "</td>";
		echo "</tr>";
		echo "</table>";

	}	
}else{
	echo"Tidak dapat di cetak";
}


}
$konek->close();
?>
</div>
<h3><a href="#" onclick="window.print()"> Print </a> </h3>	
</body>
</html>