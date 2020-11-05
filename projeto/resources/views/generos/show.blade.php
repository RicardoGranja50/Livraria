Idg: {{$genero->id_genero}}<br>
Designação: {{$genero->designacao}}<br>
Observações: {{$genero->observacoes}}<br>


@if(count($genero->livros))
	@foreach($genero->livros as $livro)
		<h3>{{$livro->titulo}}</h3>
	@endforeach
@else
	<div class="alert alert-danger" role="alert">
		Neste genero ainda nao ha livros!
	</div>
@endif