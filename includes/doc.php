<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<!--meta-->
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />

<!--links-->
<link rel="stylesheet" href="css/styles.css" type="text/css"/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css"/>
<link rel="stylesheet" href="css/jquery-ui.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,400italic" type="text/css"/>

<!--scripts-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="https://use.typekit.net/qfy0ipp.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<script>
	$(document).ready(function() {
		$('.flexslider').flexslider();
		
		$("#toggle").click(function() {
			$("#navigation").toggle();
		});
		
		$( "#tabs" ).tabs();
	});
</script>
