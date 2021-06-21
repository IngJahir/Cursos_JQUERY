<!DOCTYPE html>
<html>
<head>
	<title> Metodos Utilitarios </title>
	
	<style >
		
		body,html
		{
			background: #000;
			color: #000;
			font-weight: bold;
			margin: 0;
			padding: 0;
		}
		
		header
		{
			display: block;
			margin: 0 auto 50px auto;
			width: 365px;
		}

		button
		{
			display: block;
			margin:0 auto;
			width: 80px;
		}

		div
		{
			background: #FFF;
			height: 50px;
			display: block;
			width: 400px;
			margin: 2px auto;
		}

	</style>

	<script src="jquery.js"></script>
	<script >
		$(document).ready(function(){
			$('button').click(function(){

				// ------------------------------------------------------------------------
				// Fuente de Metodos utilitarios: http://api.jquery.com/category/utilities/
				// ------------------------------------------------------------------------

				var arreglo = [ 'Hugo', 'Paco', 'Luis', 'CodgoFacilito'];
				
				// // $.each(arreglo,function()): Recorre un arreglo y se ejecuta una funcion en cada elemento del arreglo
				// // ----------------------------------------------------------------------------------------------------
				// $.each(arreglo,function(indice,val){

				// 	// Con este condicional se salta el elemento 'Paco'
				// 	if(arreglo[indice] == 'Paco')
				// 		return true;

				// 	// Mostrar datos del arreglo
				// 	console.log('Elemento: '+indice+' vale: '+val)
				// })				

				// // $.inArray('value',arreglo): Busca el valor dentro de un arreglo y regresa su indice. (-1 si es vacio)
				// // ------------------------------------------------------------------------------------------------------ 
				// if($.inArray('Paco',arreglo) !== -1)
				// 	var ind = $.inArray('Paco',arreglo);
				// 	console.log(arreglo[ind]);				

				// $.trim(value) : Elimina los espacios en blanco al principio y al final
				// ---------------------------------------------------------------------- 
				var espacio = '    hola    mun   do    ';
				console.log(espacio);
				console.log($.trim(espacio));
				
			})

		})
		
	</script>
		
</head>
<body>

	<header>
		<img src="IMAGENES/AVION.png" alt="CF">
	</header>

	<button id="test"> Ejecutar </button>

	<div id = "e1">
		Metodos Utilitarios
	</div>

</body>
</html>