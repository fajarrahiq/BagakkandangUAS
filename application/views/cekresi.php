<!DOCTYPE html>
<html>
<head>
  <title>CEK RESI</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cek Resi Anda</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/LogIn.css">
    <script src="<?php echo base_url();?>https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="<?php echo base_url();?>https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>
<body>
  <style>
    footer 
    {
    background-color: #FFD54F;
    padding: 3px
    }
    .active {
     background-color: #717171;
     }
  </style>
	<header>
	<menu>
  <h4 align="right"><a href="<?php echo base_url();?>index.php/C_home/Login">Login</a>&ensp; or &ensp;<a href="<?php echo base_url();?>index.php/C_home/Login">Register</a>&ensp;<i class="fa fa-renren"></i></h4>
  </menu>
  <menu>
    <ul>
        <li><a href="<?php echo base_url();?>index.php/C_home/home">HOME</a></li>
        <li><a href="<?php echo base_url();?>index.php/C_home/produk">PRODUK</a></li>
        <li><a href="<?php echo base_url();?>index.php/C_home/caraorder">CARA ORDER</a></li>
        <li><a href="<?php echo base_url();?>index.php/C_home/Kontak">KONTAK</a></li>
        <li><a class="active">CEK RESI</a></li>
        </ul>
        </menu>
         <div class="col-lg-8">
          
          </header>
        <article>
        <div class="container">
         <h2 align="center">Cek Nomor Resi (JNE, TIKI, & POS INDONESIA)</h2>
         <hr>
         <div class="col-lg-4">
          <div class="panel panel-success">
           <div class="panel-heading">Cek Resi Anda</div>
           <div class="panel-body">
            <form action="" method="POST">
             <div class="form-group"> 
              <label for="" class="control-label">Nomor Resi</label>
              <input type="text" class="form-control" name="resi" required>
             </div>
             <div class="form-group">
              <label for="" class="control-label" >Jasa Pengiriman</label>
              <select name="jasa" id="" class="form-control" required>
               <option value="">-- Pilih Jasa Pengiriman -- </option>
               <option value="jne">JNE</option>
               <option value="tiki">TIKI</option>
               <option value="pos">POS INDONESIA</option>
              </select>
             </div>
           </div>
           <div class="panel-footer">
            <button type="submit" name="cek" class="btn btn-primary">Cek Resi</button>
           </div>
           </form>
          </div>
         </div>
         <div class="col-lg-8">
          <?php  
           if (isset($_POST['cek'])) 
           {
            $resi = isset($_POST['resi'])?$_POST['resi']:"";
            $jasa = isset($_POST['jasa'])?$_POST['jasa']:"";
      
            $ambil_content = file_get_contents("http://wahidganteng.ga/process/api/602f720a6f5dfbe37ebded0b27dfd535/cek-resi?jasa=".$jasa."&resi=".$resi."");
      
            $result = json_decode($ambil_content, true);
      
            //ambil data
      
            //date
      
            if ($result['status'] == "sukses") 
            {
             $detail = $result['gen_info'];
             $riwayat = $result['manifest'];
      
            ?>
            <div class="panel panel-info">
             <div class="panel-heading">Hasil Pencarian Nomor Resi Anda</div>
             <div class="panel-body">
              <legend>Detail </legend>
              <table class="table table-striped">
               <tr>
                <td width="170"><label for="" class="control-label">Nomor Resi</label> </td>
                <td width="10">:</td>
                <td><?php echo $detail['awb'] ?></td>
               </tr>
               <tr>
                <td width="50"><label for="" class="control-label">Jenis Pengiriman</label> </td>
                <td width="10">:</td>
                <td><?php echo $detail['service'] ?></td>
               </tr>
               <?php if ($jasa != "pos"): ?>
                <tr>
                 <td width="50"><label for="" class="control-label">Tanggal</label></td>
                 <td width="10">:</td>
                 <td>
                  <?php if ($jasa == "jne"): ?>
                  <?php echo $detail['date'] ?>
                  <?php else: ?>
                   <?php echo $detail['date'] ?> 
                  <?php endif ?>
                 </td>
                </tr>
               <?php endif ?>
      
               <tr>
                <td width="50"><label for="" class="control-label">Status</label> </td>
                <td width="10">:</td>
                <td><?php echo $result['status'] ?></td>
               </tr>
              </table>
              <legend>Asal & Tujuan</legend>
              <table class="table table-bordered">
               <thead>
                <tr>
                 <th>Pengirim</th>
                 <th>Penerima</th>
                </tr>
               </thead>
               <tbody>
                <tr>
                 <td>
                  <?php if ($jasa == "jne" || $jasa == "pos"): ?>
                   Nama :  <?php echo $detail['shipper'] ?><br>
                   Dari : <?php echo $detail['shipper_city']?>
                  <?php else: ?>
                   Dari : <?php echo $detail['asal']['alamat'] ?>
                  <?php endif ?><br>
                 </td>
                 <td>
                  <?php if ($jasa == "jne" || $jasa == "pos"): ?>
                   Nama :  <?php echo $detail['receiver'] ?><br>
                   Dari : <?php echo $detail['receiver_address'] ?>
                  <?php else: ?>
                   Dari : <?php echo $detail['tujuan']['alamat'] ?>
                  <?php endif ?><br>
                 </td>
                </tr>
               </tbody>
              </table>
              <legend>Tracking Status</legend>
      
              <!-- <table class="table table-bordered">
               <thead>
                <tr>
                 <th>Tanggal & Waktu</th>
                 <th>Lokasi</th>
                 <th>Status</th>
                 <th>Keterangan</th>
                </tr>
               </thead>
               <tbody>
                <?php  
                 for ($i=0; $i < count($riwayat) ; $i++) 
                 { 
                  ?>
                  <tr>
                   <td>
                    <?php  
                     if ($jasa == "tiki") 
                     {
                      echo $riwayat[$i]['taggal']." ".$riwayat[$i]['waktu'];
                     }
                     else
                     {
                      echo $riwayat[$i]['manifest_date'];
                     }
                    ?>
                   </td>
                   <td><?php echo $riwayat[$i]['lokasi'] ?></td>
                   <td>
                    <?php if ($jasa == "jne"): ?>
                     <?php echo $riwayat[$i]['keterangan'] ?>
                    <?php else: ?>
                     <?php echo $riwayat[$i]['status'] ?>
                    <?php endif ?>
                   </td>
                   <td>
                    <?php if ($jasa == "tiki" || $jasa == "pos"): ?>
                     <?php echo $riwayat[$i]['keterangan'] ?>
                    <?php else: ?>
                     <?php echo ""; ?>
                    <?php endif ?>
                   </td>
                  </tr>
                  <?php
                 }
                ?>
               </tbody>
              </table> -->
                
              <!-- Table sesuai dengan variable di API -->
              <table class="table table-bordered">
               <thead>
                <tr>
                 <th>Tanggal &amp Waktu</th>
                 <th>Keterangan</th>
                </tr>
               </thead>
               <tbody>
               <?php  
                 for ($i=0; $i < count($riwayat) ; $i++) 
                 { 
                  ?>
                  <tr>
                   <td>
                    <?php  
                     if ($jasa == "tiki") 
                     {
                      echo $riwayat[$i]['taggal']." ".$riwayat[$i]['waktu'];
                     }
                     else
                     {
                      echo $riwayat[$i]['manifest_date'];
                     }
                    ?>
                   </td>
                   <td><?php echo $riwayat[$i]['manifest_desc'] ?></td>
                  </tr>
                  <?php
                 }
                ?>
               </tbody>
              </table>
      
             </div>
            </div>
            <?php
            } else
            {
             echo '<div class="alert alert-danger">Data tidak ditemukan. Pastikan Nomor Resi dan Jasa Pengiriman benar.</div>';
            }
           }
          ?>
         </div>
        </div>
        </article>
        <footer>
          <p><i>BagakKandang &copy; 2017</i></p>
        </footer>
      </body>
      </html>