<!DOCTYPE html>
<html>
<head>
	<title> EASING: Velocidad con la que se ejecuta la simulacion </title>
	<style >
		#ejemplo
		{
			height: 200px;
			width: 400px;
			background-color: rgb(250,100,100);
		}
	</style>

	<script src="jquery.js"></script>
	<script src="jquery.easing_plugin.js"></script>

	<script >
		$(document).ready(function(){
			$('#boton').on('click',function(){
				// linear o swing corresponden a las velocidades
				// $('#ejemplo').slideUp('slow','swing')
				
				// Usando la libreria easing_plugin.js 
				$('#ejemplo').slideUp('slow','easeOutBounce')
				$(this).animate({
					height : ['+=100','easeOutBounce'],
					width: ['+=50','linear']
				})
			})
		});
	</script>
	
</head>
<body>
	<div id="ejemplo"></div>
	<button id="boton"> Mover </button>
</body>
</html>