$(document).ready(function() {
	
	////////////////////////////////////////////////////////////////////////////////////////////
	/* 									LATERAL PANEL						                  */

	//open the lateral panel
	$('#rutas-btn').on('click', function(event){
		event.preventDefault();
		$('#rutas.cd-panel').addClass('is-visible');
	});
	$('#rutas .col-xs-3').on('click', function(event){
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
	$('#menu-btn').on('click', function(event){
		event.preventDefault();
		$('#menu.cd-panel').addClass('is-visible');
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
							'</td> <td> <span class="label label-success" >En puerta</span> </td> </tr>');
					}
					if (response['status'][i].estado == 2)
					{
						$('#status .table').append('<tr> <td>' + response['status'][i].ruta + 
							'</td> <td> <span class="label label-warning">En camino</span> </td> </tr>');
					}
					if (response['status'][i].estado == 1)
					{
						$('#status .table').append('<tr> <td>' + response['status'][i].ruta + 
							'</td> <td> <span class="label label-danger">Se murio</span> </td> </tr>');
					}
				}
				setTimeout(getStatus, 10000);
			}
		});
	}	

	////////////////////////////////////////////////////////////////////////////////////////////
	/* 									AJAX for the Forum	    			                  */

	getComments();

	$('#submit').click(function(event) {
	
		$.ajax({
			url: '../public/comment',
			type: 'POST',
			data: $('#comment').serialize(),
			success:function(response) {
				$('#comment')[0].reset();
				getComments();
			}
		});

		return false;
	});


	function getComments() {

		$.ajax({
			url: '../public/comment',
			type: 'GET',
			dataType: 'json',
			success:function(response) {

				$('#forum > ul').empty();
				for (var i in response['comments'])
				{
					$('#forum > ul').append('<li class="list-group-item"> <ul> <li class="list-group-item">' +
						response['comments'][i].fecha + '</li> <li class="list-group-item">' +
						response['comments'][i].comentario + '</li> </ul> </li> '); 
				}
			}
		});
	}

	////////////////////////////////////////////////////////////////////////////////////////////
	/* 	   			         Effects and data for the routes section	    	              */

	$('.carousel-caption').hide();
	$('#rutas .col-xs-3').hover(function() {
		$(this).children('img').toggleClass('sepia');
		$(this).children('.carousel-caption').stop().fadeToggle('slow');
	});

	$('#rutas .col-xs-3').click(function(event) {
		$('#ruta h1').html($(this).data('title'));
		$('#ruta p').html($(this).data('text'));
	});

	////////////////////////////////////////////////////////////////////////////////////////////
	/* 	   			                     Google Maps API	                   	              */

	var uba      = {lat: 10.234556, lng: -67.529622};
  	var limon    = {lat: 10.290077, lng: -67.628116};
  	var terminal = {lat: 10.243308, lng: -67.589285};
  	var turmero  = {lat: 10.214833, lng: -67.485881};
  	var cagua    = {lat: 10.186768, lng: -67.458768};
  	var victoria = {lat: 10.227940, lng: -67.331096};

	var map;

	window.initMap = function() {

		var directionsService = new google.maps.DirectionsService;
  		
  		var directionsDisplay = new google.maps.DirectionsRenderer({
    		suppressMarkers: true,
		    polylineOptions: {
		      	strokeColor: "yellow",
		      	strokeWeight: 8,  
		    	strokeOpacity: 0.6
		    }
		});
	
		map = new google.maps.Map($('#map')[0], {
	    	center: uba,
		    zoom: 12
		 });

		directionsDisplay.setMap(map);

		var image = 'img/touch/apple-touch-icon.png'

		var ubamarker = new google.maps.Marker({
		    position: uba,
		    map: map,
		    animation: google.maps.Animation.BOUNCE,
		    icon: image,
		    title: 'Universidad Bicentenaria de Aragua'
		 });

		calculateAndDisplayRoute(directionsService, directionsDisplay);
	}

	function calculateAndDisplayRoute(directionsService, directionsDisplay) {
		directionsService.route({
		    origin: uba,
		    destination: limon,
		    travelMode: google.maps.TravelMode.DRIVING
		}, function(response, status) {
		    if (status === google.maps.DirectionsStatus.OK) {
		    	directionsDisplay.setDirections(response);
		    } else {
		    	window.alert('Directions request failed due to ' + status);
		    }
		});
	}

});