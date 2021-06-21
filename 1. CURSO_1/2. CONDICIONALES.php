<!DOCTYPE html>
<html>
<head>
	<title> Condicionales</title>
</head>
<body>
	<script type="text/javascript">
		
		/* ----------------- */
		/* Condicional corto */
		/* ----------------- */		
		/*
		// aux? = Esto quiere decir aux es verdadero 
		// : 	= Esto quiere decir si no... 
		var aux =false;
		var asignada = aux ? 'Hola' : 'Adios';
		alert(asignada);
		*/
	
		/* ------------- */
		/* Condicionales */
		/* ------------- */
		/*
		var edad = 18;
		if (edad > 18) 		{ alert(" eres mayor de 18");}
		else if (edad < 18) { alert(" eres menor de 18");}
		else 				{ alert(" Tienes 18"); }
		*/
	
		/* ------------- */
		/* switch - Case */
		/* ------------- */
		
		var a = 3;
		switch(a)
		{
			case 0:  alert('a = 0'); break;
			case 1:  alert('a = 1'); break;
			default: alert('a = ?'); break;
		}

		var b ='Hola';
		switch(b)
		{
			case 'Hola': alert('b = 0'); break;
			case 'hola': alert('b = 1'); break;
			default: 	 alert('b = ?'); break;
		}

	</script>

</body>
</html>