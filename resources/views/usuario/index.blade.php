<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>



<div class="container">
	<div class="row">
		<h1>Lista de Usuarios</h1>
		<br>
	</div>
	<div class="row">
		<a class="btn btn-primary" href="usuario/nuevo" type="submit">Crear Usuario</a></li>
	</div><br>
	<div class="row">
		<table border="1" class="table">
			<thead class="thead-dark">
				<th>ID</th>
				<th>NOMBRE</th>
				<th>1er APELLIDO</th>
				<th>2do APELLIDO</th>
				<th>ELIMINAR</th>
				<th>EDITAR</th>
			</thead>

			<tbody>
				@foreach ($usuarios as $usuario)
					<tr>
						<td>{{ $usuario->id }}</td>
						<td>{{ $usuario->nombre }}</td>
						<td>{{ $usuario->apepat }}</td>
						<td>{{ $usuario->apemat }}</td>
						<td><a href="{{ url('/usuario/editar/'.$usuario->id) }}"><button class="btn btn-primary">Editar</button></a></td>
						<td>
							{{ Form::open(['route' => ['usuarioDelete', $usuario->id], 'method' => 'delete']) }}
								<button class="btn btn-danger">{{ ('Eliminar') }}</button>
							{{ Form::close() }}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
