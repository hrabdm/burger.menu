<?php 
require('partials/header.php');
if(!empty($_POST)) {

  $sql = "INSERT INTO `users` (`username`, `email`, `password`) VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $_POST['password'] . "');";
  if (mysqli_query($conn, $sql)) {
      echo "Insert";
      header ("location: /");
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
 }
?>
<?php 
require('partials/footer.php')
?>