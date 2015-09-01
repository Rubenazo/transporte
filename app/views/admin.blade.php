<!DOCTYPE html>
<html>
	<head>
		<title>admin Ruta Uba</title>
		{{HTML::style('css/bootstrap.css')}}
		{{HTML::script('js/vendor/jquery-2.1.0.js')}}
    	{{HTML::script('js/bootstrap.js')}}
	</head>

	<body>
		<table>
			<tr>
				<td id="1">El Limon</td>
				<td><button status="1" style="background-color:red">Se murio</button></td>
				<td><button status="2" style="background-color:yellow">En camino</button></td>
				<td><button status="3" style="background-color:green">En puerta</button></td>
			</tr>
			<tr>
				<td id="2">Terminal</td>
				<td><button status="1" style="background-color:red">Se murio</button></td>
				<td><button status="2" style="background-color:yellow">En camino</button></td>
				<td><button status="3" style="background-color:green">En puerta</button></td>
			</tr>
			<tr>
				<td id="3">Turmero-Cagua</td>
				<td><button status="1" style="background-color:red">Se murio</button></td>
				<td><button status="2" style="background-color:yellow">En camino</button></td>
				<td><button status="3" style="background-color:green">En puerta</button></td>
			</tr>
			<tr>
				<td id="4">La Victoria</td>
				<td><button status="1" style="background-color:red">Se murio</button></td>
				<td><button status="2" style="background-color:yellow">En camino</button></td>
				<td><button status="3" style="background-color:green">En puerta</button></td>
			</tr>
		</table>

		<script>

			$('button').click(function() {

				var id   = $(this).parent().siblings().first().attr('id');
				var status = $(this).attr('status'); 

				$.ajax({
					url: '../public/update',
					type: 'POST',
					data: {'id':id, 'status': status},
					success:function() {

					}
				});
			});

		</script>

	</body>

</html>
