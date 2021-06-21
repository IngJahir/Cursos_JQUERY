<!DOCTYPE html>
<html>
<head>
	<title> Objetos Javascript </title>
</head>
<body>
	<script type="text/javascript">

		// Forma de declaracion de una clase 
		// En este caso un objeto (Mayuscula) almacena una clase (minuscula) 

		var obj_Gato = new class_gato("Bola de pelos");
		var obj_Gato2 = new class_gato("Minino");

		function class_gato(nombre)
		{
			// Aqui se declaran los atributos, que son caraceristicas
			this.nombre = nombre;

			// Aqui se declaran los metodos, que son las funciones que hace el objeto
			this.maulla = function(){
				alert(this.nombre + " Miauuu");
			};			
		}
		
		// Del objeto Gato se extrae el atributo nombre
		alert("El gato se llama: "+obj_Gato.nombre );
		alert("El gato 2 se llama: "+obj_Gato2.nombre);
		obj_Gato.maulla();

	</script>

</body>
</html>