
// Trayendo los id de "formulario" y "respuesta"
// ---------------------------------------------
var formulario = document.getElementById('formulario')
var respuesta = document.getElementById('respuesta')

formulario.addEventListener('submit',function(e)
{
	e.preventDefault();
	console.log('me diste un click');

	// Datos del formulario
	// --------------------
	var datos = new FormData(formulario)
	
	// A partir del objeto datos trae el valor de usuario y pass
	console.log(datos)
	console.log(datos.get('usuario'))
	console.log(datos.get('pass'))

	// Capturando informacion enviada por el documento post.php
	// --------------------------------------------------------
	fetch('post.php',{
		method: 'POST',
		body: datos
	})

	.then(res => res.json())
	.then(data => {
		
		// Enviando informacion a respuesta. OJO: Usar comilla angular !!! 
		// ---------------------------------------------------------------
		if (data=='Error')
		{
			respuesta.innerHTML =
			`	
				<div class="alert alert-danger" role="alert">
          			Llena todos los campos
        		</div>
        	`
		}
		
		// Enviando informacion a respuesta. OJO: Usar comilla invertida !!! 
		// -----------------------------------------------------------------
		else
		{
			respuesta.innerHTML =
			`	
				<div class="alert alert-primary" role="alert">
          			${data}
        		</div>
        	`
		}
	})

})