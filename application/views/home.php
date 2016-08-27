<?php 
  function custom_echo($x, $length){
    if(strlen($x)<=$length)
    {
      echo $x;
    }
    else
    {
      $y=substr($x,0,$length).'...';
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
        <?php foreach($banner as $rows) { ?>
        <div class="carousel-isi" style="object-fit : cover; min-width:100%; min-height:100%; background:black;">
          <img style="width:100%; opacity:0.7;" src="<?php echo base_url() . "assets/img/post/" . $rows->img;?>">
          <div class="konten center">
            <h3 class="white-text"><?php echo $rows->title;?></h3>
            <p class="white-text"><?php custom_echo($rows->content_text, 300);?></p>
            <a href="<?php echo base_url()."blog/post/".$rows->title; ?>" class="waves-effect waves-light btn" style="margin-top:30px"><i class="material-icons right">search</i>selengkapnya</a>
          </div>
        </div>
        <?php }?>
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

      <div style="background-image:url(<?php echo base_url();?>assets/img/slider/testi2.jpg);" class="black z-depth-1">
            <h3 class="header white-text center" style="margin-bottom:0px;">Testimonial</h3>
            <div class="carousel js-flickity " style="height:400px;">
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


    
      <div class="amber lighten-3 z-depth-4" style="padding:40px;">
        <div class="section" >
          <div class="row">
          <div class="col s2">
            <h3 class="header center" style="margin-top:80px;">Cara Pemesanan</h3>
            <div class="container">
              <div class="container divider grey darken-3"></div>
            </div>
          </div>
          <div class="carousel js-flickity col s10" style="height:500px;">
              <div class="carousel-isi">
                <div class="row" >
                  <div class="col s7">
                    <img style="" width=100% src="<?php echo base_url();?>assets/img/konten/call.png">
                  </div>
                  <div class="col s4 pull-s1">
                    <h3 class="grey-text text-darken-4 center" style="font-size:35px; top:60px;">1. Hubungi Pahlawan Kebersihan</h3>
                    <p class="grey-text text-darken-4 center" style="top:80px;">Pahlawan Kebersihan dapat dihubungi melalui <a href="#">facebook</a>, <a href="">line</a>, whatsapp (0899313230).</p>
                  </div>
                </div>
              </div>
              <div class="carousel-isi">
                 <div class="row" >
                  <div class="col s4 offset-s1 ">
                    <h3 class="grey-text text-darken-4 center" style="font-size:35px; top:60px;">2. Deskripsikan Keaadaan kamar yang Ingin <br> dibersihkan</h3>
                  <p class="grey-text text-darken-4 center" style="top:80px">Kamar saya kotor.</p>
                  </div>
                  <div class="col s6">
                    <img style="" width=100% src="<?php echo base_url();?>assets/img/slider/testi4.jpg">
                  </div>
                </div>
              </div>
              <div class="carousel-isi">
                <img src="<?php echo base_url();?>assets/img/slider/testi3.jpg" style="opacity:0.7;  width:100%;">
                <div class="konten center">
                  <h3 class="grey-text text-darken-4 center" style="font-size:35px;">3. Pahlawan Kebersihan Akan Datang Menyelamatkan Anda</h3>
                  <p class="grey-text text-darken-4 center" style="top:20px">Terima kasih Pahlawan Kebersihan :)</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      

      <div class="container row" style=" margin-bottom:50px;">
        <div class="section" style="padding-top:20px;">
          <h3 class="header center">Blog & Promo</h3>
          <?php $x=0; foreach($blog as $rows) { ?>
          <div class="col s12 m4 l4 center" >
            <div class="card grey lighten-4 z-depth-1">
              <a href="<?php echo base_url()."blog/post/".$rows->title;?>">
                <img class="card-image circle" style="padding-bottom:0;" width="60%"  height=200px  src="<?php echo base_url() . "assets/img/post/" . $rows->img;?>">
              </a>
              <div class="card-content black-text" style="min-height:150px; max-height:150px;">
                <div class="card-title promo-caption"><?php echo $rows->title;?></div>
                <div class="light center"><?php custom_echo($rows->content_text, 150); ?></div>
              </div>
              <a href="<?php echo base_url()."blog/post/".$rows->title;?>" class="waves-effect waves-light btn" style="position:relative;"><i class="material-icons right">search</i>selengkapnya</a>
            </div>
          </div>

          <?php
             $x++;
             if ($x>=3) {
               break;
             }} ?>
        </div>
      </div>





      <?php echo $footer;?>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
      <script src="<?php echo base_url();?>assets/js/flickity.js"></script>
    </body>
  </html>