@extends('admin.template.main')
@section('title', 'Editando : '.$user->name )
@section('content')


<div class="container">
	@if(count($errors) > 0)
		<div class="alert alert-danger" role="alert">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>		

	@endif

	
	<h3><a href="{{ route('users.index') }}">Volver a lista de Usuarios</a> </h3>	
	<h2>Nuevo Usuario</h2>
	{!! Form::open(['route' => [ 'users.update', $user->id ], 'method' => 'PUT']) !!}

		<div class="form-gruop">
			{!! Form::label('name', 'Nombre')!!}
			{!! Form::text('name', $user->name,['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required']) !!}
		</div>		
		<div class="form-gruop">
			{!! Form::label('email', 'Email')!!}
			{!! Form::email('email', $user->email,['class' => 'form-control', 'placeholder' => 'avatar', 'required']) !!}
		</div>	
		
		<div class="form-gruop">
			{!! Form::label('sex', 'sex')!!}
			{!! Form::text('sex',  $user->sex,['class' => 'form-control', 'placeholder' => 'avatar', 'required']) !!}
		</div>	
		<div class="form-gruop">
			{!! Form::label('type', 'Tipo')!!}
			{!! Form::select('type', ['member' => 'Usuario normal', 'admin' => 'Administrador'],  $user->type, ['class' => 'form-control', 'placeholder' => 'Selecciona el tipo de usuario', 'required']); !!}
		</div>
		



		<div class="form-gruop">
			{!! Form::submit('Actualiza', ['class' => 'btn btn-success']) !!}
		</div>

	{!! Form::close() !!}

</div>
@endsection()