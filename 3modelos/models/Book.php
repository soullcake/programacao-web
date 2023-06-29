<?php

class Book {

    protected $conn;
    public function __construct(SQLite3 $connection) {
        $this->conn = $connection; 
    } 

    public function saveBook(string $titulo, string $autor, string $editora) : SQLite3Result | bool{
        $query = "INSERT INTO books ('titulo', 'autor', 'editora') "
            . "values(:titulo,:autor,:editora)";

        $sttm = $this->conn->prepare($query);

        $sttm->bindValue(":titulo", $titulo);
        $sttm->bindValue(":autor", $autor);
        $sttm->bindValue(":editora", $editora);
        $result = $sttm->execute();
        return $result;
    }

    // implementar depois:
    // public function showBooks(): SQLite3Result | bool | array{
        
    //     $query= "SELECT * FROM books WHERE titulo";
    //     $sttm = $this->conn->prepare($query);
        
    //     $result = $sttm->execute();
    //     return $result;
    // }
}
