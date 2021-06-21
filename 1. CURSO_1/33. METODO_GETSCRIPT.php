<!DOCTYPE html>
<html>
<head>
	<title>  GETSCRIPT </title>
	<style >
		#ejemplo
		{
			height: 200px;
			width: 400px;
			background-color: rgb(250,100,100); 
		}
	</style>

	<script src="jquery.js"></script>

	<script >
		$(document).ready(function(){
			$.getScript('jquery.easing_plugin.js',function(){
				console.log("Termino");
				$('#ejemplo').slideUp(3000,'easeOutBounce')
			})
		});	
	</script>

</head>
<body>
	<div id="ejemplo"></div>
</body>
</html>