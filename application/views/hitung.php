
<!DOCTYPE html>
<html>
<head>
	<title>Bagakkandang.co</title>
</head>
<body>
	<center>
	<font face="tahoma" color="black" size="6">	
	<h1> TOTAL BELANJA </h1>
	</center>
	<fieldset style="background-color: #FFFFFF ">
	<legend> <table border="0">
	<tr>
		<td><a href="<?php echo base_url();?>index.php/C_Home/produk"> <img src="<?php echo base_url();?>asset/Gambar/custom.jpg" height="50" width="50"></a></td>
		<td><a href="<?php echo base_url();?>index.php/C_Home/produk"> <img src="<?php echo base_url();?>asset/Gambar/jadi.jpg" height="50" width="50"></a></td>
	</tr></table></legend>
	<font face="Arial" color="black" size="4">
	<?php	
		$harga1=0;
		$harga2=0;
		$harga3=0;
		$harga4=0;
		$harga5=0;
		echo '<div id="footer">';
		echo '<table table-border=1>';
		date_default_timezone_set("Asia/Jakarta");
		$tgl=date('l, d-m-Y');
		echo $tgl , ', ' , idate("h"),':', idate("i"),':', idate("s");
		echo '</table>
			 </div>';
		echo '<br> Daftar Barang dan Harga <br>';
		if(isset($_POST['submit'])){
			if(!empty($_POST['barang'])){
				foreach($_POST['barang'] as $selected){
					if($selected == 'Perantau'){
						$harga1 = $_POST['bagak1'] * 90000;
							echo $selected. " : " , $harga1 , " Rupiah <br>";
					}
					else if($selected == 'Perantau Minang'){
						$harga2 = $_POST['bagak2'] * 90000;
						echo $selected. " : " , $harga2 , " Rupiah <br>";
					}
					else if($selected == 'Sakampuang Kito Sanak'){
						$harga3 = $_POST['bagak3'] * 90000;
						echo $selected. " : " , $harga3 , " Rupiah <br>";
					}
					else if($selected == 'Bagak Kandang'){
						$harga4 = $_POST['bagak4'] * 90000;
							echo $selected. " : " , $harga4 , " Rupiah <br>";
					}
					else if($selected == 'Gadih Minang'){
						$harga5 = $_POST['bagak5'] * 90000;
						echo $selected. " : " , $harga5 , " Rupiah <br>";
					}
				}
				$total = $harga1 + $harga2 + $harga3 + $harga4 + $harga5;
					echo "Total Belanja : ", $total , " Rupiah <hr>";
		}
	}
	?>
	<a href="<?php echo base_url();?>index.php/C_Home/produk">Ada Tambahan Belanja Lagi ?</a>';
	</fieldset>
	<marquee behavior="alternative" deirection="left/right" scrollamount="10"><b>Terima Kasih, Silakan datang kembali... </b></marquee>
</body>
</html>
