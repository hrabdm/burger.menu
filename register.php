<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');
if (!isset($_SESSION)) {
    session_start();
}
if (!empty($_POST)) {
    /* хеширование пароля */
    $passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO `users` (`username`, `email`, `password`, `userphone`) VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $passwordHash . "', '" . $_POST['phone'] . "');";
    if (mysqli_query($conn, $sql)) {
        echo "Insert";
        header("location: /");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
