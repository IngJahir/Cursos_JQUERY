<!DOCTYPE html>
<html>
<head>
	<title> Efectos personalizados </title>

	<style >
		
		body,html
		{
			padding: 100px;
		}
		
		div
		{
			display: block;
			height: 80px;
			width: 400px;
			margin:0 auto;
		}
		
		#caja1 {background: rgba(56,56,56,0.8); margin-bottom:100px;}
		#caja2 {background: rgba(89,69,36,0.8); }
	</style>

	<script src="jquery.js"></script>
	<script src="jquery.color-animation.js"></script>
	
	<script >

		// --------------------------------------------------------------------------------
		// Fuente de animation para colores : https://bitstorm.org/jquery/color-animation/
		// --------------------------------------------------------------------------------
		
		$(document).ready(function(){
			
			// // Parar una animacion
			// // --------------------
			// var to = setTimeout('pararAnim()',2000);

			// // Animate toma la propiedad del CCS, 5000 son los milisegundos 
			// $('#caja1').animate({marginBottom:0},5000, function(){
			// 	$('#caja1').animate({backgroundColor:'#F7DC6F', marginTop:-100, opacity:0.5})
			// })
			
			// Delay de una animacion
			// -----------------------			
			// $('#caja1').slideUp().delay(2000).slideDown()
			
			// Parar una animacion
			// --------------------
			
			// Desactiva todas las simulaciones, establece valores finales de las propiedades 
			$.fx.off = true

			// Animate toma la propiedad del CCS, 5000 son los milisegundos 
			$('#caja1').animate({marginBottom:0},5000, function(){
				$('#caja1').animate({backgroundColor:'#F7DC6F', marginTop:-100, opacity:0.5})
			})
		});

		function pararAnim (){
			$('#caja1').stop()

		}
	</script>
</head>
<body>

	<div id="caja1"></div>
	<div id="caja2"></div>

</body>
</html>


					
			