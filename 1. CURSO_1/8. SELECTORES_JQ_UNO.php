<!DOCTYPE html>
<html>
<head>
	<title> Selectores </title>
	<script src="jquery.js"></script>

	<script >

		// //----------------------------
		// // Cambio de color en el fondo
		// //----------------------------
		// $(document).ready(function(){			
		// 		$('div.miDiv').css({
		// 			'background':'#F7DC6F' 
		// 		});
		// });

		// //-------------------------------
		// // Cambio de texto en un elemento
		// //-------------------------------
		// $(document).ready(function(){			
		// 	$('div.miDiv article p').text("Hola selectores avanzados ")
		// });

		//----------------------------------------------
		// Cambio de texto en varios elementos al tiempo
		//-----------------------------------------------
		$(document).ready(function(){			
			$('#parrafo_uno, #parrafo_dos, span').text("Hola somos trillisos maravilla !!!!")
		});

	</script>
</head>
<body>

	<div class ="miDiv">
		<article>
			<p id='parrafo_uno'> 
				Hola Jquey
			</p>
		</article>
		
	</div>

	<div >
		<article class="miDiv">
			<p id='parrafo_dos'>
				Curso de codigo facilito
			</p>
		</article>		
	</div>

	<span> </span>

</body>
</html>