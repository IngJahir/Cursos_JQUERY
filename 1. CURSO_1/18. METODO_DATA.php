<!DOCTYPE html>
<html>
<head>
	<title> METODO DATA	</title>

	<script src="jquery.js"></script>

	<script >
		$(document).ready(function(){

			// Agregar elemento
			// ----------------
			$('ul li').each(function(indice,elemento){

				// Nomenclatura: $.data(elemento,'nombreAtributo',valor)
				$.data(elemento,'posicion',indice)
			})

			// Extraer elemento adicionado
			// ---------------------------			
			$('ul li').each(function(indice,elemento){

				// Nomenclatura: $.data(elemento,'nombreAtributo',valor)
				var aux_val = $.data(elemento,'posicion');
				console.log(aux_val)
			})
		})
	</script>
</head>
<body>
	<ul>
		<li> Uno </li>
		<li> Dos </li>
		<li> Tres </li>
	</ul>

</body>
</html>