<?php

class Product {

  protected $conn;
  public function __construct(SQLite3 $connection) {
      $this->conn = $connection; 
  } 

  public function find(): array | bool {
    $query = "SELECT * FROM products";
    $sttm = $this->conn->prepare($query);
    $result = $sttm->execute();

    $products = [];
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $products[] = $row;
    }

    return $products;
  }

}