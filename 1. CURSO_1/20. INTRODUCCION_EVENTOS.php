<!DOCTYPE html>
<html>
<head>
	<title> Introduccion eventos</title>

	<script src="jquery.js"></script>
	<script >

		// ------------------------------------------------------------------------
		// Fuente de eventos: https://api.jquery.com/category/events/event-object/
		// ------------------------------------------------------------------------
		// 
		$(document).ready(function(){
			$('a').click(function(objetoEvento){

				// preventDefault(objetoEvento): Previene lo que "objetoEvento" ejecuta por defecto
				// objetoEvento.preventDefault();

				console.log($(this).attr('id'));
			});
		});

	</script>
</head>
<body>
	<a href="https://codigofacilito.com/" id="evento1"> Hola 1 </a>
	<a href="https://codigofacilito.com/" id="evento2"> Hola 2 </a>

</body>
</html>