@extends('admin.template.main')

@section('title', 'home')


@section('content')

	<div class="container" id="gral-list-index">
		<a href="{{ URL::to('users/create') }}" class="btn btn-success">Nuevo usuario</a>
	    <h1>Lista de Usuarios</h1>
	    <br>

	    <table class="table table-responsive">
	    	<thead>
	    			<tr>
	    					<td>Nombre</td>
	    					<td>Avatar</td>
	    					<td>Email</td>
	    					<td>Tipo</td>
	    					<td>Accion</td>

	    			</tr>
	    	</thead>
	    	<tbody>
	    			@foreach ($users as $user)
		    			<tr>	
						    <td>{{ $user->name }}</td>
						    <td>{{ $user->avatar }}</td>
						    <td>{{ $user->email }}</td>
						    <td>
						    	@if ($user->type == 'admin')
						    		<label class="label label-danger selct-type">{{ $user->type }}</label>
						    	@else
						    		 <label class="label label-success selct-type">{{ $user->type }}</label>
						    	@endif

						    </td>
						    <td>
						    	{!! Form::open(['route' => [ 'users.destroy', $user->id ], 'method' => 'DELETE']) !!}
									{!! Form::submit('Eliminar', ['class' => 'btn btn-danger', 'onclick' => "return confirm('seguro deseas eliminar el usuario?')"]) !!}
								{!! Form::close() !!}
						    	<a href="{!! route('users.edit', $user->id) !!}" class="btn btn-info">Editar</a></td>
		    			</tr>
	    			@endforeach
	    	</tbody>
	    </table>

	    {{ $users->links() }}

	</div> 
@endsection
