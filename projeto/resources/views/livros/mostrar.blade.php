@foreach($livro->autores as $autor)
	@if($autor==$nome)
		{{$nome}}
	@endif
@endforeach
