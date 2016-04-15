@extends('admin.template.main')
@section('title','add categoria')
@section('content')
{!! Form::open(['route'=>'admin.categories.store','method']) !!}
	<div class="form-group">
		{!! Form::label('name','Nombre') !!}
		{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'nombre de categoria','required'])!!}
	</div>
	<div class="form-group">
		{!! Form::Submit('Registrar',['class'=>'btn btn-primary'])!!}
	</div>
{!! Form::close() !!}
@endsection