@extends('principal')

@section('conteudo')
	<h1>Lista de Tasks</h1>
	<table class="table">
	@foreach ($projetos as $p)
		<tr>
			<td>Nome: <?= $p->nome ?></td>
			<td>Categoria: <?= $p->categoria->nome ?></td>
			<td>Data Inicial: <?= $p->data_inicio ?></td>
			<td>Data Final: <?= $p->data_fim ?></td>
			<td>Valor: <?= $p->valor ?></td>
			<td>Horas: <?= $p->horas ?></td>
			<td>
				<a href="/projetos/novo">
				  <span class="glyphicon glyphicon-pencil"></span>
				</a>
			</td>
			<td>
				<a href="/projetos/mostra/{{$p->id}}">
				  <span class="glyphicon glyphicon-search"></span>
				</a>
			</td>
			<td>
				<a href="/projetos/remove/{{$p->id}}">
				  <span class="glyphicon glyphicon-trash"></span>
				</a>
			</td>
		</tr>
	@endforeach
	</table>

	@if(old('nome'))
		<div class="alert alert-success">
		     Task {{old('nome')}} foi adicionada com <strong>Sucesso!</strong>.
		</div>
	@endif
@stop