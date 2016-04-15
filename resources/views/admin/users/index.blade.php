@extends('admin.template.main')
@section('title','index usuario')
@section('content')
<a href="{{route('admin.users.create')}}"><button class="btn btn-success">Registrar Usuario</button></a>
<table class="table table-striped">
	<thead>
		<th>Id</th>
		<th>Nombre</th>
		<th>Tipo</th>
		<th>Accion</th>
	</thead>
	<tbody>
		@foreach($users as $user)
		<tr>
			<td>{{$user->id}}</td>
			<td>{{$user->name}}</td>
			@if($user->type=="admin")
				<td><span class="label label-danger">{{$user->type}}</span></td>
			@else
				<td><span class="label label-primary">{{$user->type}}</span></td>
			@endif
			<td>
				<a href="{{ route('admin.users.destroy',$user->id) }}"><button class="btn btn-danger">Eliminar</button></a>
				<a href="{{ route('admin.users.edit',$user->id)}}"><button class="btn btn-warning">Editar</button></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
{!!$users->render()!!}
@endsection