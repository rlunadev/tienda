@extends('admin.template.main')
@section('title','editar '.$articles->title)
@section('content')
{!!Form::open(['route'=>['admin.articles.update',$articles],'method'=>'PUT'])!!}

<div class="form-group">
	{!! Form::label('title','Titulo')!!}
	{!! Form::text('title',$articles->title,['class'=>'form-control','required','placeholder'=>'Articulo'])!!}
</div>

<div class="form-group">
	{!!Form::label('category_id','Categoria')!!}
	{!!Form::select('category_id',$categories,$articles->category->id,['class'=>'form-control select-category','required','placeholder'=>'Seleccione Opcion'])!!}
</div>

<div class="form-group">
	{!!Form::label('content','Contenido')!!}
	{!!Form::textarea('content',$articles->content,['class'=>'form-control textarea-content'])!!}
</div>

<div class="form-group">
	{!!Form::label('tags','Tags')!!}
	{!!Form::select('tags[]',$tags,$my_tags,['class'=>'form-control select-tag','multiple','required'])!!}
</div>

<div class="form-group">
	{!!Form::submit('Guardar Cambios',['class'=>'btn btn-primary'])!!}
</div>

{!!Form::close()!!}

@endsection

@section('js')
<script>
	$('.select-tag').chosen({
		placeholder_text_multiple: 'seleccione 3',
		search_contains:true,
		no_result_text:'no se encontro resultados'
	});

	$('.select-category').chosen();

	$('.textarea-content').trumbowyg();

</script>
@endsection