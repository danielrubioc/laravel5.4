@extends('layouts.app')

@section('title', 'home')


@section('content')

	<div class="container" id="gral-list-index">
		<a href="{{ URL::to('families/create') }}" class="btn btn-success">Nueva familia</a>
	    <h1>Lista de familias</h1>
	    <br>

	    <table class="table table-responsive">
	    	<thead>
	    			<tr>
	    					<td>Nombre</td>
	    					<td>Avatar</td>
	    					<td>Tipo</td>
	    					<td>Accion</td>

	    			</tr>
	    	</thead>
	    	<tbody>
	    			@foreach ($families as $family)
		    			<tr>	
						    <td>{{ $family->name }}</td>
						    <td>{{ $family->avatar }}</td>
						    <td><a href="" class="btn btn-danger">Eliminar</a> <a href="{{ URL::to('families/'.$family->id.'')}}" class="btn btn-info">Editar</a></td>
		    			</tr>
	    			@endforeach
	    	</tbody>
	    </table>

	</div> 
@endsection
