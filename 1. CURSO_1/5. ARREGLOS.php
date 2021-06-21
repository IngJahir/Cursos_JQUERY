<!DOCTYPE html>
<html>
<head>
	<title> Aggreglos</title>
</head>
<body>
	<script type="text/javascript">

		/* --------------- */
		/* ARREGLOS CASO 1 */
		/* --------------- */

		// //Declaracion del arreglo
		// var arreglo = new Array();

		// //Llenado del arreglo para 0 y 1. En Java un arreglo puede tener diferentes tipos de datos
		// arreglo.push(3);
		// arreglo.push('Hola mundo');

		// arreglo[0]=  "Rodolfo"
		
		// // Impripir en consola
		// console.log(arreglo[0]);
		

		/* --------------- */
		/* ARREGLOS CASO 2 */
		/* --------------- */ 
				
		// var arreglo = [1,2,'Hola','Mundo'];
		// console.log(arreglo.length)

		// for(i=0; i<arreglo.length; i++)
		// {
		// 	// Impripir en consola
		// 	console.log(arreglo[i]);
		// }
		
		/* -------- */
		/* MATRICES */
		/* -------- */ 

		// Concatenacion de caracteres de un arreglo
		var arreglo = [[1,2,3],['a','b','c']];
		var cadena = arreglo[1].join('');		
		console.log(cadena);

		// Conversion de una cadena en un arreglo
		var cadena = 'ab-cd';
		var arreglo2 = cadena.split('-');
		console.log(arreglo2[1]);
	</script>
</body>
</html>