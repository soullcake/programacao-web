<?php

class Emprestimo
{

    protected $conn;

    public function __construct(SQLite3 $connection)
    {
        $this->conn = $connection;
    }

    public function save (int $user_id, int $book_id): array | bool {
        
        $query = "INSERT INTO emprestimos(user_id, book_id)".
            " VALUES($user_id, $book_id)";

        $result = $this->conn->exec($query);
        return $result;

    }

    public static function all ($connection) {

        $db_conn = self::$conn ?? $connection;
        $result = $db_conn->query('SELECT * FROM emprestimos');

        $emprestimo_list = array();
        while ($emprestimo = $result->fetchArray()) {
            array_push($emprestimo_list, [
                'book_id' => $emprestimo['book_id'],
                'user_id' => $emprestimo['user_id'],

            ]);
        }
        return $emprestimo_list;
    }
    
}
