@extends('admin.template.main')
@section('title','index usuario')
@section('content')
<a href="{{route('admin.categories.create')}}"><button class="btn btn-success">Registrar cat</button></a>
<table class="table table-striped">
	<thead>
		<th>Id</th>
		<th>Categoria</th>
	</thead>
	<tbody>
		@foreach($categories as $category)
		<tr>
			<td>{{$category->id}}</td>
			<td>{{$category->name}}</td>
			<td>
				<a href="{{ route('admin.categories.destroy',$category->id) }}"><button class="btn btn-danger">Eliminar</button></a>
				<a href="{{ route('admin.categories.edit',$category->id) }}"><button class="btn btn-warning">Editar</button></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
{!!$categories->render()!!}
@endsection