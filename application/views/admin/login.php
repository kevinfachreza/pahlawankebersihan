
<!DOCTYPE html>
<html lang="en">


<head>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/materialize.min.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/admin.css"  media="screen,projection"/>

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
</head>

<body class="cyan">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->



  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="http://vignette3.wikia.nocookie.net/egamia/images/f/f3/Intel_logo.png/revision/latest?cb=20061005221757" alt="" class="circle responsive-img valign profile-image-login">
            <p class="center login-form-text">Admin Login</p>
          </div>
        </div>
       <div class="row">
	   <?php echo form_open('adminyo/doLogin'); ?>
		  <div class="row">
			<div class="input-field col s12">
			  <i class="material-icons prefix">account_circle</i>
			  <input id="icon_prefix" name="username" type="text" class="validate">
			  <label for="icon_prefix">Username</label>
			</div>
			<div class="input-field col s12">
			  <i class="material-icons prefix">lock</i>
			  <input id="password" name="pass" type="password" class="validate" required>
			  <label for="password">Password</label>
			</div>
			<div class="input-field col s12">
			  <i class="material-icons prefix">lock</i>
			  <input type="submit" class="btn waves-effect waves-light col s12" required>
			</div>
		  </div>
		</form>
	  </div>
    </div>
  </div>



  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
 
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/materialize.min.js"></script>


</body>

</html>