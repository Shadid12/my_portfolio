<!DOCTYPE html>
<html>
<?php require 'partials/_lib.php'; ?>
<body>
<?php require 'partials/_canvas.php'; ?>
<?php require 'partials/_nav.php';?>
<?php require 'partials/_profilecard.php';?>
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
	$(document).ready(function(){
		$("#txtbox").hide();
		$("#imgC").hide().delay(1500).fadeIn("slow", function(){
			$("#txtbox").fadeIn("slow");
		});
	});
</script>
