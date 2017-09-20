@extends('principal')

@section('conteudo')

@if (count($errors) > 0)
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form	action="/projetos/adiciona" method="post">
<input type="hidden" name="_token" value="{{{ csrf_token() }}}"> <!-- Ultilizado para proteger as informações-->
	<div class="form-group">
		<label>Nome</label>
		<input	name="nome"	class="form-control"/>
	</div>
	<div class="form-group">
	    <label>Categoria</label>
	    <select name="categoria_id" class="form-control">
	        @foreach($categorias as $c)
	        <option value="{{$c->id}}">{{$c->nome}}</option>
	        @endforeach
	    </select>
	</div>
	<div class="form-group">
		<label>Data Inicial</label>
		<input	type ="date" name="data_inicio"	class="form-control"/>
	</div>
	<div class="form-group">
		<label>Data Final</label>
		<input	type ="date" name="data_fim"	class="form-control"/>
	</div>
	<div class="form-group">
		<label>Valor</label>
		<input	type="number"	name="valor"	class="form-control"/>
	</div>
	<div class="form-group">
		<label>Horas</label>
		<input	type="number"	name="horas"	class="form-control"/>
	</div>
	<button	type="submit"	
	class="btn	btn-primary	">Adicionar</button>
</form>

@stop