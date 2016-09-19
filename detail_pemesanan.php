<?php
include "koneksi.php";
 $sql=mysql_query("select * from detail_pemesanan order by id_belajar DESC LIMIT 0,1");
 $data=mysql_fetch_array($sql);
 $kodeawal=substr($data['id_belajar'],3,4)+1;
 if($kodeawal<10){
  $kode='BL00000'.$kodeawal;
 }elseif($kodeawal > 9 && $kodeawal <=99){
  $kode='BL0000'.$kodeawal;
 }else{
  $kode='BL000'.$kodeawal;
 }  
 ?>
<html>
<head>
<meta charset="utf-8">
<style type="text/css">
        table {
            border-spacing:15px;
        }
    </style>
</head>

<body>
<center>
DETAIL PEMESANAN <br> ===================
<table width="400" border="0">
  <tbody>
    <tr>
      <td>ID Belajar</td>
      <td>:</td>
      <td><input type="text" name="id_belajar" id="id_belajar" value="<?php echo $kode;?>" readonly /></td>
    </tr>
    <tr>
      <td>ID Tutor</td>
      <td>:</td>
      <td><input type="text" name="id_tutor" id="id_tutor" value="<?php echo $data['id_tutor'];?>" readonly /></td>
    </tr>
    <tr>
      <td>ID Murid</td>
      <td>:</td>
      <td><input type="text" name="id_murid" id="id_murid" value="<?php echo $data['id_murid'];?>" readonly /></td>
    </tr>
    <tr>
      <td>Subjek</td>
      <td>:</td>
      <td><input type="text" name="subjek" id="subjek" value="<?php echo $data['subjek'];?>" readonly /></td>
    </tr>
    <tr>
      <td>ID Tingkat</td>
      <td>:</td>
      <td><input type="text" name="tingkat" id="id_tingkat" value="<?php echo $data['tingkat'];?>" readonly /></td>
    </tr>
    <tr>
      <td>Total Bayar</td>
      <td>:</td>
      <td><input type="text" name="total_bayar" id="total_bayar" value="<?php echo $data['total_bayar'];?>" readonly /></td>
    </tr>
    <tr>
      <td>Jadwal</td>
      <td>:</td>
      <td><form action="" method="post">     
<select name="jadwal">    
<option value="">Silahkan Pilih</option>    
<option value="SenSelRab">Senin, Selasa, Rabu</option>    
<option value="KamJumSab">Kamis, Jumat, Sabtu</option>    
<option value="SenRabJum">Senin, Rabu, Jumat</option>    
<option value="SelKamSab">Selasa, Kamis, Sabtu</option>    
</select>      
</form>     </td>
    </tr>
  </tbody>
</table>
<div style="overflow: auto; border: 0px ; margin: auto; padding: 3px; width: 750px; height: 350px; text-align: justify;">
<form action="" method="post">
<input type="checkbox" name="Check" value="Setuju">Saya setuju dengan Persyaratan Layanan dan Kebijakan Privasi Google dapat menggunakan informasi akun saya untuk mempersonalisasi s +1 pada konten dan iklan di situs web selain Google. Tentang personalisasi.<br><br>  
<center><input type="submit" name="enter" value="PESAN"></center>  
</form></div>

</center>



</body>
</html>