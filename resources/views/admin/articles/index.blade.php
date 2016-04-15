@extends('admin.template.main')
@section('title','add categoria')
@section('content')

<a href="{{route('admin.articles.create')}}"><button class="btn btn-success">Nuevo</button></a>

{!!Form::open(['route'=>'admin.articles.index','method'=>'GET','class'=>'navbar-form pull-right'])!!}
	<div class="input-group">
		{!!Form::text('title',null,['class'=>'form-control','placeholder'=>'buscar articulo','aria-describedby'=>'search'])!!}
		<span class="input-group-addon glyphicon glyphicon-search" id="searh"></span>
	</div>
{!!Form::close()!!}

<table class="table table-striped">
	<thead>
		<th>Titulo</th>
		<th>Usuario</th>
		<th>Categoria</th>
		<th>Acción</th>
	</thead>
	<tbody>
		@foreach($articles as $article)
		<tr>
			<td>{{$article->title}}</td>
			<td>{{$article->user->name}}</td>
			<td>{{$article->category->name}}</td>
			<td>	
				<a href="{{route('admin.articles.edit',$article->id) }}" class="btn btn-warning">
					<span class="glyphicon glyphicon-wrench"></span>
				</a>
				<a href="{{route('admin.articles.destroy',$article->id) }}" class="btn btn-danger" onclick= "return confirm('seguro de eliminar el registro')">
					<span class="glyphicon glyphicon-remove-circle"></span>
				</a>
			</td>
		@endforeach
	</tbody>
</table>
<div class="text-center">
	{!! $articles->render()!!}
</div>
@endsection