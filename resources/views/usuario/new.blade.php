<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<div class="container">
	<div class="row">
		<h1>Nuevo Usuario</h1>
		<br>
	</div>
	<div class="row">
		{!! Form::open(array('url' => 'usuario/guardar', 'method' => 'post')) !!}
		{!! Form::token();	!!}
		<form>
			<div class="form-group">
				{{ Form::label('nombre', 'Ingresar nombre:') }}<br>
				{{ Form::text('nombre') }}
			</div>
			<div class="form-group">
				{{ Form::label('apepat', '1er Apellido') }}<br>
				{{ Form::text('apepat') }}
			</div>
			<div class="form-group">
				{{ Form::label('apemat', '2do Apellido') }}<br>
				{{ Form::text('apemat') }}
			</div>
			<button class="btn btn-primary">{{ ('Guardar') }}</button>
			{!! Form::close() !!}
		</form>
		
					
					
					
					
		
		
	</div>
	
</div>
