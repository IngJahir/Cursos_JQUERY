<!DOCTYPE html>
<html>
<head>
	<title> Funciones </title>
</head>
<body>
	<script type="text/javascript">

		/* ------------------------------ */
		/* Metodo 1: Con retorno de valor */
		/* ------------------------------ */
		
		/*
		function factorial(num)
		{
			if (num==0) { fac = 1; }
			else
			{
				var fac = 1;
				for(num; num>0; num--) { fac = fac*num;}
			}
			return fac;
		}
		result = factorial(3);
		alert(result);
		*/
		
		/* ---------------------------------------------------------------------------------- */
		/* Metodo 2: Sin retorno de valor, pero el resultado queda almacenado en una variable */
		/* ---------------------------------------------------------------------------------- */

		var factorial = function(num){
			if (num==0) { fac = 1; }
			else
			{
				var fac = 1;
				for(num; num>0; num--) { fac = fac*num;}
			}
			alert (fac);
		}

		factorial(5);
		
	</script>

</body>
</html>