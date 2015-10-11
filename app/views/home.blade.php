@extends('layout')

@section('content')

<div class="row marketing">
	
	<div id="map"></div>

	<div id="rutas" class="cd-panel from-left hidden-xs">
		<div class="cd-panel-container col-xs-1" style="width:100%">
			<div class="cd-panel-content">
				<div class="column col-xs-1 sidebar-offcanvas" id="sidebar">               
	                <h2 style="width:0"><span class="glyphicon glyphicon-remove-circle sidebar-close"></span></h2>	             
	            </div>
	            <div class="col-xs-11">
					<div class="showcase-panels-container has-shadow">
						<ul>
						    <li class="panel1 showcase-panel" data-icon="img/limon.png" data-title="El Limón" data-text="En sentido Oeste- Este, el servicio de transporte Universidad Bicentenaria de Aragua (UBA)- El Limón (municipio Mario Briceño Iragorry), hace recorrido por las avenidas José Casanova Godoy, Universidad y Caracas.<br/>
							Se realizan tres paradas: Coliseo Rafael Romero Bolívar, Terrazas El Limón  y pasarela del Seguro Social de San José." data-img="img/ruta-limon.png"><img src="img/limon.png" alt="El Limon"></li>
						    <li class="panel2 showcase-panel" data-icon="img/terminal.png" data-title="Terminal" data-text="El servicio de transporte que presta la empresa True C.A en su ruta Universidad Bicentenaria de Aragua (UBA)- Terminal Central de Maracay, realiza recorrido por las avenidas José Casanova Godoy y Fuerzas Aéreas.<br/>
							Cumple con tres paradas: adyacencias de las residencias Parque Choroní (Base Aragua), Centro Comercial Parque Aragua. La parada final es frente a Lunch Pan (avenida principal de San Agustín)" data-img="img/ruta-terminal.png"><img src="img/terminal.png" alt="Terminal"></li>
						    <li class="panel3 showcase-panel" data-icon="img/cagua.png" data-title="Turmero / Cagua" data-text="El recorrido se inicia por la avenida Intercomunal Maracay- Turmero. Se ingresa al municipio Santiago Mariño por el distribuidor La Julia hasta el centro de Turmero.<br/> 
							La ruta continúa hacia La Encrucijada hasta llegar a la Panadería Don Pan, ubicada en el centro de Cagua." data-img="img/ruta-cagua.png"><img src="img/cagua.png" alt="Turmero/Cagua"></li>
						    <li class="panel4 showcase-panel" data-icon="img/victoria.png" data-title="La Victoria" data-text="El traslado de pasajeros de la ruta Universidad Bicentenaria de Aragua (UBA)- La Victoria se ejecuta por la Autopista Regional del Centro (ARC).<br/> 
							Se disponen de siete paradas: Peaje de La Victoria, Centro Comercial Morichal, Plaza Italia, tres puntos en la  Urbanización La Mora I y uno en La Mora II." data-img="img/ruta-victoria.png"><img src="img/victoria.png" alt="La Victoria"></li>
						    <li class="panel5 showcase-panel"><img src="img/limon.png" alt="El Limon"></li>
						    <li class="panel6 showcase-panel"><img src="img/limon.png" alt="El Limon"></li>
						</ul>
					</div>
				</div>
			</div> <!-- cd-panel-content -->
		</div> <!-- cd-panel-container -->
	</div> <!-- cd-panel -->

	<div id="ruta" class="cd-panel from-right hidden-xs">
		<header class="cd-panel-header">
			<a href="#0" class="cd-panel-close">Close</a>
		</header>
	 
		<div class="cd-panel-container">
			<div class="cd-panel-content">
				<img>

				<h1></h1>

				<p></p>

				<img>

			</div> <!-- cd-panel-content -->
			<div>
                <img src="img/logo.png" alt="Transporte True">
				<h3>rutauba</h3>
  			</div>
		</div> <!-- cd-panel-container -->
	</div> <!-- cd-panel -->

	<div id="rutas-mobile" class="cd-panel from-right visible-xs">
		<div class="cd-panel-container">
			<div class="cd-panel-content">
				
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingOne">
				      <h4 class="panel-title">
				        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
				          <img src="img/limon.png" alt="El Limon">
				          El Limón
				          <span class="glyphicon glyphicon-menu-down"></span>
				        </a>
				      </h4>
				    </div>
				    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
				      <div class="panel-body">
				        En sentido Oeste- Este, el servicio de transporte Universidad Bicentenaria de Aragua (UBA)- El Limón (municipio Mario Briceño Iragorry), hace recorrido por las avenidas José Casanova Godoy, Universidad y Caracas.<br/>
						Se realizan tres paradas: Coliseo Rafael Romero Bolívar, Terrazas El Limón  y pasarela del Seguro Social de San José.
				      	<img src="img/ruta-limon.png" alt="Ruta El Limon">
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingTwo">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				          <img src="img/terminal.png" alt="Terminal">
				          Terminal
				          <span class="glyphicon glyphicon-menu-down"></span>
				        </a>
				      </h4>
				    </div>
				    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
				      <div class="panel-body">
				        El servicio de transporte que presta la empresa True C.A en su ruta Universidad Bicentenaria de Aragua (UBA)- Terminal Central de Maracay, realiza recorrido por las avenidas José Casanova Godoy y Fuerzas Aéreas.<br/>
						Cumple con tres paradas: adyacencias de las residencias Parque Choroní (Base Aragua), Centro Comercial Parque Aragua. La parada final es frente a Lunch Pan (avenida principal de San Agustín)
				      	<img src="img/ruta-terminal.png" alt="Ruta Terminal">
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingThree">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				          <img src="img/cagua.png" alt="Turmero/Cagua">
				          Turmero / Cagua
				          <span class="glyphicon glyphicon-menu-down"></span>
				        </a>
				      </h4>
				    </div>
				    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
				      <div class="panel-body">
				        El recorrido se inicia por la avenida Intercomunal Maracay- Turmero. Se ingresa al municipio Santiago Mariño por el distribuidor La Julia hasta el centro de Turmero.<br/> 
						La ruta continúa hacia La Encrucijada hasta llegar a la Panadería Don Pan, ubicada en el centro de Cagua.
				      	<img src="img/ruta-cagua.png" alt="Ruta Cagua">
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingFour">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
				          <img src="img/victoria.png" alt="La Victoria">
				          La Victoria
				          <span class="glyphicon glyphicon-menu-down"></span>
				        </a>
				      </h4>
				    </div>
				    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
				      <div class="panel-body">
				        El traslado de pasajeros de la ruta Universidad Bicentenaria de Aragua (UBA)- La Victoria se ejecuta por la Autopista Regional del Centro (ARC).<br/> 
						Se disponen de siete paradas: Peaje de La Victoria, Centro Comercial Morichal, Plaza Italia, tres puntos en la  Urbanización La Mora I y uno en La Mora II.
				      	<img src="img/ruta-victoria.png" alt="Ruta la Victoria">
				      </div>
				    </div>
				  </div>
				</div>
			
			</div> <!-- cd-panel-content -->
		</div> <!-- cd-panel-container -->
	</div> <!-- cd-panel -->

	<div id="status" class="cd-panel from-right">
		<header class="cd-panel-header">
			<a href="#0" class="cd-panel-close">Close</a>
		</header>
	 
		<div class="cd-panel-container">
			<div class="cd-panel-content">
				<h1>Status</h1>

				<div class="panel">
		  			<table class="table">
			
		  			</table>
  				</div>
			</div> <!-- cd-panel-content -->
			<div>
				<h3>rutauba</h3>
  			</div>
		</div> <!-- cd-panel-container -->
	</div> <!-- cd-panel -->


	<div id="mision" class="cd-panel from-right">
		<header class="cd-panel-header">
			<a href="#0" class="cd-panel-close">Close</a>
		</header>
	 
		<div class="cd-panel-container">
			<div class="cd-panel-content">
				<h1>Misión</h1>

				<p>Prestar servicios de transporte de forma integral y de alta calidad, que genere valor para nuestros trabajadores y estudiantes. La organización cuenta con una a flota de 27 unidades y personal operativo de primera, que cumplen con normas de seguridad a fin de alcanzar plena satisfacción de nuestros clientes.</p>

				<h1>Visión</h1>

				<p>Somos proactivos, con ideales de expansión. Sustentamos nuestra gestión en valores como la responsabilidad, seriedad, profesionalismo, honradez, disciplina y eficiencia. Estamos comprometidos en suscribir alianzas estratégicas para cumplir con las necesidades del usuario.</p>
			</div> <!-- cd-panel-content -->
			<div>
				<h3>rutauba</h3>
  			</div>
		</div> <!-- cd-panel-container -->
	</div> <!-- cd-panel -->


	<div id="tarifas" class="cd-panel from-right">
		<header class="cd-panel-header">
			<a href="#0" class="cd-panel-close">Close</a>
		</header>
	 
		<div class="cd-panel-container">
			<div class="cd-panel-content">
				<h1>Tarifas</h1>

				<div class="panel">
		  			<table class="table">
		  				<tr>
		  					<th>Ruta</th>
		  					<th>Diurno</th>
		  					<th>Nocturno</th>
		  				</tr>
						<tr>
							<td>El Limón</td>
							<td>70 Bs</td>
							<td>80 Bs</td>
						</tr>
						<tr>
							<td>Terminal</td>
							<td>50 Bs</td>
							<td>60 Bs</td>
						</tr>
						<tr>
							<td>Turmero</td>
							<td>50 Bs</td>
							<td>60 Bs</td>
						</tr>
						<tr>
							<td>Cagua</td>
							<td>60 Bs</td>
							<td>70 Bs</td>
						</tr>
						<tr>
							<td>La Victoria</td>
							<td>80 Bs</td>
							<td>100 Bs</td>
						</tr>
		  			</table>
  				</div>
  				<h4>Horario de Actividades</h4>
	  			<i>Lunes a Viernes: 6:00am - 11:00pm</i>
	  			<i>Sabados: 7:00am - 6:00pm</i>
			</div> <!-- cd-panel-content -->
			<div>
				<h3>rutauba</h3>
  			</div>
		</div> <!-- cd-panel-container -->
	</div> <!-- cd-panel -->


	<div id="comentarios" class="cd-panel from-right">
		<header class="cd-panel-header">
			<a href="#0" class="cd-panel-close">Close</a>
		</header>
	 
		<div class="cd-panel-container">
			<div class="cd-panel-content">
				<h1>Comentarios</h1>

				<div id="forum" class="panel panel-default">
					<ul class="list-group">
					
					</ul>
				</div>

				{{ Form::open(array('url' => 'comment', 'id'=>'comment')) }}	
					<div class="form-group">
						{{ Form::textarea('message', Input::old('message'), array('class'=>'form-control', 'placeholder'=>'Escribir comentario...', 'rows'=>'3', 'maxlength'=>'140', 'autocomplete'=>'off')) }}
					</div>
					{{ Form::submit('Enviar', array('id'=>'submit', 'class'=>'btn btn-warning')) }}
				{{ Form::close() }}
			</div> <!-- cd-panel-content -->
			<div>
				<h3>rutauba</h3>
  			</div>
		</div> <!-- cd-panel-container -->
	</div> <!-- cd-panel -->

</div>

@stop