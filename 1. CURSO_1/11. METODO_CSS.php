<!DOCTYPE html>
<html>
<head>
	<title> Metodo css	</title>
	<script src="jquery.js"></script>
	
	<style >
		body, html
		{
			background: #ccc;
			color: #000;		/* Color general del texto*/
			font-family: Arial;
			margin: 0;
			padding: 0;
		}

		#Item1
		{
			background: #F8C471;
			height: 50px;
			margin:5% auto;
			width: 300px;
		}

		#Item2
		{
			display:block;
			background: #000;
			height: 50px;
			margin:5% auto;
			width: 300px;
		}
	</style>

	<script >
		$(document).ready(function(){			
			
			// Agregando y modificando una propiedad. Funciona sola pa UNA SOLA PROPIEDAD!!!!
			$('body,html').css('background','#FFF')	

			// // Agregando una propiedad CSS para centrando el texto de h1. Notese que h1 no existe en la seccion <style >
			// $('h1').css('text-align','center')	

			// Agregando varias propiedades CSS
			var cssH1 = {
				'text-align':'center',
				'color':'red'
			}
			$('h1').css(cssH1);

			// Capturando valor
			var bgItem2 = $('#Item2').css('background-color');
			var cItem2  = $('#Item2').css('color');

			console.log('primer valor:'+bgItem2);
			console.log('segundo valor:'+cItem2);

			if (bgItem2 = cItem2)
				console.log('Entre al condicional');
				$('#Item2').css('color','#FFF')


		});
	</script>

</head>
<body>
	<h1>M&eacute;todo.css() de jQuery</h1>
	<div id="Item1">Item1</div>
	<div id="Item2">Item2</div>

</body>
</html>