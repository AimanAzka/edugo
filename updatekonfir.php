<?php
include "koneksi.php";

$jumlah = count($_POST["nama_lengkap_murid"]);
for($i=0; $i<$jumlah; $i++)
{
$nama_lengkap_murid=$_POST['nama_lengkap_murid'][$i]; 

$query = "update murid set status_tutor='Ada' where nama_lengkap_murid='$nama_lengkap_murid'";

$result = mysql_query($query);
if($result)
	echo"Konfirmasi Sukses ";
	else
		echo "Konfirmasi Gagal ";
}

include 'korr.php';
?>
