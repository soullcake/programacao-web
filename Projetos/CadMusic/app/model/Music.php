<?php
class Music {

protected $conn;
public function __construct(SQLite3 $connection) {
    $this->conn = $connection;
} 

public function saveMusic (string $title, string $artist) : SQLite3Result | bool{
    $query = "INSERT INTO musics ('title', 'artist') "
        . "values(:title,:artist)";

    $sttm = $this->conn->prepare($query);

    $sttm->bindValue(":title", $title);
    $sttm->bindValue(":artist", $artist);
    $result = $sttm->execute();
    return $result;
}

}