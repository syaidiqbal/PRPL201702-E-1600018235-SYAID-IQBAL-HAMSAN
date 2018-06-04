<?php
// membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "balres";

$konek = new mysqli($host, $username, $password, $db_name);

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$user = $_GET['user'];

$sql = "DELETE from customer where namapelanggan = '$user' ";

if($konek->query($sql)){
  echo "Data Pesanan BERHASIL dihapus!<br/>";
}else{
  echo "Data Pesanan GAGAL dihapus : ".$konek->error."<br/>";
}

$konek->close();
echo "<br><a href='tampil_customer.php'>Daftar Pesanan</a>";
?>
