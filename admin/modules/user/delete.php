<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');
if(!empty($_GET)) {
    $sql = 'DELETE FROM users WHERE `id`= ' . $_GET['id'];
    
    if (mysqli_query($conn, $sql)) {
        header ("location: /admin/users.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    //mysqli_close($conn);
   } 
   ?>