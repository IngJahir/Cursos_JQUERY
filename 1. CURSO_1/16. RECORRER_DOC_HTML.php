<!DOCTYPE html>
<html>
<head>
	<title> Recorrer DOC</title>
</head>

<script src="jquery.js"></script>
<script >
	$(document).ready(function(){

		// // --------------------------------------------------------------------
		// // La funcion next() toma el texto INMEDIATAMENTE siguiente a #primero
		// // --------------------------------------------------------------------
		// var var_aux = $('#primero').next().text();
		// console.log(var_aux)

		// // -----------------------------------------------
		// // La funcion parent() extae el id padre de #test
		// // -----------------------------------------------
		// var var_1 = $('#test').parent().text();
		// console.log(var_1);

		// var var_2 = $('#test').parent().attr('id');		
		// console.log(var_2)
		
		// // -----------------------------------------------
		// // La funcion children() extae el id hijo de #padre
		// // -----------------------------------------------
		// var var_1 = $('#padre').children().text();	
		// console.log(var_1)

		// var var_2 = $('#padre').children().attr('id');	
		// console.log(var_2)

		// -----------------------------------------------------------------
		// La funcion each() extae la informacion de los li que estan en ul
		// -----------------------------------------------------------------
		$('ul li').each(function(index,elemento){
			console.log('El elemnto numero ' + index + ' contiene este texto: '+ $(elemento).text());
		});
		
	});
</script>

<body>
	<div>
		<article id="padre">
			Hey!!!! :D
			<div id="test"> Soy el hijo	</div>
		</article>
	</div>

	<ul>
		<li id="primero"> Soy el primero </li>
		<li> Soy el que sigue </li>
		<li> Soy el cuba</li>
	</ul>

</body>
</html>