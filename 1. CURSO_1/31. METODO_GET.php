<!DOCTYPE html>
<html>
<head>
	<title> METODO GET </title>
	<script src="jquery.js"></script>
		

	<script >
		// // Caso archivo html
		// $(document).ready(function(){
		// 
		// 	$.get('hola.html',function(data){
		// 		console.log(data);
		// 		$('#receptor').html(data)
		// 	})
		// });

		// Caso archivo php
		$(document).ready(function(){

			$.get('31_METODO_GET.php',{nombre: "Ingeniero Jahir"},function(data){
				console.log(data);
				$('#receptor').html(data)
			})
		});
		
		
	</script>
</head>
<body>
	<div id="receptor"></div>
</body>
</html>