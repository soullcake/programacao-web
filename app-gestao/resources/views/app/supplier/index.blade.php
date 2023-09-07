<h1>TESTANDO BLADE</h1>


<h2>FUNCIONARIOS DA EMPRESA:</h2>

@foreach ($lista as $indice => $item)
    Funcionario: {{ $item['nome'] }}
    <br>
    Funcao: {{ $item['posicao'] }}
    <br>
    Modo de Trabalho: 
    @switch($item['mdt'])
        @case('R')
            <pre>Trabalha Remotamente</pre>
            @break
        @case('M')
            <pre>Trabalha 50% presencial e 50% remoto</pre>
            @break
        @case('P')
            <pre>Trabalha 100% presencial</pre>
            @break
        @default
            <h6>NAO INFORMADO</h6>       
    @endswitch
    <hr>
@endforeach

