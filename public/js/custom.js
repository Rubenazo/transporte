$(document).ready(function() {
	
	////////////////////////////////////////////////////////////////////////////////////////////
	/* 									LATERAL PANEL						                  */

	//open the lateral panel
	$('.rutas-btn').on('click', function(event){
		event.preventDefault();
		$('#rutas.cd-panel').addClass('is-visible');
	});
	$('#rutas .col-xs-3').on('click', function(event){
		event.preventDefault();
		$('#ruta.cd-panel').addClass('is-visible');
	});
	$('.status-btn').on('click', function(event){
		event.preventDefault();
		$('#status.cd-panel').addClass('is-visible');
	});
	$('.mision-btn').on('click', function(event){
		event.preventDefault();
		$('#mision.cd-panel').addClass('is-visible');
	});
	$('.tarifas-btn').on('click', function(event){
		event.preventDefault();
		$('#tarifas.cd-panel').addClass('is-visible');
	});
	$('.comentarios-btn').on('click', function(event){
		event.preventDefault();
		$('#comentarios.cd-panel').addClass('is-visible');
	});
	$('.rutas-mobile-btn').on('click', function(event){
		event.preventDefault();
		$('#rutas-mobile.cd-panel').addClass('is-visible');
	});

	//close the lateral panel
	$('.cd-panel').on('click', function(event){
		if( $(event.target).is('.cd-panel') || $(event.target).is('.cd-panel-close') ) { 
			$('.cd-panel[id!="rutas"]').removeClass('is-visible');
			$('.glyphicon-menu-hamburger').removeClass('rotate');
			event.preventDefault();
		}
	});
	$('.sidebar-close').click(function(event) { 
		$('.cd-panel').removeClass('is-visible');
		event.preventDefault();
	});
	

	////////////////////////////////////////////////////////////////////////////////////////////
	/* 									Mobile Menu Functionality			                  */

	$('.menu-btn').on('click', function(event){
		event.preventDefault();
		$('.cd-panel[id!="menu"]').removeClass('is-visible');
		$('#menu.cd-panel').toggleClass('is-visible');
		$('.glyphicon-menu-hamburger').toggleClass('rotate');
		putTime();
	});

	$('#menu li').click(function(event) {
		$('#time a').html($(this).data('title'));
		$('.glyphicon-menu-hamburger').removeClass('rotate');
		$('#menu.cd-panel').removeClass('is-visible');
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
						$('#status .table').append('<tr> <td> <img src="img/' + response['status'][i].ruta +  
							'.png"> </td> <td> <span class="label label-success" >En puerta</span> </td> </tr>');
					}
					if (response['status'][i].estado == 2)
					{
						$('#status .table').append('<tr> <td> <img src="img/' + response['status'][i].ruta + 
							'.png"> </td> <td> <span class="label label-warning">En camino</span> </td> </tr>');
					}
					if (response['status'][i].estado == 1)
					{
						$('#status .table').append('<tr> <td> <img src="img/' + response['status'][i].ruta + 
							'.png"> </td> <td> <span class="label label-danger">Se murio</span> </td> </tr>');
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
	/* 	   			                      Get the Time	                    	              */

	putTime();
	function putTime() {
		var time = new Date();
		$('#time a').html( (time.getHours() > 12 ? time.getHours() - 12 : time.getHours())  + ':' 
			+ (time.getMinutes() < 10 ? '0' + time.getMinutes() : time.getMinutes()) + ' ' 
			+ (time.getHours() >= 12 ? 'PM' : 'AM') );
		setTimeout(putTime, 60000);
	}


	////////////////////////////////////////////////////////////////////////////////////////////
	/* 	   			         Effects and data for the routes section	    	              */

	$('.carousel-caption').hide();
	$('#rutas .col-xs-3').hover(function() {
		$(this).children('img').toggleClass('sepia');
		$(this).children('.carousel-caption').stop().fadeToggle('slow');
	});

	$('#rutas .col-xs-3').click(function(event) {
		$('#ruta img:first').attr('src', $(this).data('icon'));
		$('#ruta h1').html($(this).data('title'));
		$('#ruta p').html($(this).data('text'));
		$('#ruta .cd-panel-content img:last').attr('src', $(this).data('img'));
	});


	////////////////////////////////////////////////////////////////////////////////////////////
	/* 	   			                     Google Maps API	                   	              */

	var uba      = {lat: 10.232539, lng: -67.528018}; 
  	var limon    = {lat: 10.306494, lng: -67.633282};
  	var terminal = {lat: 10.243308, lng: -67.589285};
  	var turmero  = {lat: 10.225365, lng: -67.474136};
  	var cagua    = {lat: 10.185381, lng: -67.463018}; 
  	var victoria = {lat: 10.227940, lng: -67.331096};

  	var places = [ uba, limon, terminal, turmero, cagua, victoria ];
  	var images = [ 'img/maps/uba.png', 'img/maps/l.png', 'img/maps/tp.png', 'img/maps/ct.png', 'img/maps/ct.png', 'img/maps/v.png' ];
  	var titles = [ 'Universidad Bicentenaria de Aragua', 'Parada El Limón', 'Parada Terminal', 'Parada Turmero', 'Parada Cagua', 'Parada Victoria'];

  	var routes    = [ [uba, limon], [uba, terminal], [uba, turmero, cagua], [uba, victoria] ];
  	var colours   = [ '#fac06d', '#363636', '#115633', '#7f1334' ];
  	var waypoints = [];
  	var markers   = [];
  	var renders   = [];

	var map;
	var k = 0;

	window.initMap = function() {

		var directionsService = new google.maps.DirectionsService;

		map = new google.maps.Map($('#map')[0], {
	    	center: {lat: 10.258407, lng: -67.480867},
		    zoom: 12,
		    streetViewControl: false
		 });

		for (var i in places) {

			markers[i] = new google.maps.Marker({
			    position: places[i],
			    map: map,
			    animation: google.maps.Animation.BOUNCE,
			    icon: images[i],
			    title: titles[i]
			});
		}

		for (var i in routes) {

			waypoints = [];
			data   = routes[i];
			length = data.length;

			if (length > 2) {

				for (var j = 1; j < length-1; j++) {
					waypoints.push({
	                    location: data[j],
	                    stopover: true
               		});
				}
			}
			directionsService.route({
			    origin: data[0],
			    destination: data[length-1],
			    waypoints: waypoints,
			    travelMode: google.maps.TravelMode.DRIVING
				}, directionResults 
			);
		}
	}

	function directionResults(results, status) {
		if (status === google.maps.DirectionsStatus.OK) {
	    	renders[k] = new google.maps.DirectionsRenderer();
			renders[k].setMap(map);
	    	renders[k].setOptions({
	    		suppressMarkers: true,
	    		preserveViewport: true,
			    polylineOptions: {
			      	strokeColor: colours[k],
			      	strokeWeight: 4,  
			    	strokeOpacity: 0.6
			    }
			});
	    	renders[k].setDirections(results);
	    } else {
	    	window.alert('Directions request failed due to ' + status);
		}
	    k++;
	}

});