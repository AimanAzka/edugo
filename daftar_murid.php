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
                    <li><a href="#">Lowongan Guru</a></li>
                    <li><a href="loginmurid.html">Login</a></li>
                    <li><a href="#">Daftar</a></li>
                </ul>
            </div> 
        </div>
    </div>
      



<?php
include "koneksi.php";
 $sql=mysql_query("select * from murid order by id_murid DESC LIMIT 0,1");
 $data=mysql_fetch_array($sql);
 $kodeawal=substr($data['id_murid'],3,4)+1;
 if($kodeawal<10){
  $kode='M0000'.$kodeawal;
 }elseif($kodeawal > 9 && $kodeawal <=99){
  $kode='M000'.$kodeawal;
 }else{
  $kode='M000'.$kodeawal;
 }
 ?>
<div class="wrap row">
    
    <div class="large-12 coloumn text-center">
                <h2 class="section-heading"><strong>Registrasi Murid</strong></h2>
            </div> 
    
<form action="proses_daftar_murid.php" method="post" enctype="multipart/form-data">
<p>
<center>
	<table>
	<tr><td>Id Murid</td>  <td>:</td> <td><input type="text" name="tkode" id="tkode" value="<?php echo $kode;?>" readonly="true" /></td></tr>
		<tr><td>Nama Lengkap</td>  <td>:</td> <td><input type="text" name="namamurid" size="25" maxlength="25" value="" required /></td></tr>
	
		<tr><td>Tempat Lahir</td>  <td>:</td> <td><input type="text" name="tempatlahir" size="25" maxlength="25" value="" required /></td></tr>
        		<tr><td>Tanggal</td>  <td>:</td> <td><input type="date" name="tanggal" size="25" maxlength="25" value="" required /></td></tr>
	
	
		<tr><td>Email</td>         <td>:</td> <td><input type="email" name="email" size="25" maxlength="25" value="" required /></td></tr>
		<tr><td>Provinsi</td>      <td>:</td> <td><select name="provinsi" required />
						<option value="jabar">Jawa Barat</option>
						<option value="jatim">Jawa Timur</option>
						<option value="jateng">Jawa Tengah</option>
						<option value="sumbar">Sumatra Barat</option>
					</select></td></tr>
		<tr><td>Kota</td>           <td>:</td> <td><select name="kota" required />
						<option value="bdg">Bandung</option>
						<option value="jkt">Jakarta</option>
						<option value="solo">Solo</option>
						<option value="serang">Serang</option>
					</select></td></tr>
		
		<tr><td>Alamat</td>   	 <td>:</td> <td><textarea rows="4" cols="50" name="alamat" required /></textarea></td></tr>
		
		<tr><td>Tingkat</td>     <td>:</td> <td><select name="tingkat" required />
						<option value="sd">SD</option>
						<option value="smp">SMP</option>
						<option value="sma">SMA/SMK</option>
						<option value="mhs">MAHASISWA</option>
					</select></td></tr>
		<tr><td>No Tlp</td>   <td>:</td> <td><input type="text" name="no_tlp" size="25" maxlength="25" value="" required /></td></tr>
		
		<tr><td>Jenis Kelamin</td>  <td>:</td>  <td><input type="radio" name="gender" value="pria" required />Pria
							<input type="radio" name="gender" value="wanita" required />Wanita</td></tr>
		
		<tr><td>Password</td> <td>:</td> <td><input type="password" name="password" size="25" maxlength="25" value="" required /></td></tr>
		<tr><td>Upload Foto</td>  <td>:</td> <td> <input type="file" name="foto" required />Max size : 500 kb</td></tr>
		<tr>
		<td colspan="3"><center><input type="submit" name="submit" value="Daftar" class="button expanded"></center></td>
	    </tr>
	</table>
</center>

</form>
</div>

</div>
            </div>
      </div>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
