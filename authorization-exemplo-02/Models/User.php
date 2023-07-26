<?php

class User
{

    protected $conn; //conexão com o banco de dados

    public function __construct(SQLite3 $connection) {
        $this->conn = $connection; 
    }

    public function find ($email) : Array | bool {
        $query = "SELECT * FROM users WHERE email=:email";
        $sttm = $this->conn->prepare($query);
        $sttm->bindValue(":email", $email);
        $result = $sttm->execute();
        return $result->fetchArray();
    }

    public function save (string $name, string $email, string $password) : SQLite3Result | bool{
        $query = "INSERT INTO users ('name', 'email', 'password') "
            . "values(:name,:email,:password)";

        $sttm = $this->conn->prepare($query);

        $sttm->bindValue(":name", $name);
        $sttm->bindValue(":email", $email);
        $sttm->bindValue(":password", password_hash($password, PASSWORD_ARGON2I));
        $result = $sttm->execute();
        return $result;
    }


    
}
