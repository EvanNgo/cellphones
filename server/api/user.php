<?php
if (isset($_POST['action']) && $_POST['action'] !== "") {
  switch($_POST['action']) {
    case 'GET_USER':
      include_once $_SERVER['DOCUMENT_ROOT']."/server/model/user.php";
      getUser();
    break;
    default:
    response(false, 'Không tìm thấy action');
  }
} else {
  //trả về request thất bại do thiếu action
  response(false, 'Không tìm thấy action');
}

function getUser() {
  $user = new User();
  $userList = $user->getAllUser();
  response(true, 'Done', $userList);
}

function response($status, $message, $data = null) {
  echo json_encode(
    array(
      'status' => $status,
      'message' => $message,
      'data' => $data
    )
  );
}
?>