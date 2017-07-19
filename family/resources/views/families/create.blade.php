@extends('admin.template.main') 
@section('title', 'Crear nueva familia')


@section('content')

<div class="container">
	<h3><a href="{{ route('families.index') }}">Volver a lista de familias</a> </h3>	
	
	{!! Form::open(['action' => 'FamilyController@store', 'method' => 'POST']) !!}

		<div class="form-gruop">
			{!! Form::label('name', 'Nombre')!!}
			{!! Form::text('name', null,['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required']) !!}
		</div>		
		<div class="form-gruop">
			{!! Form::label('avatar', 'Avatar')!!}
			{!! Form::text('avatar', null,['class' => 'form-control', 'placeholder' => 'avatar', 'required']) !!}
		</div>	
		<div class="form-gruop">
			{!! Form::label('user', 'Usuario')!!}
			{!! Form::select('user', $users, null,['class' => 'form-control', 'required']) !!}
		</div>	


		<div class="form-gruop">
			{!! Form::submit('Registrar', ['class' => 'btn btn-success']) !!}
		</div>

	{!! Form::close() !!}
</div>

@endsection