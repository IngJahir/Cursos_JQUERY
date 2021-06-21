<!DOCTYPE html>
<html>
<head>
	<title> </title>

	<style >
		#caja1
		{
			background: rgba(56,56,56,0.8);
			display: block;
			height: 80px;
			margin: 5% auto;
			width: 400px;
		}
	</style>

	<script src="jquery.js"></script>
	<script >

		// ------------------------------------------------
		// Fuente: https://api.jquery.com/category/effects/	
		// ------------------------------------------------
		
		$(document).ready(function(){

			var elem = $('#caja1');
			$('#btn1').click(function(){

				// // 1A. Mostrar elemento
				// elem.show()

				// // 2A. Mostrar elemento version slide
				// elem.slideDown()

				// // 3A.Mostrar elemento version slide
				// elem.fadeIn()
				
				// 4A.Mostrar elemento version slide, parametro en milisegundos
				elem.fadeIn(5000)
			})

			$('#btn2').click(function(){

				// // 1B. Ocultarr elemento
				// elem.hide()

				// // 2B. Ocultarr elemento version slide
				// elem.slideUp()

				// // 3B. Ocultarr elemento version slide
				// elem.fadeOut()
				
				// 4B. Ocultarr elemento version slide, parametro en milisegundos
				elem.slideToggle(1000)
			})
		});
	</script>

	
</head>
<body>
	<div id = "caja1"></div>
	<button id = "btn1"> Mostrar </button>
	<button id = "btn2"> Ocultar </button>



</body>
</html>