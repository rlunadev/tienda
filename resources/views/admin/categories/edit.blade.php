@extends('admin.template.main')

@section('title','Editar categoria'.$category->name)

@section('content')
	{!! Form::open(['route'=>['admin.categories.update',$category],'method'=>'put']) !!}
	<div class="form-group">
		{!! Form::label('name','Nombre') !!}
		{!! Form::text('name',$category->name,['class'=>'form-control','placeholder'=>'','required']) !!}
	</div>

	<div class="div-group">
		{!!Form::submit('Editar',['class'=>'btn btn-primary'])!!}
	</div>
{!! Form::close() !!}
@endsection