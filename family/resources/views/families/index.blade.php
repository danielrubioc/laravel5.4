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
	    					<td></td>
	    					<td>Nombre Familia</td>
	    					<td>Nombre Usuario</td>
	    					<td>Accion</td>

	    			</tr>
	    	</thead>
	    	<tbody>
	    			@foreach ($families as $family)
		    			<tr>	
		    				<td class="img-avatar-table"><img src="{!! $family->avatar->url('thumb') !!}" class="img-responsive" alt=""></td>
						    <td>{{ $family->name }}</td>
						    <td>{{ $family->user->name }}</td>
						    <td>
						    	<a href="" class="btn btn-danger">Eliminar</a> 
						    	<a href="{{ route('families.edit', $family->id) }}" class="btn btn-info">Editar</a></td>
		    			</tr>
	    			@endforeach
	    	</tbody>
	    </table>

	</div> 
@endsection
