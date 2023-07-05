<?php

class Aluno {
    
    protected $conn;
    public function __construct(SQLite3 $connection) {
        $this->conn = $connection;
    }

    public function salvarAluno(string $nome, string $matricula, string $curso): SQLite3Result | bool {
        // variavel que contem a consulta que voce quer fazer ao banco de dados:
        $query = "INSERT INTO alunos ('nome', 'matricula', 'curso') "
            . "values(:nome, :matricula, :curso)";
        
        // preparando conexao e adicionando os valores: 
        $sttm = $this->conn->prepare($query);

        $sttm-> bindValue(":nome", $nome);
        $sttm-> bindValue(":matricula", $matricula);
        $sttm-> bindValue(":curso", $curso);
        
        // executando e salvando os dados:
        $result = $sttm->execute();
        return $result;
    }

}