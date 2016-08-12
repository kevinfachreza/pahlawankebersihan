<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <?php echo $navbar;?>
      
      <div class="container">
        <div class="divider"></div>
        <div class="section">
          <h3 class="header">Apa Itu Pahlawan Kebersihan ?</h3>
          <div class="row" style="">
            <div class="col s1 m1 l1"></div>
            <div class="col s12 m6 l3">
              <img height="240px" width="200px" src="<?php echo base_url();?>assets/img/konten/apa.jpg"> 
            </div>
            <div class="col s12 m6 l8">
              <p style="text-indent:50px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque urna ac tincidunt ultrices. Nam ut odio vehicula dui pharetra efficitur. Sed vel lectus varius, rhoncus mauris in, ultrices risus. Nulla placerat fermentum velit at laoreet. Ut vitae lectus fermentum, tempus purus ut, placerat tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum in congue turpis, sit amet varius sem. Praesent suscipit nibh lorem. Suspendisse eu nibh posuere, malesuada lacus at, suscipit nibh. Sed vestibulum mauris auctor dui tempor elementum. Mauris tempus sit amet quam eget cursus. Maecenas quis iaculis eros. Vestibulum non commodo dui, quis rhoncus enim. Nullam tempor mauris est, at dignissim neque lobortis non. Nam auctor dignissim elit a porta.</p>
            </div>
          </div>
         
        </div>
        <div class="divider"></div>
      </div>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
      <script type="text/javascript">
          $(document).ready(function(){
            $('.carousel').carousel();
          });
          $('.carousel.carousel-slider').carousel({full_width: true});
      </script>
    </body>
  </html>