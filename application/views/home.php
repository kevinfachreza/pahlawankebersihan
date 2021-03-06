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
	  <title>Pahlawan Kebersihan - Jasa Bersih Rumah dan Kos</title>
	  <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/logo/logo.png">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <?php echo $navbar;?>

      <div class="carousel js-flickity">
        <?php foreach($banner as $rows) { ?>
        <div class="carousel-isi" style="object-fit : cover; min-width:100%; min-height:100%; background:black;">
          <img style="width:100%; min-height:100%; object-fit:cover; opacity:0.7;" src="<?php echo base_url() . "assets/img/post/" . $rows->img;?>">
          <div class="konten center">
            <h3 class="white-text title"><?php echo $rows->title;?></h3>
            <p class="white-text"><?php custom_echo($rows->content_text, 150);?></p>
            <a href="<?php echo base_url()."blog/post/".$rows->title_slug; ?>" class="waves-effect waves-light btn" style="margin-top:5px"><i class="material-icons right">search</i>selengkapnya</a>
          </div>
        </div>
        <?php }?>
      </div>
      <div class="grey lighten-4">
        <div id="Apa" class="container row " style="margin-top:3%;">
          <div class="section">
            <h3 class="header center title">Apa Itu Pahlawan Kebersihan?</h3>  
            <hr style="margin-bottom:4%;">
            <div class="col s12 m12 l12">
              <p style="text-align: center;  margin-bottom:2%;">Merupakan jasa layanan lokal “dari masyarakat untuk masyarakat” yang mengatasi masalah kebersihan rumah, apartemen, kos, perkantoran dan segala hunian. Selain itu, kami juga menyediakan layanan untuk membantu mengangkut barang customer yang berpindah hunian dan layanan mengecat/mendesain interior ruangan</p>
             
            </div>
          </div>
        </div>
      </div>
    

	
	<div id="Mengapa" class="">
	<div class="container row " style="margin-top:4%;margin-bottom:4%;">
        <div class="section">
            <h3 class="header center title ">Mengapa Pahlawan Kebersihan</h3>   
			      <hr style="margin-bottom:5%;>
            <div class="col s12 m12 l12">
              <p style="text-align: center;">Dengan menggunakan jasa pahlawan kebersihan berarti anda ikut membantu memberdayakan masyarakat yang membutuhkan. Selain itu kami membersikan pelayanan yang premium dengan harga yang minimum</p>
            </div>
        </div>
    </div>
	</div>
	
	<div id="CaraPemesanan" class="grey lighten-4" style="padding:3%;">
    <div class="row">
      <div class="col s12 m12 l2">
        <h3 class="header center title" style="margin-top:8%;">Cara Pemesanan</h3>
        <hr style="margin-bottom:8%;">
      </div>
      <div class="carousel js-flickity col s12 m12 l9 offset-l1 offset-m1">
        <div class="carousel-isi">
          <div class="row" >
            <div class="col s5 m4 l2 offset-m1 offset-l1">
              <img width="92%" style="margin-top:0;" src="<?php echo base_url();?>assets/img/konten/iphone1.png">
            </div>
            <div class="col s7 m7 l8">
              <h3 class="grey-text text-darken-4 center secondary-tittle">1. ADD SALAH SATU AKUN PAHLAWAN KEBERSIHAN</h3>
              <p class="grey-text text-darken-4 center" style="top:10%;">Pahlawan Kebersihan akan datang membantu anda setelah anda menghubungi salah satu akun dibawah ini.</p>
              <div class="row center">
                <div class="col s3 m3 l2 offset-l2 pull-s10">
                  <a href="https://www.facebook.com/profile.php?id=100010233344667" target="_blank" class="waves-effect waves-light modal-trigger">
                    <img width=50px id="fb_cara" style="background:grey; @media (max-width: 390px){width:150%;}" onmouseover="hover('fb_cara')" onmouseleave="out('fb_cara')" src="<?php echo base_url();?>assets/img/logo/facebook1.png">
                  </a>
                </div>
                <div class="col s3 m3 l2 pull-s7">
                  <a href="https://www.instagram.com/jasabersihkos_rumah/" target="_blank" class="waves-effect waves-light modal-trigger">
                    <img width=50px style="background:grey;" id="ig_cara" onmouseover="hover('ig_cara')" onmouseleave="out('ig_cara')" src="<?php echo base_url();?>assets/img/logo/instagram1.png">
                  </a>
                </div>
                <div class="col s3 m3 l2 pull-s4">
                  <a class="waves-effect waves-light modal-trigger" href="#modal1" >
                    <img width=50px style="background:grey;" id="wa_cara" onmouseover="hover('wa_cara')" onmouseleave="out('wa_cara')" src="<?php echo base_url();?>assets/img/logo/whatsapp1.png">
                  </a>

                </div>
                <div class="col s3 m3 l2 pull-s1">
                  <a href="https://line.me/ti/p/%40ago0076z" target="_blank" class="waves-effect waves-light modal-trigger">
                    <img width=50px id="line_cara" style="background:grey;" onmouseover="hover('line_cara')" onmouseleave="out('line_cara')" src="<?php echo base_url();?>assets/img/logo/line1.png">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-isi">
          <div class="row" >
            <div class="col s5 m4 l2 offset-m1 offset-l1">
              <img width="92%" style="margin-top:0;" src="<?php echo base_url();?>assets/img/konten/iphone2.png">
            </div>
            <div class="col s7 m7 l8">
              <h3 class="grey-text text-darken-4 center secondary-tittle">2. HUBUNGI PAHLAWAN KEBERSIHAN</h3>
              <p class="grey-text text-darken-4 center" style="top:10%;">Pahlawan Kebersihan akan meminta informasi yang dibutuhkan, lalu akan memberikan perkiraan biaya jasa. (ini minta kejelasan ke orangnya pin)</p>
            </div>
          </div>
        </div>
        <div class="carousel-isi">
          <div class="row" >
            <div class="col s5 m4 l2 offset-m1 offset-l1">
              <img width="92%" style="margin-top:0;" src="<?php echo base_url();?>assets/img/konten/iphone3.png">
            </div>
            <div class="col s7 m7 l8">
              <h3 class="grey-text text-darken-4 center secondary-tittle">3. PAHLAWAN KEBERSIHAN AKAN MEMBANTU ANDA</h3>
              <p class="grey-text text-darken-4 center" style="top:10%;">Pahlawan Kebersihan akan segera menuju lokasi anda dan membersihkannya.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
	
  


  <div id="Testimonial" style="background-image:url(<?php echo base_url();?>assets/img/slider/testi.jpg);" class="black z-depth-1">
          <h3 class="header white-text center title" style="margin-bottom:0px;margin-top:3%;">Testimonial</h3>
		      <hr style=" background-color:white;width:10%;">
          <div class="carousel js-flickity " style="height:400px; margin-bottom:1%;">
            <div class="carousel-isi">
              <div class="konten center">
                <img class="circle" style="top:0px; position:relative;" src="<?php echo base_url();?>assets/img/konten/testi1.jpg" width=150px;>
                <p class="white-text center" style="top:2%"><i>"Jasa Pahlawan Kebersihan ini selalu memberikan kenyamanan pelanggannya."</i><br>-Dian Agus S (21), Gresik</p>
              </div>
            </div>
            <div class="carousel-isi">
              <div class="konten center">
                <img class="circle" style="top:0px; position:relative;" src="<?php echo base_url();?>assets/img/konten/testi2.jpg" width=150px;>
                <p class="white-text center" style="top:2%"><i>"Terima kasih Pahlawan Kebersihan. Saya tidak perlu repot lagi menjaga kebersihan rumah."</i><br>-Natasia, Surabaya</p>
              </div>
            </div>
           
          </div>
    </div>
	  
	  
    <div id="Blog" class="grey lighten-4">
    <div class="container row " style="margin-top:5%;margin-bottom:5%;">
        <div class="section" style="padding-top:0px;">
          <h3 class="header center title">Blog & Promo</h3>
		      <hr style="width:10%;margin-bottom:3% ;">
          <?php $x=0; foreach($blog as $rows) { ?>
          <div class="col s12 m12 l4 center" >
            <div class="  card grey lighten-5 z-depth-1">
              <a  href="<?php echo base_url()."blog/post/".$rows->title_slug;?>">
                <img class="card-image circle" style="padding-bottom:0;" width="55%"  height=180px  src="<?php echo base_url() . "assets/img/post/" . $rows->img;?>">
              </a>
              <div class="card-content black-text" style="min-height:120px; max-height:120px;margin-bottom:2vh">
                <div class="card-title promo-caption"><?php echo $rows->title;?></div>
                <div class="light center"><?php custom_echo($rows->content_text, 60); ?></div>
              </div>
              <a href="<?php echo base_url()."blog/post/".$rows->title_slug;?>" class="waves-effect waves-light btn" style="position:relative;"><i class="material-icons right">search</i>selengkapnya</a>
            </div>
          </div>

          <?php
             $x++;
             if ($x>=3) {
               break;
             }} ?>
        </div>
      </div>
	</div>
	
      <?php echo $footer;?>
     
      <!--Import jQuery before materialize.js-->
      
    </body>
  </html>