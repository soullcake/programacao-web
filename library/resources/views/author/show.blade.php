<h1>{{ $author->name }}</h1>

<p>
    <strong>Nome: </strong> {{ $author->name }} <br>
    <strong>Idade: </strong> {{ $author->age }} <br>
    <strong>Nacionalidade: </strong> {{ $author->nationality }} <br>
    <strong>Data de nascimento: </strong> {{ $author->birthdate }} <br>
    <br>
    <a href="{{ route('author.edit', $author) }}">Editar</a><br>
    <br>
    <form action="{{ route('author.destroy', $author) }}" method="post">
        @csrf
        @method('DELETE')
        <button>Deletar</button>
    </form>
</p>