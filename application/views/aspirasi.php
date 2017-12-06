<?php
 include "koneksi.php";
 $name = $_POST['name'];
 $email = $_POST['email'] 
 $subject = $_POST['subject']);

 $perintah = "select * from login WHERE username = '$username' AND password = '$password'";
 $hasil = mysql_query($perintah);
 $row = mysql_fetch_array($hasil);
 if ($row['username'] == $username AND $row['password'] == $password) {
 session_start(); 
 $_SESSION['username'] = $username;
 header("location:home.php"); 
 }
 else {
 echo "Gagal Masuk"; 
 }
?>

//