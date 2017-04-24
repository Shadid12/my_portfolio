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
            <a class="button is-success is-outlined is-medium" href="">Download my Resume</a>
        </div>
    </div>
</div>

<div class="columns">
  <div class="column" id="box1">
    <div class="box">
    	<strong>Front End</strong>
    	<hr>
    	<br>
    	<ul>
    		<li><span><i class="fa fa-code" aria-hidden="true"></i></span> JavaScript</li> <br>
    		<li><span><i class="fa fa-code" aria-hidden="true"></i></span> JQuery</li> <br>
    		<li><span><i class="fa fa-code" aria-hidden="true"></i></span> Angular.js</li> <br>
    		<li><span><i class="fa fa-code" aria-hidden="true"></i></span> React.js</li> <br>
    	</ul>
    </div>
  </div>
  <div class="column" id="box2">
    <div class="box">
    	<strong>Back End</strong>
    	<hr>
    	<br>
    	<ul>
    		<li><span><i class="fa fa-diamond" aria-hidden="true"></i></span> Ruby on Rails</li> <br>
    		<li><span><i class="fa fa-code" aria-hidden="true"></i></span> Node.js (Express.js)</li> <br>
    		<li><span><i class="fa fa-code" aria-hidden="true"></i></span> PHP</li> <br>
    	</ul>
    </div>
  </div>
  <div class="column" id="box3">
    <div class="box">
    	<strong>UX/UI design</strong>
    	<hr>
    	<br>
    	<ul>
    		<li><span><i class="fa fa-html5" aria-hidden="true"></i></span> HTML5</li> <br>
    		<li><span><i class="fa fa-css3" aria-hidden="true"></i></span> CSS</li> <br>
    		<li><span><i class="fa fa-terminal" aria-hidden="true"></i></span> SASS</li> <br>
    	</ul>
    </div>
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
<link rel="stylesheet" href="css/portfolio.css" type="text/css" />

<script type="text/javascript">
	/* global $ */
	var booom = function() {
	    $("#social").fadeIn("slow");
	    $("#resume").fadeIn("slow");
	    $("#fs").fadeIn("slow");
	    $("#hello").fadeIn("slow");
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
		$("#imgC").hide().delay(1500).fadeIn("slow", function(){
			$("#txtbox").fadeIn("slow");
			$("#box1").fadeIn("slow");
			$("#box2").fadeIn("slow");
			$("#box3").fadeIn("slow");
			booom();
		});
		
		
	});
</script>
