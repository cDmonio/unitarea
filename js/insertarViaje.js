$( document ).ready(function() {
    insertarIdaVuelta();
    cargarPasajero();
    cargarPlazas();
});

			function insertarIdaVuelta(){
				$.ajax({
					type: 'POST',
					url: './ajax/jj_idavuelta.php'
				  })
			  .done(function(ida){
				$('#pruebo').html(ida)
			  })
			  .fail(function(){
				alert('Hubo un errror al cargar las idas')
			  })

			}

			//Pondré un control más exacto en un futuro.
			function cargarPasajero(){
				$.ajax({
					type: 'POST',
					url: './ajax/jj_pasajero.php'
				  })
			  .done(function(pasajero){
				$('#pasajero').html(pasajero)
			  })
			  .fail(function(){
				alert('Hubo un errror al cargar los pasajeros')
			  })
			}
			//Pondré un control más exacto en un futuro.
			function cargarPlazas(){
				$.ajax({
					type: 'POST',
					url: './ajax/jj_plazas.php'
				  })
			  .done(function(plazas){
				$('#plazas').html(plazas)
			  })
			  .fail(function(){
				alert('Hubo un errror al cargar las plazas')
			  })
			}

			$('#idavuelta').click(function(){
				var idavuelta = $('#idavuelta').prop("checked");
				$.ajax({
					type: 'POST',
					url: './ajax/jj_ida.php',
					data: {'idavuelta':idavuelta}
				})
				.done(function(idavuelta){
					$('#pruebo').html(idavuelta)
				})
				.fail(function(){
					alert('Hubo un errror al cargar las idas y vueltas')
				})
			})