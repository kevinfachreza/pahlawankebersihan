<!DOCTYPE html>
<html>
<head>
	<!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/materialize.min.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/admin.css"  media="screen,projection"/>

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
	<script src="https://cdn.tinymce.com/4/tinymce.min.js"></script>
	<script type="text/javascript">
		tinymce.init({
			selector: 'textarea'
		});
	</script>
</head>

<body>
 <div class="nav-wrapper">
 
	<ul id="slide-out" class="side-nav fixed indigo darken-2">
		<li><a href="#!" id="logo"><img src="http://vignette3.wikia.nocookie.net/egamia/images/f/f3/Intel_logo.png/revision/latest?cb=20061005221757"></a></li>
			<li><a href="#!" class="white-text">First Sidebar Link</a></li>
			<li><a href="#!" class="white-text">Second Sidebar Link</a></li>
		</ul>
		<a href="#" id="side-bar-button" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

	
	</div>
	<main>
	<div class="section no-pad-bot" id="index-banner">
		<div class="container">
		  <h1 class="header center orange-text">Post Blog!</h1>
			  <div class="row center">
				<?php echo form_open_multipart('upload/do_upload');?>
				<div class="file-field input-field">
					<div class="btn">
						<span>Cover</span>
						<input type="file">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>
				
				<textarea></textarea>
				<br>
				   <button class="btn waves-effect waves-light orange" type="submit" name="action">Submit
				<i class="material-icons right">send</i>
				</button>
				
				</form>
			  </div>
		</div>
	</div>



</main>
<footer class="page-footer orange">

</footer>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
<script src="<?php echo base_url();?>assets/js/init.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	$('.carousel').carousel();
	});
	$('.carousel.carousel-slider').carousel({full_width: true});

</script>
</body>
</html>