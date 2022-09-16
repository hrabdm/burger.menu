<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');
if (!isset($_SESSION)) {
  session_start();
}


if (!empty($_POST)) {
  $login = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM users WHERE email = '$login'";
  $result = mysqli_query($conn, $sql);
  $user = $result->fetch_assoc();
  /* проверка наличия юзера с таким мейлом и правильность хеша пароля введенного и из базы */
  if ($user && password_verify($password, $user['password'])) {

    if (isset($_POST['remember'])) {
      setcookie('user_id', $user['id'], time() + 60 * 60 * 24 * 30, '/');
    } else {
      $_SESSION["user_id"] = $user['id'];
    }

    header("location: /");
  } else {

    $_SESSION["user_id"] = null;
    setcookie('user_id', '', 0, '/');
    header("location: /");
  }
} else {
  header("location: /");
}
