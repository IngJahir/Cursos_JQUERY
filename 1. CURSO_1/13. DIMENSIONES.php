<!DOCTYPE html>
<html>
<head>
	<title>	</title>

	<style>
		
		body
		{
			background: #000;
			margin:0;
			padding:0;
		}

		header
		{
			display: block;
			margin:0;
			width: 365px;
		}

		#e1,#e2
		{
			background: #0080FF;
			display: block;
			height: 100px;
			margin: 20px;
			width: 400px;
		}

		#e1
		{
			background: #FF0040;
			height: 150px;
		}


		#e2
		{
			padding: 15px;
			border-radius: 60px 0px 60px 0;
		}

		p
		{
			margin-left: 10px;
		}
	</style>

	<script src="jquery.js"></script>

	<script >
		$(document).ready(function(){

			// // En este caso funciona como un Getter
			// console.log ($('header img').width());

			// // En este caso funciona como un Setter
			// console.log ($('header img').width(50));
			
			// // Asignacion para cambio de altura del cajetin 1
			// $('#e1').height(50)

			var pos = $('#e2 p').position();
			console.log('Posicion Left: '+ pos.left + ' Posicion Top: ' + pos.top );

			var pos2 = $('#e2 p').offset();
			console.log('Posicion Left 2: '+ pos2.left + ' Posicion Top 2: ' + pos2.top );


			});


	</script>

</head>
<body>

	<header>
		<img src="IMAGENES/AVION.png" alt="CF">
	</header>

	<div id="e1"> </div>

	<div id="e2"> 
		<p> Hola amigos</p>
	</div>


</body>
</html>