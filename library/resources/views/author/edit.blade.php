<H1>Editando {{$author->name}}:</H1>


<form action="{{ route('author.update', $author) }}" method="post">
    @csrf
    @method('PUT')

    <label for="name">Nome</label>
    <input type="text" name="name" id="name" value="{{ $author->name }}">
    <br><br>
    <label for="age">Idade</label>
    <input type="number" name="age" id="age" value="{{ $author->age }}">
    <br><br>
    <label for="nationality">Nacionalidade</label>
    <input type="text" name="nationality" id="nationality" value="{{ $author->nationality }}">
    <br><br>
    <label for="birthdate">Data de nascimento</label>
    <input type="date" name="birthdate" id="birthdate" value="{{ $author->birthdate }}">
    <br><br>
    <button type="submit">Salvar</button>

</form>
