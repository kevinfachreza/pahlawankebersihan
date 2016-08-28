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
        <img  width=100% src="<?php echo base_url();?>assets/img/konten/blog.jpg">
        <div class="blog">
          <h3 class="blog center title grey-text text-lighten-1">BLOG</h3>
        </div>
        <div class="container center" style="margin-top:3%;margin-bottom:5%;">
          <h3 class="blog center title" style="font-weight:900;"><?php foreach ($post as $rows){ echo $rows->title;?></h3>
          <hr style="margin-bottom:5%;">
          <img style="margin-bottom:6%" width=75% src="<?php echo base_url().'assets/img/post/'.$rows->img;?>">
          <?php echo $rows->content; break;}?>
        </div>
      <?php echo $footer;?>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
      <script src="<?php echo base_url();?>assets/js/flickity.js"></script>
    </body>
  </html>