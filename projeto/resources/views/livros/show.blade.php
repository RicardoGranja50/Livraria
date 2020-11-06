ID: {{$livro->id_livro}}<br>
Titulo: {{$livro->titulo}}<br>
Idioma: {{$livro->idioma}}<br>
@if(isset($livro->genero->designacao))
	Designação: {{$livro->genero->designacao}}<br>
@else
	{{--coloca uma coixa a vermelho--}}
	<div class="alert alert-danger" role="alert">
	 sem designação <br>
	</div>
@endif

{{--
	@if(isset($livro->autores->nome))
		Autor: {{$livro->autores->nome}}
	@else
		<div class="alert alert-danger" role="alert">
		 sem nome
		</div>
	@endif
--}}


Autor:<br>
@foreach($livro->autores as $autor)
	{{$autor->nome}}<br>
@endforeach

Editora:
@foreach($livro->editoras as $editora)
	{{$editora->nome}}<br>
@endforeach