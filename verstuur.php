
<!DOCTYPE html> 
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>jQuery Mobile Docs - Pages</title> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>

</head> 
<body> 

	<div data-role="page" class="type-index">

		<div data-role="header" >
		<h1>Pizzeria</h1>
		<a href="index.html" data-icon="home" data-iconpos="right" data-direction="reverse">Home</a>
		<a href="instellingen.html" data-icon="gear" data-iconpos="right" data-rel="reverse" >Instellingen</a>
	</div><!-- /header -->

	<div data-role="content">
	
	<p>Bedankt voor uw bestelling</p>

<?php 
while (list($key,$value) = each($_POST)) { 
   echo "$key: $value" . "<br />"; }
?>



		</div><!-- /ui-body wrapper -->	
</div><!-- /page -->

</body>
</html>