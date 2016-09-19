<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edugo!</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
        <div class="off-canvas-wrapper">
            <div class="off-canvas-wrapper-inner"  data-off-canvas-wrapper>
                
            <div class="off-canvas position-left" id="mobile-menu" data-off-canvas>
                 
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                
            </div>
      <!-- MOBILE NAVIGATION-->
      
      <div class="off-canvas-content" data-off-canvas-content>
         <div class="title-bar show-for-small-only">
  <div class="title-bar-left">
    <button class="menu-icon" type="button" data-open="mobile-menu"></button>
    <span class="title-bar-title">MENU</span>
  </div>
  
</div>
      
      
      <!-- DESKTOP NAVIGATION-->
      <div class="top-bar nav-desktop">
        <div class="wrap">
            <div class="top-bar-left">
                <h3 class="site-logo"><img src="images/logo_edugo.png"></h3>
            </div>    
            <div class="top-bar-right">
                <ul class="menu menu-desktop">

                    <li><a href="loginmurid.php">Logout</a></li>

                </ul>
            </div> 
        </div>
    </div>


<?php
	include "koneksi.php";
?>
<div class="formdetail">
<form action="Detail_Pemesanan.php" method="post">
<center>
<table border="1">
<?php

			$query="SELECT * FROM tutor WHERE id_tutor='$_GET[id]'";
			$sql=mysql_query($query);
			$hasil=mysql_fetch_array($sql);
			
			?>
         
    <tr>
        <td rowspan="3" width="200" align="center"><?php echo "<img src='".$hasil['nama_foto']."' width='400px' height='400px'/>"?></td>
        <td><h3><?php echo $hasil['nama_lengkap_tutor']; ?></h3></td>
        <td rowspan="3"  width="200px" ><center><a href="Detail_Pemesanan.php?id=<?php echo $hasil['id_tutor']  ?>" class="button">Pesan</a></center></td>    
    </tr>
     
    <tr>
        <td><p><?php echo $hasil['lulusan'];?></p>
    </tr>
    <tr>
        <td><input type="text" name="ema" value="<?php echo $hasil['email']; ?>"></td>
    </tr>
   
</table>
    
    </div>
<div style="overflow: auto; border: 1px solid #CCC; margin: auto; padding: 3px; width: 850px; height: 130px; background-color: none; text-align: justify;"><code>Semasa SMA, saya selalu meraih peringkat 3 besar kelas dan sejak kelas 2 selalu juara angkatan. Pernah mengikuti OSN Kimia hingga tingkat prov. Banten dan meraih juara 3 OSN di tingkat Kab. Serang. Saya aktif di kegiatan OSIS dan KIR semasa SMA.  Saya masuk perguruan tinggi negeri di jurusan Kimia Universitas Negeri Jakarta(UNJ) tanpa tes (waktu itu masih bernama PMDK) atau SNMPTN Undangan. Semasa kuliah aktif berorganisasi di BEM (Badan Eksekutif Mahasiswa) tingkat jurusan dan fakultas serta di LDK (lembaga dakwah kampus) UNJ. Beberapa semester memperoleh pernghargaan IPK terbaik di kelas. IPK selalu di atas 3,00. Lulus dengan IPK 3,50.  Pengalaman mengajar mulai dari siswa jenjang SMP hingga SMA untuk pelajaran IPA, Fisika, Kimia, dan Matematika. Mulai mengajar Privat dari tanhun 2004 hingga sekarang. Murid-murid berasal dari SMA Labschool, SMA 31, SMA 81, SMA 8, SMA 77, SMA 13, SMA 21, SMA Al-Azhar, SMA Al-Izhar, SMA Global Islamic School dan lain-lain. Selain mengajar privat, saya juga sebagai guru di salah satu bimbingan belajar di kelapa Gading Jakarta Utara. Saya pernah menangani siswa dengan kurikulum Cambridge maupun Singapura. Saya juga pernah bekerja sebagai guru di Kafila International Islamic School selama setahun. Saya mengajar Kimia dan Matematika untuk jenjang SMP dan SMA. Alumni-alumni murid saya yang lulus SMA, beberapa diterima di PTN favorit seperti ITB, UI, dan UNPAD.</code></div>
</center>
<br>

<center>
<div style="overflow: auto; border: 0px; margin: auto; padding: 3px; width: 850px; height: 120px; background-color: none; text-align: justify;"><code>
Keahlian</code>
<center>
<table border="0">
  <tbody>
    <tr>
      <td width="200"><center>Matematika</td>
      <td width="200"><center>Biologi</td>
      <td width="200"><center>Fisika</td>
      <td width="200"><center>Kimia</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table></div>
<br>

</form>
    
    
          </div>
            </div>
      </div>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>   
