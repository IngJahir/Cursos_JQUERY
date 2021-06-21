<!DOCTYPE html>
<html>
<head>
	<title> </title>

	<style>	
		
		body,html
		{
			background: #000;
			color: #FFF;
			margin: 0;
			padding: 0;
		}

		header
		{
			display: block;
			margin: 0 auto 50px auto;
			width: 365px;
		}

		ol
		{
			display: block;
			width: 500px;
			margin:0 auto;
		}

		ol li
		{
			background: #088A29;
			margin: 5px auto;
			height: 30px;
			width: 100%;
		}

		button
		{
			display: block;
			margin: 0 auto;
			width: 80px;
		}

		div
		{
			background: #FE2E64;
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

				// // --------------------------------------------------------------- 
				// // Append y AppendTo envia el primer elemento a la ultima posicion
				// // --------------------------------------------------------------- 
				
				// // Metodo 1: Append
				// $('ol:first').append($('ol li:first'))

				// // Metodo 2:AppendTo. Destino-> Objeto
				// $('ol li:first').appendTo('ol:first')
				
				// // -------------------------------------------------------------------
				// // Prepend y prependTo envia el ultimo elemento a la primera posicion
				// // -------------------------------------------------------------------
				
				// // Metodo 1: Prepend
				// $('ol:first').prepend($('ol li:last'))				
				
				// // Metodo 2:PrependTo. Destino-> Objeto
				// $('ol li:last').prependTo('ol:first')
				
				// // --------------------------------------------------------------- 
				// // After e InsertAfter toman el elemento y lo cambian de posicion
				// // ---------------------------------------------------------------
								
				// // Metodo 1: After
				//$('#e1').after($('ol li:first')) 
								
				// // Metodo 2: InsertAfter
				// $('ol li:first').insertAfter($('#e1'));

				// // ----------------------------------------------------------------- 
				// // Before e InsertBefore toman el elemento y lo cambian de posicion
				// // ------------------------------------------------------------------
								
				// // Metodo 1: After
				// $('#e1').before($('ol li:first')) 
								
				// // Metodo 2: InsertAfter
				// $('ol li:first').insertBefore($('#e1'));
				
				// // -------------------------------
				// // El metodo Clon clona elementos 
				// // -------------------------------
				
				// var clon = $('ol li:first').clone();		
				// $('#e1').before(clon) 

				// // ---------------------
				// // Creacion de elemento
				// // ---------------------
				// var nuevo_e = $('<p> Hola mundo </p>');
				// $('#e1').append(nuevo_e)

				// ----------------
				// Remover elemento
				// ----------------				
				$('ol li:last').remove();
				
			});
		});
	</script>

</head>
<body>
	<header>
		<img src="IMAGENES/AVION.png" alt="CF">
	</header>
	
	<ol>
		<li> Elemento 1 </li>
		<li> Elemento 2 </li>
		<li> Elemento 3 </li>
		<li> Elemento 4 </li>
		
	</ol>

	<button id = "test"> Ejecutar </button>

	<div id="e1">
		<p > Div 1</p>
	</div>

	<div id="e2"> 
		<p> Div 2</p>
	</div>




</body>
</html>