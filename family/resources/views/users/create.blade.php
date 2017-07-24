@extends('admin.template.main')
@section('title', 'Nuevo usuario')



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
	{!! Form::open(['action' => 'UserController@store', 'method' => 'POST']) !!}

		<div class="form-gruop">
			{!! Form::label('name', 'Nombre')!!}
			{!! Form::text('name', null,['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required']) !!}
		</div>		
		<div class="form-gruop">
			{!! Form::label('email', 'Email')!!}
			{!! Form::text('email', null,['class' => 'form-control', 'placeholder' => 'avatar']) !!}
		</div>	
		<div class="form-gruop">
			{!! Form::label('password', 'Password')!!}
			{!! Form::password('password',['class' => 'form-control', 'placeholder' => '*********', 'required']) !!}
		</div>	
		<div class="form-gruop">
			{!! Form::label('avatar', 'Avatar')!!}
			{!! Form::text('avatar', null,['class' => 'form-control', 'placeholder' => 'avatar', 'required']) !!}
		</div>	
		<div class="form-gruop">
			{!! Form::label('type', 'Tipo')!!}
			{!! Form::select('type', ['admin' => 'Administrador', 'member' => 'Usuario normal'], null, ['class' => 'form-control', 'placeholder' => 'Selecciona el tipo de usuario', 'required']); !!}
		</div>
		



		<div class="form-gruop">
			{!! Form::submit('Registrar', ['class' => 'btn btn-success']) !!}
		</div>

	{!! Form::close() !!}

</div>
@endsection()