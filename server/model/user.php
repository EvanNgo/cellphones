<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once "db_helper.php";

class User extends DatabaseHelper
{
  function getAllUser() {
    return $this->Select("SELECT * FROM cp_user");
  }

  function updateCodeByID($id, $newCode) {
    return $this->Update("UPDATE cp_user SET Usercode='{$newCode}' WHERE ID={$id}");
  }
}

?>
