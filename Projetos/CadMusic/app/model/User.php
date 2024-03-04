<?php
class User {

protected $conn;
public function __construct(SQLite3 $connection) {
    $this->conn = $connection;
} 

public function save (string $username, string $passwd) : SQLite3Result | bool{
    $query = "INSERT INTO users ('username', 'passwd') "
        . "values(:username,:passwd)";

    $sttm = $this->conn->prepare($query);

    $sttm->bindValue(":username", $username);
    $sttm->bindValue(":passwd", password_hash($passwd, PASSWORD_ARGON2I));
    $result = $sttm->execute();
    return $result;
}

}
