$(document).ready(function() {
	
	////////////////////////////////////////////////////////////////////////////////////////////
	/* 									LATERAL PANEL						                  */

	//open the lateral panel
	$('#rutas-btn').on('click', function(event){
		event.preventDefault();
		$('#rutas.cd-panel').addClass('is-visible');
	});
	$('#rutas img').on('click', function(event){
		event.preventDefault();
		$('#ruta.cd-panel').addClass('is-visible');
	});
	$('#status-btn').on('click', function(event){
		event.preventDefault();
		$('#status.cd-panel').addClass('is-visible');
	});
	$('#mision-btn').on('click', function(event){
		event.preventDefault();
		$('#mision.cd-panel').addClass('is-visible');
	});
	$('#tarifas-btn').on('click', function(event){
		event.preventDefault();
		$('#tarifas.cd-panel').addClass('is-visible');
	});
	$('#comentarios-btn').on('click', function(event){
		event.preventDefault();
		$('#comentarios.cd-panel').addClass('is-visible');
	});
	//close the lateral panel
	$('.cd-panel').on('click', function(event){
		if( $(event.target).is('.cd-panel') || $(event.target).is('.cd-panel-close') || $(event.target).is('.sidebar-close') ) { 
			$('.cd-panel[id!="rutas"]').removeClass('is-visible');
			event.preventDefault();
		}
	});
	$('#rutas').on('click', function(event){
		if( $(event.target).is('.sidebar-close') ) { 
			$('#rutas').removeClass('is-visible');
			event.preventDefault();
		}
	});

	////////////////////////////////////////////////////////////////////////////////////////////
	/* 									AJAX for the Status	    			                  */

	getStatus();

	function getStatus() {
		
		$.ajax({
			url: '../public/status',
			type: 'GET',
			dataType: 'json',
			success:function(response) {

				$('#status .table').empty();
				for (var i in response['status'])
				{
					if (response['status'][i].estado == 3)
					{
						$('#status .table').append('<tr> <td>' + response['status'][i].ruta + 
							'</td> <td> <span class="btn btn-success" >En puerta</span> </td> </tr>');
					}
					if (response['status'][i].estado == 2)
					{
						$('#status .table').append('<tr> <td>' + response['status'][i].ruta + 
							'</td> <td> <span class="btn btn-warning">En camino</span> </td> </tr>');
					}
					if (response['status'][i].estado == 1)
					{
						$('#status .table').append('<tr> <td>' + response['status'][i].ruta + 
							'</td> <td> <span class="btn btn-danger">Se murio</span> </td> </tr>');
					}
				}
				setTimeout(getStatus, 10000);
			}
		});
	}	

	////////////////////////////////////////////////////////////////////////////////////////////
	
	$('#rutas img').hover(function() {
		$(this).siblings().fadeToggle('fast')
	});

});