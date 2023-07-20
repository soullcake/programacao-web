<h1>Autores</h1>

@foreach ($authors as $author)
<p>
    <a style="text-decoration: none" href="{{ route('author.show', $author) }}"> {{ $author->name }}</a><br>
</p>
<hr>
@endforeach


