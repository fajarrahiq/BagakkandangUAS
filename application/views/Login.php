<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/LogIn.css">
<body>
	<menu>
		<ul>
		<li><a href="<?php echo base_url();?>index.php/C_home/index">HOME</a></li>
        <li><a href="<?php echo base_url();?>index.php/C_home/produk">PRODUK</a></li>
        <li><a href="<?php echo base_url();?>index.php/C_home/caraorder">CARA ORDER</a></li>
        <li><a href="<?php echo base_url();?>index.php/C_home/Kontak">KONTAK</a></li>
        <li><a href="<?php echo base_url();?>index.php/C_home/cekresi">CEK RESI</a></li>
  		</ul>
	</menu>

	<div class="login" >
		<h2>Sign In</h2>
		<form action="<?php echo base_url('index.php/Login/aksi_login') ?>" method ="post">
 			Username :<input type="text" placeholder="Username" name="username" required/></br>
 			Password :<input type="password" placeholder="Password" name="password" required/></br>
 			<input type="submit" value="Login">
 		</form>
	</div>

	<div class="register">
		<h2>Register</h2>
	<form action="<?php echo base_url('index.php/Login/register_data') ?>" method="post">
 			E-mail : <input type="text" name="email" size="40" /> <br />
			Nama : <input type="text" name="nama" size="40" /> <br />
			Alamat : <input type="text" name="alamat" size="40" /> <br />
			Nomor HP : <input type="text" name="no_HP" size="40" /> <br />
			Username : <input type="text" name="username" size="40" /> <br />
 			Password : <input type="password" name="password" size="40" /><br />
			 <button type="submit" value="Register" onclick="myFunction()">REGISTRASI</button>
 		</form>
	</div>
	<script>
		function myFunction() {
   		 alert("Register Succes");
	}
</script>
</body>
</html>