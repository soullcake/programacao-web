<?php

class Lib {

    protected $conn;
    public function __construct(SQLite3 $connection) {
        $this->conn = $connection; 
    } 

    public function saveLib(string $nomeColecao, string $livro) : SQLite3Result | bool{
        $query = "INSERT INTO books ('nomeColecao', 'livro') "
            . "values(:nomeColecao,:livro)";

        $sttm = $this->conn->prepare($query);

        $sttm->bindValue(":nomeColecao", $nomeColecao);
        $sttm->bindValue(":livro", $livro);
        
        $result = $sttm->execute();
        return $result;
    }
}
