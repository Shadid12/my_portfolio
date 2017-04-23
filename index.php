<!DOCTYPE html>
<html>
<head>
<title>Shadid</title>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.0.23/css/bulma.min.css">

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script src="https://npmcdn.com/particlesjs@2.0.2/dist/particles.min.js"></script>

</head>
<body>

<canvas class="background"> 
</canvas>
<?php 
require 'partials/_nav.php';
 ?>
<!--animation backgoround-->

<!-- create a profile card -->
	<div id="center">
		
			<img class="img-circle" src="img/profile.jpg" id="imgC">
			<div class="box" id="txtbox">
				<div>
					<p>Hello, I am shadid. Full stack Web Developer. Welcome to my website</p>
				</div>
			</div>
	</div>

</body>
</html>

<style type="text/css">
	.img-circle {
		height: 120px;
		width: 120px;
	    border-radius: 50%;
	}

	#center {
	  padding: 5px;
	  width: 250px ;
	  margin-left: auto ;
	  margin-right: auto ;
	}

.background {
   position: absolute;
   display: block;
   top: 0;
   left: 0;
   z-index: 0;
 }

</style>

<script type="text/javascript">
	/* global $ */
	$(document).ready(function(){
		$("#txtbox").hide();
		$("#imgC").hide().delay(1500).fadeIn("slow", function(){
			$("#txtbox").fadeIn("slow");
		});
	});
</script>

<script type="text/javascript">
window.onload = function() {
  /* global Particles */
  Particles.init({
    selector: '.background',
    maxParticles: 100,
    sizeVariations: 3
   });

};
</script>