<?php
Include "koneksi.php";

if (isset($_POST['submit']))
{
$tkode = $_POST['tkode'];
$nama_lengkap_murid = $_POST['namamurid'];
$tempat_lahir = $_POST['tempatlahir'];
$tgl_lahir = $_POST['tanggal'];
$email = $_POST['email'];
$provinsi = $_POST['provinsi'];
$kota = $_POST['kota'];
$alamat = $_POST['alamat'];
$tingkat = $_POST['tingkat'];
$no_tlp = $_POST['no_tlp'];
$gender = $_POST['gender'];
$password = $_POST['password'];

//UPLOAD FOTO
$target_dir = "images/foto/murid/";
$target_foto = $target_dir . basename($_FILES["foto"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_foto,PATHINFO_EXTENSION);
// Gambar atau bukan
if(isset($_POST["submit"]))
// Mengecek gambar jika sudah ada
if (file_exists($target_foto)) {
    echo "Maaf, nama foto sudah ada ";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "menyebabkan berkas gagal di upload !!!";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_foto)) {
        echo " ";
    } else {
        echo " Maaf, Terjadi error upload foto ";
    }
}

$query = "INSERT INTO murid SET id_murid='$tkode',
								nama_lengkap_murid='$nama_lengkap_murid', 
								tempat_lahir='$tempat_lahir',
								tgl_lahir='$tgl_lahir', 
								email='$email', provinsi='$provinsi', 
								kota='$kota', 
								alamat='$alamat', tingkat='$tingkat',
								no_tlp='$no_tlp', 
								jenis_kelamin='$gender', 
								password='$password', 
								nama_foto='$target_foto' ";
$result = mysql_query($query);

if ($result) {
	?> 
                                <script type='text/javascript'>
                                        window.alert('Pendaftaran Berhasil')
                                </script>
                                <script>document.location='loginmurid.php'</script>

                              <?php
    }
else{ 
	?> 
                                <script type='text/javascript'>
                                        window.alert('Pendaftaran Gagal')
                                </script>
                                <script>document.location='daftar_murid.php'</script>
                              <?php

}
	mysql_close();
}
?>