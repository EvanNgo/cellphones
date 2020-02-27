<?php
include_once "user.php";
$user = new User();
$userList = $user->getAllUser();
print_r($userList);
echo "<br>";
echo "--------";
echo "<br>";
$userList = $user->updateCodeByID(1, "ban001");
$userList = $user->getAllUser();
print_r($userList);
?>
