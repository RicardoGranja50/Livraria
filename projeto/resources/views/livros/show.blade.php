ID: {{$livro->id_livro}}<br>
Titulo: {{$livro->titulo}}<br>
Idioma: {{$livro->idioma}}<br>
@if(isset($livro->genero->designacao))
	Designação: {{$livro->genero->designacao}}	
@else
	{{--coloca uma coixa a vermelho--}}
	<div class="alert alert-danger" role="alert">
	 sem designação
	</div>
@endif

@if(isset($livro->autor->nome))
	Autor: {{$livro->autor->nome}}
@else
<div class="alert alert-danger" role="alert">
	 sem nome
	</div>
@endif