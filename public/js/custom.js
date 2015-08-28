$(document).ready(function() {
	
	////////////////////////////////////////////////////////////////////////////////////////////
	/* 									LATERAL PANEL						                  */

	//open the lateral panel
	$('#routes-btn').on('click', function(event){
		event.preventDefault();
		$('#routes.cd-panel').addClass('is-visible');
	});
	$('#status-btn').on('click', function(event){
		event.preventDefault();
		$('#status.cd-panel').addClass('is-visible');
	});
	//close the lateral panel
	$('.cd-panel').on('click', function(event){
		if( $(event.target).is('#routes.cd-panel') || $(event.target).is('.cd-panel-close') ) { 
			$('.cd-panel').removeClass('is-visible');
			event.preventDefault();
		}
	});

	////////////////////////////////////////////////////////////////////////////////////////////

	$('#bancos').change(function() {
		var id = $('#bancos option:selected').attr('value');
		
		$.ajax({
			url: '../formupago',
			type: 'GET',
			dataType: 'json',
			data: {'bancoid': id},
			success:function(response)
			{	
				$('#cuentas').slideUp('slow', function() { 
					$('#cuentas .table').empty();
					for (var i in response['cuentas'])
					{
						$('#cuentas .table').append('<tr> <td>' + response['cuentas'][i].numero + '</td> <td>' + response['cuentas'][i].tipo + 
							               '</td> <td> <input type="radio" name="num_cuenta_id" value=' + response['cuentas'][i].id + '> </td> </tr>');
					}
					$('#cuentas').slideDown('slow'); 
				});
			}
		});
	});
	
});