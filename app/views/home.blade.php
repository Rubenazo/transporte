@extends('layout')

@section('content')

<div class="row marketing">
	
	<img src="img/map.png">


	<div id="rutas" class="cd-panel from-left">
		<div class="cd-panel-container col-xs-1" style="width:100%">
			<div class="cd-panel-content">
				<div class="column col-sm-1 col-xs-1 sidebar-offcanvas" id="sidebar">               
	                <h2 style="width:45%"><span class="glyphicon glyphicon-remove-circle sidebar-close"></span></h2>	             
	            </div>
	            <div class="col-xs-11" style="padding:0; height:100%">
					<img src="img/startup/startup-retina-4in.png" class="col-xs-3">
					<img src="img/startup/startup-retina-4in.png" class="col-xs-3">
					<img src="img/startup/startup-retina-4in.png" class="col-xs-3">
					<img src="img/startup/startup-retina-4in.png" class="col-xs-3">
				</div>
			</div> <!-- cd-panel-content -->
		</div> <!-- cd-panel-container -->
	</div> <!-- cd-panel -->

	<div id="ruta" class="cd-panel from-right">
		<header class="cd-panel-header" style="width:50%">
			<a href="#0" class="cd-panel-close">Close</a>
		</header>
	 
		<div class="cd-panel-container" style="width:50%">
			<div class="cd-panel-content">
				<h1>Ruta</h1>

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc a viverra urna. Etiam auctor odio blandit dignissim ultricies. Pellentesque venenatis velit viverra, malesuada nisi sit amet, porttitor dui. Etiam non dictum lorem. Fusce non ipsum lacinia, sagittis eros nec, pellentesque lorem. Donec massa odio, facilisis et vulputate sed, pharetra vitae erat. Nunc pretium elit non mi euismod, quis euismod urna laoreet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras sollicitudin eget diam cursus fringilla. Cras et nunc orci. Fusce porta vehicula ipsum, sed sodales turpis eleifend sed. Proin hendrerit id diam at suscipit. Sed fermentum mi et lorem iaculis, eget ullamcorper lectus blandit. Sed quis ex ac tortor posuere bibendum pharetra sed dolor. Etiam posuere quis ipsum in pellentesque.</p>
			
			</div> <!-- cd-panel-content -->
			<div>

  			</div>
		</div> <!-- cd-panel-container -->
	</div> <!-- cd-panel -->


	<div id="status" class="cd-panel from-right">
		<header class="cd-panel-header" style="width:50%">
			<a href="#0" class="cd-panel-close">Close</a>
		</header>
	 
		<div class="cd-panel-container" style="width:50%">
			<div class="cd-panel-content">
				<h1>Status</h1>

				<div class="panel">
		  			<table class="table" style="margin-bottom:0">
			
		  			</table>
  				</div>
			</div> <!-- cd-panel-content -->
			<div>

  			</div>
		</div> <!-- cd-panel-container -->
	</div> <!-- cd-panel -->


	<div id="mision" class="cd-panel from-right">
		<header class="cd-panel-header" style="width:50%">
			<a href="#0" class="cd-panel-close">Close</a>
		</header>
	 
		<div class="cd-panel-container" style="width:50%">
			<div class="cd-panel-content">
				<h1>Misión y Visión</h1>

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc a viverra urna. Etiam auctor odio blandit dignissim ultricies. Pellentesque venenatis velit viverra, malesuada nisi sit amet, porttitor dui. Etiam non dictum lorem. Fusce non ipsum lacinia, sagittis eros nec, pellentesque lorem. Donec massa odio, facilisis et vulputate sed, pharetra vitae erat. Nunc pretium elit non mi euismod, quis euismod urna laoreet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras sollicitudin eget diam cursus fringilla. Cras et nunc orci. Fusce porta vehicula ipsum, sed sodales turpis eleifend sed. Proin hendrerit id diam at suscipit. Sed fermentum mi et lorem iaculis, eget ullamcorper lectus blandit. Sed quis ex ac tortor posuere bibendum pharetra sed dolor. Etiam posuere quis ipsum in pellentesque.</p>

			</div> <!-- cd-panel-content -->
			<div>

  			</div>
		</div> <!-- cd-panel-container -->
	</div> <!-- cd-panel -->


	<div id="tarifas" class="cd-panel from-right">
		<header class="cd-panel-header" style="width:50%">
			<a href="#0" class="cd-panel-close">Close</a>
		</header>
	 
		<div class="cd-panel-container" style="width:50%">
			<div class="cd-panel-content">
				<h1>Tarifas</h1>

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc a viverra urna. Etiam auctor odio blandit dignissim ultricies. Pellentesque venenatis velit viverra, malesuada nisi sit amet, porttitor dui. Etiam non dictum lorem. Fusce non ipsum lacinia, sagittis eros nec, pellentesque lorem. Donec massa odio, facilisis et vulputate sed, pharetra vitae erat. Nunc pretium elit non mi euismod, quis euismod urna laoreet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras sollicitudin eget diam cursus fringilla. Cras et nunc orci. Fusce porta vehicula ipsum, sed sodales turpis eleifend sed. Proin hendrerit id diam at suscipit. Sed fermentum mi et lorem iaculis, eget ullamcorper lectus blandit. Sed quis ex ac tortor posuere bibendum pharetra sed dolor. Etiam posuere quis ipsum in pellentesque.</p>

			</div> <!-- cd-panel-content -->
			<div>

  			</div>
		</div> <!-- cd-panel-container -->
	</div> <!-- cd-panel -->


	<div id="comentarios" class="cd-panel from-right">
		<header class="cd-panel-header" style="width:50%">
			<a href="#0" class="cd-panel-close">Close</a>
		</header>
	 
		<div class="cd-panel-container" style="width:50%">
			<div class="cd-panel-content">
				<h1>Comentarios</h1>

				<div class="panel panel-default">
					<ul class="list-group">
						@foreach($comments as $comment)
							<li class="list-group-item">
								<ul>
									<li class="list-group-item"> {{ $comment->fecha }} </li>
									<li class="list-group-item"> {{ $comment->comentario }} </li>
								</ul>
							</li>
						@endforeach
					</ul>
				</div>

				{{ Form::open(array('url' => 'comment')) }}	
					<div class="form-group">
						{{ Form::textarea('message', Input::old('message'), array('class'=>'form-control', 'placeholder'=>'Escribir comentario...', 'rows'=>'3', 'maxlength'=>'140', 'autocomplete'=>'off')) }}
					</div>
					{{ Form::submit('Enviar', array('class'=>'btn btn-warning')) }}
				{{ Form::close() }}

  				<div>

  				</div>
			</div> <!-- cd-panel-content -->
			<div>

  			</div>
		</div> <!-- cd-panel-container -->
	</div> <!-- cd-panel -->

</div>

@stop