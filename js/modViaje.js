$( document ).ready(function() {
    modViaje();
});

			function modViaje(){
				$.ajax({
					type: 'POST',
					url: './ajax/jj_modificarViaje.php'
				  })
			  .done(function(cuerpo_viajes){
				$('#cuerpo_viajes').html(cuerpo_viajes)
			  })
			  .fail(function(){
				alert('Hubo un errror al cargar las idas')
			  })

			}