Ida: {{$autor->id_autor}}<br>
Nome: {{$autor->nome}}<br>
Nacionalidade: {{$autor->nacionalidade}}<br>


@if(count($autor->livros))
	@foreach($autor->livros as $livro)
		<h3>{{$livro->titulo}}</h3>
	@endforeach
@else
	<div class="alert alert-danger" role="alert">
		Neste genero ainda nao ha livros!
	</div>
@endif