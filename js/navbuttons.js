/* global $ */
var hide = function(){
        $("#fs").fadeOut("slow");
	    $("#hello").fadeOut("slow");
		$("#txtbox").fadeOut("slow");
		$("#box1").fadeOut("slow");
		$("#box2").fadeOut("slow");
		$("#box3").fadeOut("slow");
		$("#social").fadeOut("slow");
		$("#resume").fadeOut("slow");
		$("#imgC").fadeOut("slow");
};

var show = function(){
        $("#fs").fadeIn("slow");
	    $("#hello").fadeIn("slow");
		$("#txtbox").fadeIn("slow");
		$("#box1").fadeIn("slow");
		$("#box2").fadeIn("slow");
		$("#box3").fadeIn("slow");
		$("#social").fadeIn("slow");
		$("#resume").fadeIn("slow");
		$("#imgC").fadeIn("slow");
		$("#skillicon").fadeIn("slow");
}

$(document).ready(function(){
    $("#portfolioSnap").hide();
    $("#portbtn").click(function(){
       hide();
       setTimeout(function(){
           $("#portfolioSnap").fadeIn("slow");
       }, 500);
    });
    
    $("#goback").click(function(){
        $("#portfolioSnap").fadeOut("slow", function(){
            setTimeout(show(), 500);
        });
    });
});