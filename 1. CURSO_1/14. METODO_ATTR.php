<!DOCTYPE html>
<html>
<head>
	<title> Metodo ATTR</title>
	<script src="jquery.js"></script>
	<script>
		$(document).ready(function(){
			
			// Activar <div id ="prueba" class ="pruebaClass"></div> para los casos 1,2,3 y 4.

			// ------------------------------------------------------------
			// CASO 1: Enviando a #prueba el valor de class = cambieClase.
			// ------------------------------------------------------------  
			$('#prueba').attr('class','cambieClase');			
			
			// // ----------------------------------------------------------------
			// // CASO 2: Enviando un #prueba el valor de class usando una funcion
			// // ---------------------------------------------------------------- 
			// $('#prueba').attr('class',function(){
			// 	var cadena = "Hola mundo";
			// 	return cadena
			// });
			
			// // ------------------------------------
			// // CASO 3: Capturando el valor de class
			// // ------------------------------------
			// var clase = $('#prueba').attr('class');
			// alert(clase)
			
			// // ---------------------------------
			// // CASO 4: Remover valor de atributo
			// // ---------------------------------  
			// $('#prueba').removeAttr('class');
			// var clase = $('#prueba').attr('class');
			// alert(clase)
			
			// // --------------------------------------------------------------------------
			// // CASO 5: e captura el evento click. En este caso this corresponde al valor 'a' 
			// // --------------------------------------------------------------------------
			// $('a').click(function(e){
			// 	e.preventDefault();
			// 	var link = $(this).attr('href')
			// 	alert("Unted esta saliendo de nuestro sitio");
			// 	location.href = link
			// });

		});

	</script>
</head>
<body>
	<div id ="prueba" class ="pruebaClass"></div>
	<a href="https://codigofacilito.com/">Codigo Facilito</a>
	
</body>
</html>