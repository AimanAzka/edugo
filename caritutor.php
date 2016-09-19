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
            
      <!-- MAIN SECTION -->
        
          
      <section class="listtutor">
        <div class="cari">
            <div class="formcari text-center">
            <div class="large-12 coloumn text-center">
                <h2 class="section-heading"><strong>Cari Tutor Anda</strong></h2>
                <p>Temukan Ribuan Guru Favorit anda disini</p>
                <input type="text" placeholder="cari tutor..." />
                <a href="#" class="button secondary">Cari</a>
            </div>
        </div>
        </div>
          <div class="wrap row">
              <?php
          include "koneksi.php";
			$tampil = "select * from tutor order by id_tutor asc";
			$query = mysql_query($tampil);
			while ($hasil = mysql_fetch_array($query))
			{
				$id_tutor=$hasil['id_tutor'];		
		?>
            <div class="small-12 medium-4 column text-center">
                <div class="box-tutor">
             
                        <img src="<?php echo $hasil['nama_foto']  ?>" class="img-tutor">
                        <div class="box-nama-tutor">
                        <h4><?php echo $hasil['nama_lengkap_tutor']  ?></h4>
                        <a href="detail_tutor.php?id=<?php echo $hasil['id_tutor']  ?>" class="button expanded">Lihat Profil</a>
                            </div>

                </div>
            </div>
            <?php
			}
		      ?>
              
        </div>
      </section>
          
     
      

    
   
      <!-- FOOTER -->
      <footer>
          <div class="wrap row small-up-1 medium-up-3">
          
          </div>
      </footer>
            </div>
            </div>
      </div>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
