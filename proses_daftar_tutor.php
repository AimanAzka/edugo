<?php
Include "koneksi.php";

if (isset($_POST['submit']))
{
$tkode = $_POST['tkode'];
$nama_lengkap_tutor = $_POST['nama_lengkap_tutor'];
$tempat_lahir = $_POST['tempatlahir'];
$tgl_lahir = $_POST['tanggal'];
$email = $_POST['email'];
$provinsi = $_POST['provinsi'];
$kota = $_POST['kota'];
$alamat = $_POST['alamat'];
$lulusan = $_POST['lulusan'];
$no_tlp = $_POST['no_tlp'];
$gender = $_POST['gender'];
$password = $_POST['password'];
$keahlian = $_POST['keahlian'];

//UPLOAD BERKAS
$target_dir = "images/berkas/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Gambar atau bukan
if(isset($_POST["submit"]))

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "menyebabkan berkas gagal di upload !!! <br><br>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo " BERKAS ". basename( $_FILES["file"]["name"]). " berhasil di upload <br>";
    } else {
        echo " Maaf, Terjadi error upload Berkas ";
    }
}

//UPLOAD FOTO
$target_dir = "images/foto/tutor/";
$target_foto = $target_dir . basename($_FILES["foto"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_foto,PATHINFO_EXTENSION);
// Gambar atau bukan
if(isset($_POST["submit"]))

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "menyebabkan berkas gagal di upload !!!";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_foto)) {
        echo " FOTO ". basename( $_FILES["foto"]["name"]). " berhasil di upload ";
    } else {
        echo " Maaf, Terjadi error upload foto ";
    }
}


$query = "INSERT INTO tutor SET id_tutor='$tkode',
								status='Belum Terverifikasi',
								nama_lengkap_tutor='$nama_lengkap_tutor', 
								tempat_lahir='$tempat_lahir',
								tgl_lahir='$tgl_lahir', 
								email='$email', provinsi='$provinsi', 
								kota='$kota', 
								alamat='$alamat', lulusan='$lulusan',
								no_tlp='$no_tlp', 
								jenis_kelamin='$gender', 
								password='$password', 
								nama_berkas='$target_file',
								nama_foto='$target_foto',
                                keahlian='$keahlian' ";
								

function buatkode($nomor_terakhir, $kunci, $jumlah_karakter = 0)
{
    /* mencari nomor baru dengan memecah nomor terakhir dan menambahkan 1
    string nomor baru dibawah ini harus dengan format XXX000000 
    untuk penggunaan dalam format lain anda harus menyesuaikan sendiri */
    $nomor_baru = intval(substr($nomor_terakhir, strlen($kunci))) + 1;
//    menambahkan nol didepan nomor baru sesuai panjang jumlah karakter
    $nomor_baru_plus_nol = str_pad($nomor_baru, $jumlah_karakter, "0", STR_PAD_LEFT);
//    menyusun kunci dan nomor baru
    $kode = $kunci . $nomor_baru_plus_nol;
    return $kode;
}


//contoh penggunaan
 
//ambil nomor terakhir dari record terakhir dalam tabel, misalkan ketemu kosong, karena belum ada data
$nomor_terakhir = '';
echo buatkode($nomor_terakhir, 'HC', 5);
//out put : HC00001
 
//ambil lagi record terakhir didapat
$nomor_terakhir = 'HC00001';
echo buatkode($nomor_terakhir, 'HC', 5);
//out put : HC00002
 
//dst..								
								

$result = mysql_query($query);

if ($result) 
	echo " ";
else 
	echo " ";
	mysql_close();
}
include "daftar_tutor.php";
?>