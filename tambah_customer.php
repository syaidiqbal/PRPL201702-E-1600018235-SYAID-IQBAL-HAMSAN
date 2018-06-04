<html >

	<head>
	<link rel="stylesheet" href="images/HigherGround.css" type="text/css" />
	<title>Restoran Gue</title>
	</head>


	<body>
	<div id="wrap">
	<div id="top-bg"></div>
	<div id="header">
	<h1 id="logo-text">
	<a href="#" title="">SYAID IQBAL<span>HAMSAN</span></a></h1>
	<p id="slogan">1600018235</p>
	<div id="header-links">
	</div>
	</div>
	<div id="header-photo"></div>
	<div id="nav">
	<ul>
	<li id="current"><a href="home.php">Daftar Menu</a></li>
	<li><a href="index.php">Order</a></li>
	<li><a href="galery.php">Galerry</a></li>
	
	</ul>
	</div>
	<div id="content-wrap">
	<div id="main"> <a name="TemplateInfo"></a>
	<h2><a href="index.html" title=""></a></h2>
		<meta charset="utf-8">
		<meta charset="utf-8">
		<title>Restoran Gue</title>
	  </head>
	  <body>
		<a href="home.php">Kembali Ke Menu</a>
		<h1>TAMBAH DATA PELANGGAN</h1>
		
		
	<form name="myForm" method="post" action="simpan-pesan.php">
		
		<table border="0">
		<tr>
		<td> Nama Pelanggan </td>
			<td> : </td>
			<td> <input type="text" name="namapelanggan" placeholder="Nama Pelanggan" ><br></td>
		</tr>
		<tr>
			<td> Alamat </td>
			<td> : </td>
			<td> <input type="text" name="alamat" placeholder="Alamat" ></td>
		</tr>
		<tr>
			<td> Tanggal </td>
			<td> : </td>
			<td> <input type="date" name="tanggal"  ></td>
		</tr>
	
		</table>
	<table border="2" cellspacing=0 cellpadding=5 >
			<colgroup align="center">
			<colgroup align="center">
			<colgroup align="center">
			<thead valign="middle">
			<tr>
			<th width="35"><font color="black" size="2">No</font>
			<th width="200"><font color="black" size="2">Makanan/Minuman</font>
			<th width="180"><font color="black" size="2">Harga Satuan</font>
			<th width="100"><font color="black" size="2">Porsi</font>
			</tr>
			<tbody>
			<tr>
			<td>1<td>Nasi Goreng<td><input type="text" value="9000" disabled="true"/><td>
			<input  type="text"  name="order1"  placeholder="" onChange="jumlah()" />
			</tr>
			<tr>
			<td>2<td>Mie Rebus<td><input type="text" value="7000" disabled="true"/><td>
			<input  type="text"  name="order2" value="" onChange="jumlah()" />
			</tr>
			<tr>
			<td>3<td>Spagheti<td><input  type="text"   value="10000" disabled="true"/> <td>
			<input  type="text"  name="order3" value="" onChange="jumlah()"/>
			</tr>
			<tr>
			<td>4<td>Ayam Bakar<td><input  type="text"   value="12000" disabled="true"/>
			<td><input  type="text"  name="order4" value="" onChange="jumlah()" />
			</tr>
			<tr>
			<td>5<td>Ayam Goreng<td><input  type="text"   value="12000" disabled="true"/> <td>
			<input  type="text"  name="order5" value="" onChange="jumlah()"/>
			</tr>
			<tr>
			<td>6<td>Nila Bakar<td><input  type="text"   value="8000" disabled="true"/> <td>
			<input  type="text"  name="order6" value="" onChange="jumlah()"/>
			</tr>
			<tr>
			<td>7<td>Nila Bakar<td><input  type="text"   value="8000" disabled="true"/> <td>
			<input  type="text"  name="order7" value="" onChange="jumlah()"/>
			</tr>
			<tr>
			<td>8<td>Air Mineral<td><input  type="text"   value="500" disabled="true"/> <td>
			<input  type="text"  name="order8" value="" onChange="jumlah()"/>
			</tr>
			<tr>
			<td>9<td>Es Jeruk<td><input  type="text"   value="2000" disabled="true"/> <td>
			<input  type="text"  name="order9" value="" onChange="jumlah()"/>
			</tr>
			<tr>
			<td>10<td>Es Teh<td><input  type="text"   value="2000" disabled="true"/> <td>
			<input  type="text"  name="order10" value="" onChange="jumlah()"/>
			</tr>
			<tr>
			<td>11<td>Teh Hangat<td><input  type="text"   value="1000" disabled="true"/> <td>
			<input  type="text"  name="order11" value="" onChange="jumlah()"/>
			</tr>
			<tr>
			<td>12<td>Kopi Hitam<td><input  type="text"   value="3000" disabled="true"/> <td>
			<input  type="text"  name="order12" value="" onChange="jumlah()"/>
			</tr>
			<tr>
			<td colspan=3 align="right">Total Harga<td><input type="text"  id="total" name="total" value="" />
			</tr>
			<tr>
			<td colspan=3 align="right">Jumlah Total Barang<td><input type="text"  id="totalbarang" name="totalbarang" value="" />
			</tr>
			<tr>
			<td colspan=3 align="right">Diskon<td><input  type="text"  name="diskon"  />
			</tr>
			<tr>
			<td colspan=3 align="right">Bayar<td><input type="text" name="bayar" value="" />
			</tr>
	</table>
<br/>
<input type="reset" value="CANCEL" onClick="resetForm()" />
<input type="submit" value="PESAN" />
</form>
	</div>
	
<script language="JavaScript" type="text/javascript">
function jumlah() {
//var myForm = document.form1;
var nasgor = 9000 * myForm.order1.value;
var mireb = 7000 * myForm.order2.value;
var spag = 10000 * myForm.order3.value;
var abak = 12000 * myForm.order4.value;
var agor = 12000 * myForm.order5.value;
var nibak = 8000 * myForm.order6.value;
var nigor = 8000 * myForm.order7.value;
var amin = 500 * myForm.order8.value;
var ejer = 2000 * myForm.order9.value;
var eteh = 2000 * myForm.order10.value;
var thang = 1000 * myForm.order11.value;
var koptam = 1000 * myForm.order12.value;
var hasil = nasgor+mireb+spag+abak+agor+nibak+nigor+amin+ejer+eteh+thang+koptam;
var jumlah = (nasgor/9000)+(mireb/7000)+(spag/10000)+(abak/12000)+(agor/12000)+(nibak/8000)+(nigor/8000)+(amin/500)+(ejer/2000)+(eteh/2000)+(thang/1000)+(koptam/1000);

	//var coba = bakso;
	//document.myForm.total.value = hasil;
	//eval(myForm.total.value = bakso);
	myForm.totalbarang.value = jumlah;
if (hasil > 50000) {
    myForm.total.value = hasil;
    myForm.diskon.value = 10000;
    myForm.bayar.value = hasil - eval(myForm.diskon.value);
 } else {
    myForm.total.value = hasil;
    myForm.diskon.value = 0;
    document.myForm.bayar.value = hasil - eval(myForm.diskon.value);
 }
}
function resetForm(){
document.form1.reset();
}
</script>
 
	</body>
</html>