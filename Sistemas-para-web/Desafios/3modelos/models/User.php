<?php

class User {

    protected $conn;
    public function __construct(SQLite3 $connection) {
        $this->conn = $connection; 
    } 

    public function find($email): array | bool {
        $query = "SELECT * FROM users WHERE email=:email";
        $sttm = $this->conn->prepare($query);
        $sttm->bindValue(":email", $email);
        $result = $sttm->execute();
        return $result->fetchArray();
    }

    public function save (string $nome, string $email, string $senha) : SQLite3Result | bool{
        $query = "INSERT INTO users ('nome', 'email', 'senha') "
            . "values(:nome,:email,:senha)";

        $sttm = $this->conn->prepare($query);

        $sttm->bindValue(":nome", $nome);
        $sttm->bindValue(":email", $email);
        $sttm->bindValue(":senha", password_hash($senha, PASSWORD_ARGON2I));
        $result = $sttm->execute();
        return $result;
    }
    
}
