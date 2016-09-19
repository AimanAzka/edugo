<html>
<body>
<form action="updatekonfir.php" method="POST" name="submit">
</body>
</html>		
<?php
Include "koneksi.php";
$query = "SELECT  murid.nama_lengkap_murid as nama_lengkap_murid, murid.tingkat as tingkat, detail_pemesanan.subjek as subjek from murid inner join detail_pemesanan on murid.id_murid=detail_pemesanan.id_murid";
$sql = mysql_query ($query);

echo" <table border='1' cellpadding='4' cellspacing='3' align='center' width='100%'>
<tr>
<td width='1%' align='center'>Nama Siswa</td>
<td width='10%' align='center'>Tingkatan</td>
<td width='10%' align='center'>Subjek</td>
<td width='25%' align='center'>Konfirmasi</td>

</tr>";
while ($hasil = mysql_fetch_array($sql))
{  	$nama_lengkap_murid=$hasil['nama_lengkap_murid']; 
	$tingkat=$hasil['tingkat'];   	
	$subjek=$hasil['subjek'];
	
?>
<html><body>
<tr>
<td align='center'> <?php echo $nama_lengkap_murid ?></td>
<td align='center'> <?php echo $tingkat ?></td>
<td><?php echo $subjek ?></td>
<td><input type='checkbox' name='nama_lengkap_murid[]' value=<?php echo $nama_lengkap_murid?>></td>
</tr>


<?php
	}
?>
</table>
</br>
<input type='submit' name="submit" value="KONFIRMASI">
<br>
</form>

