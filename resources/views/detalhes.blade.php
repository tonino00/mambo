@extends('principal')

@section('conteudo')
	
	<h1>Detalhes de Tasks </h1>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3>{{$projetos->nome or 'não tem nome'}}</h3>
			</div><!-- /col-sm-12 -->
		</div><!-- /row -->
		<div class="row">
			<div class="col-sm-1">
				<div class="thumbnail">
					<img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
				</div><!-- /thumbnail -->
			</div><!-- /col-sm-1 -->

	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<strong>myusername</strong> <span class="text-muted">commented 5 days ago</span>
			</div>
			<div class="panel-body">
				<div class="container  col-sm-12">          
				  <table class="table">
				    <thead>
				      <tr>
				        <th>Categoria</th>
				        <th>Data Inicial</th>
				        <th>Data Final</th>
				        <th>Valor</th>
				        <th>Horas</th>
				      </tr>
				    </thead>
				    <tbody>
				      <tr>
				        <td>{{$projetos->categoria->nome}}</td>
				        <td>{{$projetos->data_inicio}}</td>
				        <td>{{$projetos->data_fim}}</td>
				        <td>{{$projetos->horas}}</td>
				        <td>{{$projetos->valor}}</td>
				      </tr>
				    </tbody>
				  </table>
				</div>
			</div><!-- /panel-body -->
		</div><!-- /panel panel-default -->
	</div><!-- /col-sm-5 -->
</div><!-- /row -->

	</div><!-- /container -->
	
@stop