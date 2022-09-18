<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');
if(!empty($_GET)) {
    $sql = 'DELETE FROM cart WHERE `id`= ' . $_GET['id'];
    
    if (mysqli_query($conn, $sql)) {
        header ("location: /?p=cart");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    //mysqli_close($conn);
   } 
   ?>