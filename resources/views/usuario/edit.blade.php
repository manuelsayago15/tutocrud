<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<div class="container">
	<div class="row">
		<h1>Editar Usuario</h1>
		<br>
	</div>
	<div class="row">
		{{ Form::model($usuario, ['route' => ['usuarioUpdate', $usuario->id], 'method' => 'PUT']) }}
		{{ Form::hidden('id', $usuario->id) }}
		<form>
			<div class="form-group">
				<label>{{ Form::label('nombre', 'Ingresar nombre:') }}</label><br>
				{{ Form::text('nombre', $usuario->nombre) }}
			</div>
			<div class="form-group">
				{{ Form::label('apepat', '1er Apellido:') }}<br>
				{{ Form::text('apepat', $usuario->apepat) }}
			</div>
			<div class="form-group">
				{{ Form::label('apemat', '2do Apellido:') }}<br>
				{{ Form::text('apemat', $usuario->apemat) }}
			</div>
			
			<button class="btn btn-success">{{ ('Actualizar Campos') }}</button>
			{!! Form::close() !!}
		</form>
	</div>
</div>