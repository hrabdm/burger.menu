<?php
session_start();
require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');
require($_SERVER['DOCUMENT_ROOT'] . '/configs/helpers.php');



if (isset($_POST['product_id']) && !empty($_POST['product_id'])) {
    if ($result = mysqli_query($conn, "SELECT * FROM cart WHERE id =" . $_POST['product_id'])) {
        if (mysqli_num_rows($result) == 0) {
            $sql =   'SELECT * FROM `menu` WHERE `id` =' . $_POST['product_id'];
            $result2 = mysqli_query($conn, $sql);
            $item = $result2->fetch_assoc();
            $foodname = $item['foodname'];
            $price = $item['price'];
            $img = $item['preview'];
            $sql2 =  "INSERT INTO `cart` (`id`, `foodname`, `price`, `img`) VALUES ('" . $_POST['product_id'] . "','" . $foodname . "', '" . $price . "', '" . $img . "' );";
            $result2 = mysqli_query($conn, $sql2);
        }    
    }
    echo getProductCount() ;
}