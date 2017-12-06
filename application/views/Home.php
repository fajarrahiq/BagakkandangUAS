<!DOCTYPE html> 
<html>
<head>
  <title>Project E-Commerce</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/Home.css">
	<link rel="stylesheet" href="<?php echo base_url();?>https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
      * {box-sizing:border-box}
      body {font-family: Verdana,sans-serif;}
      .mySlides {display:none}
      
      /* Slideshow container */
      .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
      }
      
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


      </style>
</head>
<body>
	<header>
	<menu>
  <?php if($_SESSION['status']!='login') echo "<h4 align='right'><a href='".base_url()."index.php/Login'>Login</a>&ensp; or &ensp;<a href='".base_url()."index.php/C_home/Login'>Register</a>&ensp;<i class='fa fa-renren'></i></h4>";
        else echo " <h4 align='right'><a href = '".base_url()."index.php/Login/Logout'>LogOut</a> <h4>";
        ?>
  
  </menu>
	<menu>
		<ul>
        <li><a class="active">HOME</a></li>
        <li><a href="<?php echo base_url();?>index.php/C_home/produk">PRODUK</a></li>
        <li><a href="<?php echo base_url();?>index.php/C_home/caraorder">CARA ORDER</a></li>
        <li><a href="<?php echo base_url();?>index.php/C_home/Kontak">KONTAK</a></li>
        <li><a href="<?php echo base_url();?>index.php/C_home/cekresi">CEK RESI</a></li>
		</ul>
	</menu>
	</header>
	<article>
	
</head>
<body>

<h2 align="center"></h2>
<br>
<br>
<br>

<div class="slideshow-container" align="center">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="<?php echo base_url();?>asset/gambar/Slide.jpg" style="width:80%">

</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="<?php echo base_url();?>asset/gambar/konveksi.jpg" style="width:80%">

</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="<?php echo base_url();?>asset/gambar/komis.jpg" style="width:80%">

</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
		<div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <center>
      <table style ="width: 60%">
        <td>
      <h1>Salam Bagak !</h1>
      <br>
      <p>
         Minang merupakan identitas yang melekat semenjak kita dilahirkan. Identitas yang akan kita
         sandang kemanapun bumi hendak dipijak dan jalan yang akan ditempuh. Identitas yang didalamnya
         terkandung prinsip dan falsafah hidup yang begitu luhur hasil buah pikir para pendahulu.
      </p>
      <br>
      <p>
        Dibentuk pada bulan September 2016, dengan tagline "Urang Bagak Bajunyo Bagak Kandang".
        Produk Bagak Kandang mengangkat nilai-nilai budaya Minangkabau yang begitu dinamis, unik,
        penuh kiasan dan sarat akan pesan.
      </p>
      <br>
      <p>
          BagakKandang &copy; 2017
      </p>
    </td>
      <br>
    </table>
  </center>
      <br>
      <br>
      <br>
      <br>
      <br>
		</div>
	<div class="container" align="center">
	  	<div class="buttonPage">
			<a href="customButton.html">
		  		<img src="<?php echo base_url();?>asset/gambar/custom.jpg" alt="CUSTOM PAGE" style="width:200px;height:200px;border:30;">
			</a>
			<a href="jadiPage.html">
			  <img src="<?php echo base_url();?>asset/gambar/jadi.jpg" alt="JADI PAGE" style="width:200px;height:200px;border:30;">
			</a>
		</div>
	</div>

	</article>
	<footer>
		<p><i>BagakKandang &copy; 2017</i></p>
	</footer>
</body>
</html>
