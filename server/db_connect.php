<?php
class DBConenct
{
  private $pdo = null;
  private $c_db = null;
  private $host = "facebook.com";
  private $db = array(
    'dev' => array(
      'hostname' => "127.0.0.1",
      'username' => "root",
      'password' => "ABC@123",
      'database' => "cellphones",
    ),
    'sv' => array(
      'hostname' => "125.2.6.2",
      'username' => "aksjdhakjshd",
      'password' => "alskjdhakjsd",
      'database' => "cellphones",
    ));

  function getConnect() {
    if ($_SERVER["SERVER_NAME"] === $this->host) {
      $this->c_db = $this->db["sv"];
    } else {
      $this->c_db = $this->db["dev"];
    }
    try {
      $this->pdo = new PDO("mysql:host={$this->c_db["hostname"]};dbname={$this->c_db["database"]}", "{$this->c_db["username"]}", "{$this->c_db["password"]}");
    }
    catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
    return $this->pdo;
  }
}

?>
