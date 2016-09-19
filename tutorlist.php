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
    
    
    <!-- SIDEBAR-->
    <div class="header">
        <div class="logo"><img src="images/logo_edugo.png"></div>
    </div>
    <div class="container">
        <div class="sidebar">
           <div class="sidebar profile text-center">
               <img src="images/profil.png" width="90px" class="img-circle"/>
               <h5>Azka Aiman</h5>
               <p>Admin</p>
            </div>
            <br>
        <div class="sidebar menuside">
            <a href="tutorverif.php" class="button expanded">Verifikasi Tutor</a>
            <a href="tutorlist.php" class="button expanded">List Tutor</a>
        </div>
        </div>
        <div class="content">
            <h2>List Tutor</h2>
            <p></p>
            <hr>
            

<?php
include "koneksi.php";
$query = "SELECT id_tutor, nama_lengkap_tutor ,email ,no_tlp FROM tutor where status='verif' order by id_tutor asc";
$sql = mysql_query ($query);

echo" <table width='100%'>
<tr>

<th align='center'>ID Tutor</td>
<th align='center'>Nama Lengkap Tutor</td>
<th align='center'>Email</td>
<th  align='center'>No Telepon</td>
</tr>";
while ($hasil = mysql_fetch_array($sql))
{  	$id_tutor=$hasil['id_tutor'];   	
	$nama_lengkap_tutor=$hasil['nama_lengkap_tutor'];
	$email = $hasil['email']; 	
	$no_tlp = $hasil['no_tlp'];
?>
<tr>

<td align='center'> <?php echo $id_tutor ?></td>
<td><?php echo $nama_lengkap_tutor ?></td>
<td align='center'><?php echo $email ?></td>
<td align='center'><?php echo $no_tlp ?></td>
 
</tr>

<?php
	}
?>
</table>

<br>

     </div>
    </div>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>


