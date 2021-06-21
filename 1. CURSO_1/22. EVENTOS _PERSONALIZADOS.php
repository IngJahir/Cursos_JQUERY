<!DOCTYPE html>
<html>
<head>
	<title> Eventos personalizados</title>
	<script src="jquery.js"></script>
	
	<script>

		$(document).ready(function(){

			// En este evento se crea el evento 'miCambio'
			// -------------------------
			$('#miImput').on('miCambio',function(ev,id){

				console.log(id);
				// Si el checkbox esta seleccionado
				if(this.checked)
				{
					$('#miImput').removeAttr('checked');
					$('.cambiar').text('ENCENDER');
				}
				else
				{
					$('#miImput').attr('checked','checked');
					$('.cambiar').text('APAGADO');	
				}
			})

			// Seccion para activar el evento
			$('.cambiar').on('click',function(){
				$('#miImput').trigger('miCambio',[$(this).attr('id')]);
			})
		});

		
	</script>

</head>
<body>
	<input type="checkbox" id="miImput" checked="checked">
	<button class="cambiar" id="btUno"> Apagar </button>
	<button class="cambiar" id="btDos"> Apagar </button>
</body>
</html>