<?php
if (!$_POST) exit('No direct script access allowed');

require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');

if (!empty($_POST['name']) && !empty($_POST['phone'])) {
    $name = trim(strip_tags($_POST['name']));
    $phone = trim(strip_tags($_POST['phone']));
    $email = trim(strip_tags($_POST['email']));
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        exit('Wrong email! Refresh the page (F5) and sign right email!');
    }

    $sql =
        "INSERT INTO `book` (`username`, `userphone`, `email`, `numberofguests`, `bookdate`) VALUES ('" . $name . "', '" . $phone . "', '" . $email . "', '" . $_POST['persons'] . "', '" . $_POST['date'] . "')";


    if (mysqli_query($conn, $sql)) {
        echo 'Your request has been received';
    } else {
        echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
        echo 'Please, fill all fields before sending';
    }
}
