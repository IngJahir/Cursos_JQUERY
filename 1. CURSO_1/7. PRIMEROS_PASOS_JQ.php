<!DOCTYPE html>
<html>
<head>

	<title> Primeros pasos en JQuery</title>

	<script src="jquery.js"></script>

	<script >

		$(document).ready(function(){
			
			// Atributo para el primer div.
			// <p> xxxx <p> Envia el texto al div
			$('#case_1').text('<p> Hola mundo </p>');

			// Llamando a la class = case_2, se usa punto al inicio
			$('.case_2').html('<strong> Estoy usando JQuery </strong>');
		});

	</script>

</head>

<body>
	<div id ="case_1"> </div>
	<div class="case_2"></div>	
</body>


</html>