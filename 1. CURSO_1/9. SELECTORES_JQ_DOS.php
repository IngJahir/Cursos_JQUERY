<!DOCTYPE html>
<html>
<head>
	<title> Selectores </title>
	<script src="jquery.js"></script>

	<script >

		//-------------------------------
		// Guardar valores seleccionados
		//------------------------------
		$(document).ready(function(){

			var seleccion = $('.Ejem1');	

			if(seleccion.length)
				console.log('Existen: ' + seleccion.length);		
			else
				console.log('No existe elemento seleccionado');

			// Seleccionar aquellos que NO CONTIENEN cl1. Para esta seccioin quitar los comentarios de  <!-- <div class ="Ejem1 cl1"> -->
			//seleccion.not('.cl1').text('Este elemento no tiene la clase cl1')
			
			// Seleccionar aquellos que TIENEN <P>. Para esta seccioin quitar los comntarios de  <div class ="Ejem1 "> -->
			seleccion.has('p').text('Este elemento tiene un <p> en su contenido');

			// Las listas se manejan como arreglos, eq(3) corresponde al cuarto elemento de la lista
			$('li').first().html('<strong> Soy el elemento 1 </strong>');
			$('li').eq(3).text('soy el elemento 3')
			
		});

		
	</script>
</head>
<body>

	<!-- <div class ="Ejem1 cl1"> -->
	<div class ="Ejem1 ">
		<p > </p>		
	</div>

	<div class ="Ejem1">
		<span></span>		
	</div>

	<ul>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>



</body>
</html>