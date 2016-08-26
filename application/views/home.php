<?php 
  function custom_echo($x, $length){
    if(strlen($x)<=$length)
    {
      echo $x;
    }
    else
    {
      $y=substr($x,3,$length).'...';
      echo $y;
    }
  }

?>


<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/flickity.css" media="screen">
      <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <?php echo $navbar;?>

      <div class="carousel js-flickity">
        
        <div class="carousel-isi">
          <img src="<?php echo base_url();?>assets/img/slider/dua.jpg">
          <div class="konten center">
            <h3 class="white-text">Pahlawan Kebersihan</h3>
            <p class="white-text">Pahlawan Kebersihan adalah bla bla bla.....</p>
            <a class="waves-effect waves-light btn" style="margin-top:30px"><i class="material-icons right">search</i>selengkapnya</a>
          </div>
        </div>
          <div class="carousel-isi">
          <img src="<?php echo base_url();?>assets/img/slider/satu.jpg">
          <div class="konten center">
            <h3 class="white-text">Cara Pemesanan</h3>
            <p class="white-text">1. jadi gini, telpon salah satu kontak yang tersedia dibawah. coba di cek.<br>2. ya gitu, jelaskan keinginan anda gimana<br>3. begitu tuh cara pemesanan kami</p>
            <a class="waves-effect waves-light btn" style="margin-top:30px"><i class="material-icons right">search</i>selengkapnya</a>
          </div>
        </div>
        <div class="carousel-isi">
          <img src="<?php echo base_url();?>assets/img/slider/tiga.jpg">
          <div class="konten center">
            <h3 class="white-text center">Testimoni</h3>
            <img class="circle" style="top:40px; position:relative;" src="<?php echo base_url();?>assets/img/konten/testi.jpg" width=150px;>
            <p class="white-text" style="top:20px"><i>"Pahlawan Kebersihan memang nomor satu, sangat bersih dan tiada tara dalam membersihkan kamar kos saya"</i><br>-Chloë Grace Moretz</p>
            <a class="waves-effect waves-light btn" style="margin-top:30px"><i class="material-icons right">search</i>selengkapnya</a>  
          </div>
        </div>
      </div>





      <div class="container row" style="margin-top:20px;">
        <div class="section">
          <h3 class="header center">Apa Itu Pahlawan Kebersihan?</h3>
          <div class="col s10 m10 l12">
            <p style="text-align: center;  margin-bottom:20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p style="text-align: center; margin-bottom:20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>

      <div class="grey lighten-4 z-depth-1">
            <h3 class="header center" style="margin-bottom:0px;">Testimonial</h3>
            <div class="carousel grey lighten-4 js-flickity " style="height:400px;">
              <div class="carousel-isi">
                
                <div class="konten center">
                  <img class="circle" style="top:0px; position:relative;" src="<?php echo base_url();?>assets/img/konten/testi.jpg" width=150px;>
                  <p class="white-text center" style="top:20px"><i>"Pahlawan Kebersihan memang nomor satu, sangat bersih dan tiada tara dalam membersihkan kamar kos saya"</i><br>-Chloë Grace Moretz</p>
                </div>
              </div>
              <div class="carousel-isi">
               
                <div class="konten center">
                  <img class="circle" style="top:0px; position:relative;" src="<?php echo base_url();?>assets/img/konten/testi.jpg" width=150px;>
                  <p class="black-text center" style="top:20px"><i>"Pahlawan Kebersihan memang nomor satu, sangat bersih dan tiada tara dalam membersihkan kamar kos saya"</i><br>-Chloë Grace Moretz</p>
                </div>
              </div>
              <div class="carousel-isi">
                <img src="<?php echo base_url();?>assets/img/slider/testi3.jpg" style="opacity:0.7;  width:100%;">
                <div class="konten center">
                  <img class="circle" style="top:0px; position:relative;" src="<?php echo base_url();?>assets/img/konten/testi.jpg" width=150px;>
                  <p class="white-text center" style="top:20px"><i>"Pahlawan Kebersihan memang nomor satu, sangat bersih dan tiada tara dalam membersihkan kamar kos saya"</i><br>-Chloë Grace Moretz</p>
                </div>
              </div>
            </div>
      </div>

      <div class="">
        <div class="container row">
          <div class="section">
            <h3 class="header center">Mengapa Pahlawan Kebersihan</h3>
            <div class="col s10 m10 l12">
              <p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
      </div>


      
      <div class="container">
        <div class="container divider"> 
        </div>
      </div>


      <div class="container row">
        <div class="section">
          <h3 class="header center">Cara Pemesanan</h3>
          <div class="carousel js-flickity  z-depth-2" style="height:400px;">
              <div class="carousel-isi">
                <img src="<?php echo base_url();?>assets/img/slider/testi1.png" style="opacity:0.7; width:100%;">
                <div class="konten center">
                 <h3 class="white-text center" style="font-size:35px;">1. Hubungi Pahlawan Kebersihan</h3>
                  <p class="white-text center" style="top:20px">Pahlawan Kebersihan dapat dihubungi melalui <a href="#">facebook</a>, <a href="">line</a>, whatsapp (0899313230).</p>
                </div>
              </div>
              <div class="carousel-isi">
                <img src="<?php echo base_url();?>assets/img/slider/testi2.jpg" style="opacity:0.7;  width:100%;">
                <div class="konten center">
                  <h3 class="white-text center" style="font-size:35px;">2. Deskripsikan bagaimana Keaadaan kamar yang akan dibersihkan</h3>
                  <p class="white-text center" style="top:20px">Kamar saya kotor.</p>
                </div>
              </div>
              <div class="carousel-isi">
                <img src="<?php echo base_url();?>assets/img/slider/testi3.jpg" style="opacity:0.7;  width:100%;">
                <div class="konten center">
                  <h3 class="white-text center" style="font-size:35px;">3. Pahlawan Kebersihan Akan Datang Menyelamatkan Anda</h3>
                  <p class="white-text center" style="top:20px">Terima kasih Pahlawan Kebersihan :)</p>
                </div>
              </div>
            </div>
        </div>
      </div>

      <div class="container">
        <div class="container divider"> 
        </div>
      </div>

      <div class="container row" style=" margin-bottom:50px;">
        <div class="section" style="padding-top:20px;">
          <h3 class="header center">Blog & Promo</h3>
          <?php foreach($banner as $rows) { ?>
          <div class="col s12 m4 l4 center" >
            <div class="card grey lighten-4 z-depth-1">
              <a href="#1">
                <img class="circle"  width="60%"  height=200px  src="<?php echo base_url() . "assets/img/post/" . $rows->img;?>">
              </a>
              <div class="card-content black-text">
                  <div class="card-title promo-caption"><?php echo $rows->title;?></div>
                <div class="light center"><?php custom_echo($rows->content, 150); ?></div>
                <a class="waves-effect waves-light btn"><i class="material-icons right">search</i>selengkapnya</a>
              </div>
            </div>
          </div>

          <?php
            } ?>
        </div>
      </div>





      <?php echo $footer;?>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
      <script src="<?php echo base_url();?>assets/js/flickity.js"></script>
    </body>
  </html>