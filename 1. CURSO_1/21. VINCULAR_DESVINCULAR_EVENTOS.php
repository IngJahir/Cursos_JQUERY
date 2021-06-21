<!DOCTYPE html>
<html>
<head>
	<title> Vincular - Desvincular eventos</title>

	<style>
		
	</style>

	<script src="jquery.js"></script>
	<script >
		var caja1bg, suma=0;
		$(document).ready(function(){

			// // --------------------------------
			// // METODO 1: Sin usar el metodo on
			// // --------------------------------
			// // Al pasar el mouse se convierte en rojo
			// $('#caja1').mouseover(function(){
			// 	caja1bg = $(this).css('background');
			// 	$(this).css('background','red')			
			// })

			// // Al pasar el mouse se convierte en rojo
			// $('#caja1').mouseout(function(){
			// 	$(this).css('background',caja1bg)			
			// })

			// // ------------------------------
			// // METODO 2: Usando el metodo on
			// // ------------------------------
			
			// // Al pasar el mouse se convierte en rojo
			// $('#caja1').on('mouseover',function(){
			// 	caja1bg = $(this).css('background');
			// 	$(this).css('background','red')			
			// })

			// // Al pasar el mouse se convierte en rojo
			// $('#caja1').on('mouseout',function(){
			// 	$(this).css('background',caja1bg)			
			// })

			// // -------------------------------------------------------------------------
			// // El metodo on permite vincular una serie de eventos asociados a un objeto
			// // -------------------------------------------------------------------------
			
			// $('#caja1').on({

			// 	'mouseover': function(){
			// 		suma++;
			// 		caja1bg = $(this).css('background');
			//  		$(this).css('background','red')
			//  	},

			//  	'mouseout': function(){
			// 		$(this).css('background',caja1bg)
					
			// 		// El evento off desactiva el 'mouseover'
			// 		if(suma >= 3)
			// 			$('#caja1').off('mouseover')
			// 	}
			// })

			// $('#caja1').on('mouseover',function(){
			// 	console.log('Pasaste el cursor')
			// })
			
			// // -------------------------------------
			// // Desvinculacion de 'Pasaste el cursor'
			// // -------------------------------------
			
			// var f1 = function(){ console.log('Pasaste el cursor') };

			// var f2 = function(){
			// 			suma++;
			// 			caja1bg = $(this).css('background');
			//  			$(this).css('background','red')
			//  		}
 
			// $('#caja1').on({

			// 	'mouseover':f2 ,

			//  	'mouseout': function(){
			// 		$(this).css('background',caja1bg)
					
			// 		// El evento off desactiva el 'mouseover'
			// 		if(suma >= 3)
			// 			$('#caja1').off('mouseover',f2)
			// 	}
			// })

			// $('#caja1').on('mouseover',f1)
			
			// -------------------------------------------------
			// METODO on: El evento se ejecuta una sola vez !!!!
			// -------------------------------------------------
			
			// Al pasar el mouse se convierte en rojo
			$('#caja1').one('mouseover',function(){
				caja1bg = $(this).css('background');
				$(this).css('background','red')			
			})

			// Al pasar el mouse se convierte en rojo
			$('#caja1').on('mouseout',function(){
				$(this).css('background',caja1bg)			
			})
		});		
	</script>
</head>
<body>
	<div id ="caja1"> xxx </div>
</body>
</html>