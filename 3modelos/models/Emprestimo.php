<?php

class Emprestimo {

    protected $conn;
    public function __construct(SQLite3 $connection) {
        $this->conn = $connection; 
    } 

    public function saveEmprestimo(string $livro, string $pessoa, string $data_emprestimo, string $data_devolucao) : SQLite3Result | bool{
        $query = "INSERT INTO books ('livro', 'pessoa', 'data_emprestimo', 'data_devolucao') "
            . "values(:livro,:pessoa,:data_emprestimo,:data_devolucao)";

        $sttm = $this->conn->prepare($query);

        $sttm->bindValue(":livro", $livro);
        $sttm->bindValue(":pessoa", $pessoa);
        $sttm->bindValue(":data_emprestimo", $data_emprestimo);
        $sttm->bindValue(":data_devolucao", $data_devolucao);
        
        $result = $sttm->execute();
        return $result;
    }
}