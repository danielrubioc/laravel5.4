@extends('layouts.app')
@section('title', 'Crear nueva familia')


@section('content')


	<div class="section-editFamily">

		@if($family)

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


		@else

				<h2>No has ingresado a tu familia</h2>
				<a href="{{ URL::to('families/create') }}" class="btn btn-success">Crear familia</a>

		@endif
	</div>


@endsection