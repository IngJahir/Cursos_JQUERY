<!DOCTYPE html>
<html>
<head>
	<title> Selectores </title>
	<script src="jquery.js"></script>

	<script >

		//-----------------------------------
		// GETTER = Capturar, SETTER: Colocar
		//-----------------------------------
		$(document).ready(function(){
			
			// // html( ) captua el valor de #Parrafo
			// var almacen = $('#Parrafo').html( );
			// alert(almacen)
			
			// // Captura el valor del id de id = "prueba" 
			// var clase = $('#prueba').attr("id");
			// alert(clase)
			
			// Asignacion de una clase a #prueba
			$('#prueba').attr("class","ejemplo");			
		});
		
	</script>
</head>
<body>

	<p id = "Parrafo"> 
		<strong> Hola JQuery</strong> 
	</p>
	
	<div id="prueba"> </div>


</body>
</html>