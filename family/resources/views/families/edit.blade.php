@extends('layouts.app')
@section('title', 'Editando: ')


@section('content')

<div class="container">
	<h3><a href="{{ route('families.index') }}">Volver a lista de familias</a> </h3>	
	

	{!! Form::open(['route' => [ 'families.update', $family->id ], 'method' => 'PUT', 'files' => true]) !!}

		<div class="form-gruop">
			{!! Form::label('name', 'Nombre')!!}
			{!! Form::text('name', $family->name,['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required']) !!}
		</div>		
		<div class="form-gruop">
			{!! Form::label('avatar', 'Avatar')!!}
			{!! Form::file('avatar'); !!}
		</div>	
		<div class="form-gruop">
			{!! Form::label('user_id', 'Usuario')!!}
			{!! Form::text('avatar', $family->user->name,['class' => 'form-control', 'placeholder' => 'avatar', 'required']) !!}
		</div>	


		<div class="form-gruop">
			{!! Form::submit('Registrar', ['class' => 'btn btn-success']) !!}
		</div>

	{!! Form::close() !!}

</div>
@endsection