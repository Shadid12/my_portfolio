<!DOCTYPE html>
<html>
<?php require 'partials/_lib.php'; ?>
<body>

<?php require 'partials/_canvas.php'; ?>
<?php require 'partials/_nav.php';?>
<?php require 'partials/_profilecard.php';?>
<?php require 'partials/_portfolio.php';?>
<br>

<div class="container">

<div class="columns" id="social">
    <div class="column is-half is-offset-4">
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <span><a href="https://github.com/Shadid12"><i class="fa fa-github fa-2x" aria-hidden="true"></i></a></span> &nbsp &nbsp
        <span><a href="https://www.linkedin.com/in/shadid12/"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a></span> &nbsp &nbsp
        <span><a href="http://stackoverflow.com/users/3422137/shadid"><i class="fa fa-stack-overflow fa-2x" aria-hidden="true"></i></a></span> &nbsp &nbsp
    </div>
    
</div>

<div class="container" id="resume">
    <div class="coloumns">
        <div class="column is-half is-offset-4" style="margin-right: -5px">
            <a class="button is-success is-outlined is-medium" href="https://www.visualcv.com/shadidg">Download my Resume</a>
        </div>
    </div>
</div>
</body>

<?php require "partials/_skills.php" ?>

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
<link rel="stylesheet" href="css/portfolio.css" type="text/css" />

<!--<script type="text/javascript" src="js/exp.js"></script>-->
<!--<link rel="stylesheet" href="css/nav.css" type="text/css" />-->

<script type="text/javascript">
	/* global $ */
	var booom = function() {
	    $("#social").fadeIn("slow");
	    $("#resume").fadeIn("slow");
	    $("#fs").fadeIn("slow");
	    $("#hello").fadeIn("slow");
	    $("#skillicon").fadeIn("slow");
	}
	
	$(document).ready(function(){
	    $("#fs").hide();
	    $("#hello").hide();
		$("#txtbox").hide();
		$("#box1").hide();
		$("#box2").hide();
		$("#box3").hide();
		$("#social").hide();
		$("#resume").hide();
		$("#skillicon").hide();
		$("#imgC").hide().delay(500).fadeIn("slow", function(){
			$("#txtbox").fadeIn("slow");
			$("#box1").fadeIn("slow");
			$("#box2").fadeIn("slow");
			$("#box3").fadeIn("slow");
			booom();
		});
	
	$("#portbtn").click(function(){
		$("#skillicon").hide();
	});
		
	});
</script>
