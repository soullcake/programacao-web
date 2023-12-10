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

    public function save (string $username, string $email, string $password) : SQLite3Result | bool{
        $query = "INSERT INTO users ('username', 'email', 'password') "
            . "values(:username,:email,:password)";

        $sttm = $this->conn->prepare($query);

        $sttm->bindValue(":username", $username);
        $sttm->bindValue(":email", $email);
        $sttm->bindValue(":password", password_hash($password, PASSWORD_ARGON2I));
        $result = $sttm->execute();
        return $result;
    }
    
}
