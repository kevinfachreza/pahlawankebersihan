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
          <h3 class="white-text center">First Panel</h3>
          <p class="white-text">This is your first panel</p>
        </div>
          <div class="carousel-isi">
          <img src="<?php echo base_url();?>assets/img/slider/satu.jpg">
          <h3 class="white-text center">First Panel</h3>
          <p class="white-text">This is your first panel</p>
        </div>
        <div class="carousel-isi">
         <img src="<?php echo base_url();?>assets/img/slider/tiga.jpg">
         <h3 class="white-text center">First Panel</h3>
          <p class="white-text">This is your first panel</p>
        </div>
      </div>





        <div class="container row">
          <div class="section">
            <h3 class="header">Apa Itu Pahlawan Kebersihan?</h3>
            <div class="col s12 m5 l3 center">
              <img width=100% src="<?php echo base_url();?>assets/img/konten/apa.jpg"> 
            </div>
            <div class="col s12 m7 l9 center">
              <p style="text-indent:50px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque urna ac tincidunt ultrices. Nam ut odio vehicula dui pharetra efficitur. Sed vel lectus varius, rhoncus mauris in, ultrices risus. Nulla placerat fermentum velit at laoreet. Ut vitae lectus fermentum, tempus purus ut, placerat tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum in congue turpis, sit amet varius sem. Praesent suscipit nibh lorem. Suspendisse eu nibh posuere, malesuada lacus at, suscipit nibh. Sed vestibulum mauris auctor dui tempor elementum. Mauris tempus sit amet quam eget cursus. Maecenas quis iaculis eros. Vestibulum non commodo dui, quis rhoncus enim. Nullam tempor mauris est, at dignissim neque lobortis non. Nam auctor dignissim elit a porta.</p>
            </div>
          </div>
        </div>
      <div style="background-color: #b3ffff">
        <div class="container row">
          <div class="section">
            <h3 class="header center">Apa Itu Pahlawan Kebersihan?</h3>
            <div class="col s10 m10 l12">
              <p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque urna ac tincidunt ultrices. Nam ut odio vehicula dui pharetra efficitur. Sed vel lectus varius, rhoncus mauris in, ultrices risus. Nulla placerat fermentum velit at laoreet. Ut vitae lectus fermentum, tempus purus ut, placerat tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum in congue turpis, sit amet varius sem. Praesent suscipit nibh lorem. Suspendisse eu nibh posuere, malesuada lacus at, suscipit nibh. Sed vestibulum mauris auctor dui tempor elementum. Mauris tempus sit amet quam eget cursus. Maecenas quis iaculis eros. Vestibulum non commodo dui, quis rhoncus enim. Nullam tempor mauris est, at dignissim neque lobortis non. Nam auctor dignissim elit a porta.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container row">
        <div class="section" style="padding-top:20px;">
          <h3 class="header center">Blog & Promo</h3>
          <a href="#1">
            <div class="col s12 m4 l4 center">
              <div class="card blue lighten-3">
                <img class="circle" src="<?php echo base_url();?>assets/img/post/post1.png" width="60%">
                <div class="card-content white-text">
                  <p class="promo-caption">Contoh Post</p>
                  <p class="light center">Kalimat pertama atau beberapa karakter pertama dari post.</p>
                </div>
              </div>
            </div>
          </a>
          <a href="#2">
            <div class="col s12 m4 l4 center">
              <div class="card blue lighten-3">
                <img class="circle" src="<?php echo base_url();?>assets/img/post/post1.png" width="60%">
                <div class="card-content white-text">
                  <p class="promo-caption">Contoh Post</p>
                  <p class="light center">Kalimat pertama atau beberapa karakter pertama dari post.</p>
                </div>
              </div>
            </div>
          </a>
          <a href="#3">
            <div class="col s12 m4 l4 center">
              <div class="card blue lighten-3">
                <img class="circle" src="<?php echo base_url();?>assets/img/post/post1.png" width="60%">
                <div class="card-content white-text">
                  <p class="promo-caption">Contoh Post</p>
                  <p class="light center">Kalimat pertama atau beberapa karakter pertama dari post.</p>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <?php echo $footer;?>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
      <script src="<?php echo base_url();?>assets/js/flickity.js"></script>
    </body>
  </html>