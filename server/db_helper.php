<?php
include_once "db_connect.php";

class DatabaseHelper
{
  private $db = null;
  private $pdo = null;
  private $stmt = null;

  function __construct()
  {
    $this->db = new DBConenct();
    $this->pdo = $this->db->getConnect();
  }

  function Select($sql) {
    $result = false;
    $this->stmt = $this->pdo->prepare($sql);
    $this->stmt->execute();
    $result = $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  function Update($sql) {
    $result = false;
    $this->stmt = $this->pdo->prepare($sql);
    $result = $this->stmt->execute();
    return $result;
  }
}

?>
