<!DOCTYPE html>
<html>
<head>
	<title> Detectar caracteristicas del navegador </title>
	<script src="https://code.jquery.com/jquery-1.7.2.min.js"></script>

	

	<script >
		// ------------------------------------------------------------------------
		// Fuente de caracteristicas navegador: http://modernizr.com/
		// ------------------------------------------------------------------------

		console.log($.browser)
		alert("Version: "+$.browser.version + " -- Navegador IE?: "+$.browser.msie)

		if($.browser.msie)
		{
			alert('Es Internet Explorer')
		} 
		else
		{
			alert('No es Internet Explorer')	
		}
	</script>

</head>
<body>

</body>
</html>