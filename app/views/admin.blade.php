<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <title>Ruta Uba / Admin</title>
        <meta name="description" content="">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
        <meta http-equiv="cleartype" content="on">
		<meta name="mobile-web-app-capable" content="yes">
		
		{{HTML::style('css/bootstrap.min.css')}}
		{{HTML::script('js/vendor/jquery-2.1.0.js')}}
    	{{HTML::script('js/bootstrap.min.js')}}

    	<style type="text/css">
    		nav {
    			height: 71px;
    			background-color: #EF7E1B;
    			padding-top: 16px;
    			margin-bottom: 16px;
    			text-align: center;
    			color: white;
    		}
    	</style>
	</head>

	<body>
		<div class="container">

			<nav class="header">
                <h4>Administrador Ruta Uba</h4>
            </nav>

			<div class="row marketing">
				<div class="panel">
					<table class="table">
						<tr>
							<td id="1">El Limon</td>
							<td><button class="btn btn-success" status="1" style="background-color:green">Disponible</button></td>
							<td><button class="btn btn-danger" status="2" style="background-color:red">En Camino</button></td>
						</tr>
						<tr>
							<td id="2">Terminal</td>
							<td><button class="btn btn-success" status="1" style="background-color:green">Disponible</button></td>
							<td><button class="btn btn-danger" status="2" style="background-color:red">En Camino</button></td>
						</tr>
						<tr>
							<td id="3">Turmero-Cagua</td>
							<td><button class="btn btn-success" status="1" style="background-color:green">Disponible</button></td>
							<td><button class="btn btn-danger" status="2" style="background-color:red">En Camino</button></td>
						</tr>
						<tr>
							<td id="4">La Victoria</td>
							<td><button class="btn btn-success" status="1" style="background-color:green">Disponible</button></td>
							<td><button class="btn btn-danger" status="2" style="background-color:red">En Camino</button></td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<script>

			$('button').click(function() {

				var id     = $(this).parent().siblings().first().attr('id');
				var status = $(this).attr('status'); 

				$.ajax({
					url: '../public/update',
					type: 'POST',
					data: {'id':id, 'status': status},
					success:function() {
						console.log(status);
						if ( status == 1 )
						{
							$(this).parents('tr').css('background-color', 'lightgreen');
						} 
						else 
						{
							$(this).parents('tr').css('background-color', 'lightred');
						}
					}
				});
			});

		</script>

	</body>

</html>
