<!DOCTYPE html>
<html>
<head>
	<title> Animaciones parte 2</title>
	<style >
		#ejemplo
		{
			height: 200px;
			width: 400px;
			background-color: rgb(250,100,100);
		}
	</style>

	<script src="jquery.js"></script>

	<script>
		
		$(document).ready(function(){

			// Creacion de una velocidad personalizada
			$.fx.speeds.lento = 3000;
			$.fx.speeds.rapido = 100;

			// fadeOut oculta el elemento
			$('#boton').on('click',function(){				
				$('#ejemplo').fadeOut('lento', function(){

					// $(this).remove();
					// $('body').append('El elemento se ha borrado')
					$(this).fadeIn('rapido')
				})
			})
		});
		
	</script>

</head>
<body>
	<div id="ejemplo"></div>
	<button id="boton">fadeOut</button>
</body>
</html>