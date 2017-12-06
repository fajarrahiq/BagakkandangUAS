<html>
<head>
	<title> BagakKandang.co </title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/Home.css">
	<link rel="stylesheet" href="<?php echo base_url();?>https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<header>
<menu>
	<br><h4 align="right"><a href="<?php echo base_url();?>index.php/C_Home/Login">Login</a>&ensp; or &ensp;<a href="<?php echo base_url();?>index.php/C_Home/Login">Register</a>&ensp;<i class="fa fa-renren"></i></h4><br>
</menu>
<menu>
	<ul>
		<li><a href="<?php echo base_url();?>index.php/C_home/index">HOME</a></li>
		<li><a class="active">PRODUK</a></li>
		<li><a href="<?php echo base_url();?>index.php/C_home/caraorder">CARA ORDER</a></li>
		<li><a href="<?php echo base_url();?>index.php/C_home/Kontak">KONTAK</a></li>
		<li><a href="<?php echo base_url();?>index.php/C_home/cekresi">CEK RESI</a></li>
	</ul>
</menu>
</header>
<article>
		<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<br>
	<fieldset style="background-color: #FFFFFF ">
	<legend> <table border="0">
	<tr>
		<td><a href="<?php echo base_url();?>index.php/C_Home/produk"> <img src="<?php echo base_url();?>asset/Gambar/custom.jpg" height="50" width="50"></a></td>
		<td><a href="<?php echo base_url();?>index.php/C_Home/caraorder"> <img src="<?php echo base_url();?>asset/Gambar/jadi.jpg" height="50" width="50"></a></td>
	</tr></table></legend>
	<font face="Arial" color="black" size="4">
	<center>	
	<table border="1">
	<form action="<?php echo base_url();?>index.php/C_Home/hitung" method=POST name='atk'>
		<tr>
			<td style="font-family:tahoma;font-size:200%;" colspan="3"><center>List T-Shirt Tersedia</center></td>
			<tr>
				<td><center><img src="<?php echo base_url();?>asset/Gambar/bagakI.jpg" height="150" width="240"></center></td>
				<td>PERANTAU <br></td>
				<td>Rp90.000	<br><br> <input type="checkbox" name="barang[]" value="Perantau"><label> Jumlah			: </label> <input type="text" name="bagak1"></td>
			</tr>
			<tr>
				<td><center><img src="<?php echo base_url();?>asset/Gambar/bagakII.jpg" height="150" width="240"></center></td>
				<td>PARANTAU MINANG	</td>
				<td>Rp90.000	<br><br> <input type="checkbox" name="barang[]" value="Perantau Minang"><label> Jumlah			: </label> <input type="text" name="bagak2"></td>
			</tr>
			<tr>
				<td><center><img src="<?php echo base_url();?>asset/Gambar/bagakIII.jpg" height="150" width="240"><center></td>
				<td>SAKAMPUANG KITO SANAK	</td>
				<td>Rp90.000	<br><br> <input type="checkbox" name="barang[]" value="Sakampuang Kito Sanak"><label> Jumlah			: </label> <input type="text" name="bagak3"></td>
			</tr>
			<tr>
				<td><center><img src="<?php echo base_url();?>asset/Gambar/bagakIV.jpg" height="150" width="240"></center></td>
				<td>BAGAK KANDANG	</td>
				<td>Rp90.000	<br><br> <input type="checkbox" name="barang[]" value="Bagak Kandang"><label> Jumlah			: </label> <input type="text" name="bagak4"></td>
			</tr>
			<tr>
				<td><center><img src="<?php echo base_url();?>asset/Gambar/bagakV.jpg" height="150" width="240"></center></td>
				<td>GADIH MINANG	</td>
				<td>Rp90.000	<br><br> <input type="checkbox" name="barang[]" value="Gadih Minang"><label> Jumlah			: </label> <input type="text" name="bagak5"></td>
			</tr>
			<tr>
			<td></td>
			<td></td>
				<td>
				<br>
				<input style="font-family:tahoma;font-size:100%;" type="submit" name="submit" value="Total Harga"/>
				<br></br>
				</td>
		</tr>
	</form>
	</tr>
		</tr>
	</table></center>

	</fieldset>
	<marquee behavior="alternative" deirection="left/right" scrollamount="10"><br><b>Selamat Berbelanja di Bagak Kandang </b><br></marquee>
	</article>
	<br>
	<footer>
		<p><i>BagakKandang &copy; 2017</i></p>
	</footer>
</body>
</html>