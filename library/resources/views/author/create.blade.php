<h1>Criar Author</h1>


<form action="{{ route('author.store') }}" method="post">
    @csrf

    <label for="name">Nome</label>
    <input type="text" name="name" id="name" placeholder="Insira o nome do autor">
    <br><br>
    <label for="age">Idade</label>
    <input type="number" name="age" id="age">
    <br><br>
    <label for="nationality">Nacionalidade</label>
    <input type="text" name="nationality" id="nationality">
    <br><br>
    <label for="birthdate">Data de nascimento</label>
    <input type="date" name="birthdate" id="birthdate">
    <br><br>
    <button type="submit">Enviar</button>

</form>