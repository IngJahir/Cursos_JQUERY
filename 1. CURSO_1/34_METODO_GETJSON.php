<!DOCTYPE html>
<html>
<head>
	<title> Metodo Animate </title>
</head>

<style >
	*{margin:0; padding:0;}

	body,html
	{
		font-family: Myriad Pro,Arial;
		background: #111a29;
		color: #FFF;
	}

	#main
	{
		display: block;
		margin:0 auto;
		width: 400px;
	}

	#main h1
	{
		display: block;
		width: 100%;
		text-align: center;
	}
	
	::selection
	{
		background: #c04c22;
		color:#FFF;
	}

	form
	{
		display: block;
		width: 100%;
	}
	
	input,textarea
	{
		font-family: Myriad Pro,Arial;
		color:#FFF;
		border: 0;
		outline: 0;
		background: #1f61ad;
		border-radius: 1px;
		font-size: 20px;
		margin: 10px auto;
		width: 95%;
		display: block;
		max-height: 100px;
	}

	textarea
	{
		max-width: 95%;
		height: 100px;		
	}

	input [type = submit]
	{
		display: inline-block;
		vertical-align: middle;
		height: 25px;
		width: 80%;
		cursor: pointer;
	}

	#status img
	{
		width: 20px;
		height: 20px;
	}

</style>

<!-- <script src="https://code.jquery.com/jquery-1.7.2.min.js"></script> -->
<script src="jquery.js"></script>
<script src="spin.min.js"></script>

<script>

	// ---------------------------------------------------------------
	// Fuente de metodos de AJAX: https://api.jquery.com/jquery.ajax/ 
	// ----------------------------------------------------------------

	$(document).ready(function(){

		var pet = $('#main form').attr('action');
		var met = $('#main form').attr('method');

		$('#main form').on('submit',function(e){

			e.preventDefault();
			var info = $('#main form').serialize();


			$.getJSON('34A_METODO_GETJSON.php',info,function(resp){
				$.each(resp,function(c,v){
					console.log(c + '=>' + v):
				})
			})

		})
	});

</script>

<body>
	<div id="main">
		<h1> Formulario de contacto </h1>
		<form action="34A_METODO_GETJSON.php" name="fo" method="POST">

			<input type="text" name="nombre" placeholder="Nombre...." >
			<input type="email" name="mail" placeholder="Correo electronico...." >
			<textarea name="mensaje" placeholder="Mensajes...." ></textarea>
			<div style="display:block; width:60%; margin:0 auto">
				<input type="submit" name="send" value="Enviar"/>
				<div id="status">    </div>				
			</div>	

		</form>
		
	</div>



</body>
</html>