<?php
include "koneksi.php";

$jumlah = count($_POST["id_tutor"]);
for($i=0; $i<$jumlah; $i++)
{
$id_tutor=$_POST['id_tutor'][$i]; 

$query = "update tutor set status='Terverifikasi' where id_tutor='$id_tutor'";

$result = mysql_query($query);
if($result)
	echo" ";
	else
		echo " ";
}

include 'tutorverif.php';
?>
