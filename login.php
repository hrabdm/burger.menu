<?php
require('partials/header.php');
if (!empty($_POST)) {
  $sql = "SELECT * FROM users WHERE email = '" . $_POST['email'] . "' AND password = '" . $_POST['password'] . "'";
  $result = mysqli_query($conn, $sql);
  $user = $result->fetch_assoc();
  if ($user) {
    if (isset($_POST['remember'])) {
      setcookie('user_id', $user['id'], time() + 60 * 60 * 24 * 30, '/');
      echo '<h2>' . $_COOKIE['user_id'] . '</h2>';
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

?>


  


<?php 
require('partials/footer.php')
?>