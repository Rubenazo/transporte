@extends('layout')

@section('content')

<div class="row marketing">
	
	<img src="img/map.png">


	<div id="routes" class="cd-panel from-left">
		<header class="cd-panel-header" style="width:50%">
			<a href="#0" class="cd-panel-close">Close</a>
		</header>
	 
		<div class="cd-panel-container" style="width:50%">
			<div class="cd-panel-content">
				<h1>Rutas</h1>

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc a viverra urna. Etiam auctor odio blandit dignissim ultricies. Pellentesque venenatis velit viverra, malesuada nisi sit amet, porttitor dui. Etiam non dictum lorem. Fusce non ipsum lacinia, sagittis eros nec, pellentesque lorem. Donec massa odio, facilisis et vulputate sed, pharetra vitae erat. Nunc pretium elit non mi euismod, quis euismod urna laoreet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras sollicitudin eget diam cursus fringilla. Cras et nunc orci. Fusce porta vehicula ipsum, sed sodales turpis eleifend sed. Proin hendrerit id diam at suscipit. Sed fermentum mi et lorem iaculis, eget ullamcorper lectus blandit. Sed quis ex ac tortor posuere bibendum pharetra sed dolor. Etiam posuere quis ipsum in pellentesque.</p>
			</div> <!-- cd-panel-content -->
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
			  			<tr>
			  				<td>El Limon</td>
			  				<td></td>
			  				<td></td>
			  				<td></td>
			  			</tr>
			  			<tr>
			  				<td>Terminal</td>
			  				<td></td>
			  				<td></td>
			  				<td></td>
			  			</tr>
			  			<tr>
			  				<td>Turmero-Cagua</td>
			  				<td></td>
			  				<td></td>
			  				<td></td>
			  			</tr>
			  			<tr>
			  				<td>La Victoria</td>
			  				<td></td>
			  				<td></td>
			  				<td></td>
			  			</tr>
		  			</table>
  				</div>
			</div> <!-- cd-panel-content -->
		</div> <!-- cd-panel-container -->
	</div> <!-- cd-panel -->

</div>

@stop