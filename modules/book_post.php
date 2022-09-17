<?php
if (!$_POST) exit('<div class="alert alert-danger" role="alert">No direct script access allowed</div>');

require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');

if (!empty($_POST['name']) && !empty($_POST['phone'])) {
    $name = trim(strip_tags($_POST['name']));
    $phone = trim(strip_tags($_POST['phone']));
    $email = trim(strip_tags($_POST['email']));
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        exit('<div class="alert alert-warning" role="alert">Wrong email! Refresh the page (F5) and sign right email!</div>');
    }

    $sql =
        "INSERT INTO `book` (`username`, `userphone`, `email`, `numberofguests`, `bookdate`) VALUES ('" . $name . "', '" . $phone . "', '" . $email . "', '" . $_POST['persons'] . "', '" . $_POST['date'] . "')";


    if (mysqli_query($conn, $sql)) {
        echo "<div class='alert alert-success alert-dismissible fade show'>
              <strong>Success! </strong>Your request to book a table for <strong>" . $_POST['persons'] . " person</strong> on <strong>" . $_POST['date'] . "</strong> has been received and we are working hard on it. Please expect a booking confirmation call within 10 minutes.</div>";
    } else {
        echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
        echo 'Please, fill all fields before sending';
    }
}
