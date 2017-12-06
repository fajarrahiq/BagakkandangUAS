<!DOCTYPE html>
<html>
<head>
  <title>Project E-Commerce</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/LogIn.css">
	<link rel="stylesheet" href="<?php echo base_url();?>https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/KontakCSS.css">
<style>
	.active {
  background-color: #717171;
}
</style>
<body>
	<header>
	<menu>
		<h4 align="right"><a href="<?php echo base_url();?>index.php/C_Home/Login">Login</a>&ensp; or &ensp;<a href="<?php echo base_url();?>index.php/C_Home/Login">Register</a>&ensp;<i class="fa fa-renren"></i></h4>
	</menu>
	<menu>
		<ul>
        <li><a href="<?php echo base_url();?>index.php/C_Home/index">HOME</a></li>
        <li><a href="<?php echo base_url();?>index.php/C_Home/produk">PRODUK</a></li>
        <li><a href="<?php echo base_url();?>index.php/C_Home/caraorder">CARA ORDER</a></li>
        <li><a class="active">KONTAK</a></li>
        <li><a href="<?php echo base_url();?>index.php/C_Home/cekresi">CEK RESI</a></li>
		</ul>
	</menu>
	</header>
	<div class="Pesan">
		<h2> Tinggalkan Pesan</h2>
		<form method = "post" action="index.php/C_Home/aspirasi">
		<div class="col-lg-12 col-md-6">
		<span class="fa fa-user"></span> Name : <input type ="text" placeholder="Name...."><br>
		<span class="fa fa-envelope"> Email : <input type ="email" placeholder="E-mail...."><br>
		<span class="fa fa-file"> Subject :<input type ="text" placeholder="Subject...."><br>
		</div>
	</div>
	<div class="Comment"><br>
		<span class="fa fa-edit"></span>Your Comment<br>
		<textarea name="Your Comment" 
		cols="40" rows="10" placeholder="Comment">
		</textarea><br>
		<input type ="submit" value="Submit"></input>
		</form>
	</div>
	<div class = "Contact">
		<h2>Contact details</h2>
		<div class ="Contact-item">
			<div class="contact-icon m-t-sm"> 
				<span class="fa fa-phone fa-" style="font-size:30px;color:#FFD54F;"</span>
			</div>
		<div class ="Contact-detail">
			<p>085263917794</p>
			</div>
		</div>

		<div class ="Contact-item">
			<div class="contact-icon m-t-sm">
				<span class="fa fa-facebook fa- " style="font-size:30px;color:#FFD54F;">
				</span>
			</div>
			<div class ="Contact-detail">
			<a href="<?php echo base_url();?>https://www.facebook.com/bagakkandangkomik/"><br>@bagakkandangkomik</a>
			</div><br>
		</div>

		<div class ="Contact-item">
			<div class="contact-icon m-t-sm">
				<span class="fa fa-twitter fa- " style="font-size:30px;color:#FFD54F;">
				</span>
			</div>
			<div class ="Contact-detail">
			<a href="<?php echo base_url();?>https://twitter.com/bagakkandang1"><br>@bagakkandang1</a>
			</div><br>
		</div>

		<div class ="Contact-item">
			<div class="contact-icon m-t-sm"><span class="fa fa-instagram fa- " style="font-size:30px;color:#FFD54F;">
				</span>
			</div>
			<div class ="Contact-detail">
			<a href="<?php echo base_url();?>https://www.instagram.com/bagakkandang.clothing/?hl=id"><br>bagakkandang.clothing</a>
			</div>
		</div><br>
	</div>
</body>

