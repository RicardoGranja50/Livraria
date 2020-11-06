Ide: {{$editora->id_editora}}<br>
Nome: {{$editora->nome}}<br>
Morada: {{$editora->morada}}<br>

Livros:
@foreach($editora->livros as $editora)
	{{$editora->titulo}}<br>
@endforeach