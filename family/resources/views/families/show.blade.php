@extends('admin.template.main') 
@section('title', 'Editando: '.$family->name)
<?php var_dump($family) ?>


@section('content')

<div class="container">
	<h3><a href="{{ route('families.index') }}">Volver a lista de familias</a> </h3>	
	<form class="form-horizontal" action="/update/{{ $family->id }}">
		
		{{csrf_field()}}
		<input name="_method" type="hidden" value="PATCH">
		<fieldset>
		<!-- Form Name -->
		<legend>Actualiza los datos de tu familia</legend>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="textinput">Nombre</label>  
		  <div class="col-md-4">
		  <input id="frm_name" name="frm_name" type="text" placeholder="Nombre de la familia" class="form-control input-md" value="{{ $family->name }}" />
		  <span class="help-block">help</span>  
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="textinput">Avatar</label>  
		  <div class="col-md-4">
		  <input id="frm_avatar" name="frm_avatar" type="text" placeholder="imagen" class="form-control input-md" value="{{ $family->avatar }}" />
		  <span class="help-block">help</span>  
		  </div>
		</div>

		


		 <button type="submit" class="btn btn-success"> guardar</button>
		</fieldset>
	</form>

</div>
@endsection