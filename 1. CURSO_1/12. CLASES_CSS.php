<!DOCTYPE html>
<html>
<head>
	<title> Clases CSS </title>
	<script src="jquery.js"></script>

	<style >
		.test
		{
			background: red;
		}
		
	</style>

	<script>
		
		// // Adicionar una clase
		// // -------------------
		// // Dejar en comentario <div id="test" class="test"> Click on me</div>
		// $(document).ready(function(){
		// 	$(document).click(function(){
		// 		$('#test').addClass('test');

		// 	});
		// });	

		// // Remover una clase
		// // -------------------
		// // Dejar en comentario <div id="test"> Click on me</div>
		// $(document).ready(function(){
		// 	$(document).click(function(){
		// 		$('#test').removeClass('test');

		// 	});
		// });

		// Funcion Toggle: Remueve una clase si existe o la adddiciona si no existe
		// ------------------------------------------------------------------------
		// // Dejar en comentario <div id="test" class="test"> Click on me</div>
		$(document).ready(function(){
			$(document).click(function(){
				$('#test').toggleClass('test');
				if($('#test').hasClass('test')) { $('#test').text("Hey soy de color rojo");}
				else { $('#test').text("No soy de color rojo");}
			});
		});
		
	</script>
</head>
<body>
	<div id="test"> Click on me</div>
	<!-- <div id="test" class="test"> Click on me</div> -->

</body>
</html>