@extends('layout')
@section('pag')
<ul>
	@foreach($livros as $livro)
		<li>
			<a href="{{route('livros.show', ['id'=>$livro->id_livro])}}">
			{{$livro->titulo}}
		</a>
		</li>
	@endforeach
</ul>
{{$livros->render()}}
@endsection

@section('conteudo')
<form method="post" action="{{route('processar.form')}}">
        @csrf
<label for="name"> Titulo </label>
<input type="text" name="pesquisa">
<button type="submit"> Enviar </button>
</form>
@endsection