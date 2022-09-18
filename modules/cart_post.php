<?php 
session_start();
require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');
require($_SERVER['DOCUMENT_ROOT'] . '/configs/helpers.php');



if(isset($_POST['product_id']) && !empty($_POST['product_id'])) {
    $current_added_product = getProductById($_POST['product_id']);
    $current_cart_value = 0;
    if(!isset($_SESSION['product_list'])) {
        $_SESSION['product_list'][]= $current_added_product;
        $current_cart_value = count( $_SESSION['product_list']);
        $sql =   'SELECT * FROM `menu` WHERE `id` =' . $_POST['product_id'];
        $result = mysqli_query($conn, $sql);
        $item = $result->fetch_assoc();
        $foodname = $item['foodname'];
        $price = $item['price'];
        $img = $item['preview'];
        $sql2 =  "INSERT INTO `cart` (`foodname`, `price`, `img`) VALUES ('" . $foodname . "', '" . $price . "', '" . $img . "' );";
        $result2 = mysqli_query($conn, $sql2);
    }
    $product_check = false;
    if(isset($_SESSION['product_list'])) {
        foreach($_SESSION['product_list'] as $value) {
            if($value['id'] == $current_added_product['id']) {
                $product_check = true;
            }
        }
        if(!$product_check) {
            $_SESSION['product_list'][]= $current_added_product;
            $current_cart_value = count( $_SESSION['product_list']);
            $sql =   'SELECT * FROM `menu` WHERE `id` =' . $_POST['product_id'];
            $result = mysqli_query($conn, $sql);
            $item = $result->fetch_assoc();
            $foodname = $item['foodname'];
            $price = $item['price'];
            $img = $item['preview'];
            $sql2 =  "INSERT INTO `cart` (`foodname`, `price`, `img`) VALUES ('" . $foodname . "', '" . $price . "', '" . $img . "' );";
            $result2 = mysqli_query($conn, $sql2);
        }
        $current_cart_value = count( $_SESSION['product_list']);
    }
    echo  $current_cart_value;



 
}
?>

