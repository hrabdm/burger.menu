<?php 
require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');



if(isset($_GET['product_id']) && !empty($_GET['product_id'])) {
$sql =   'SELECT * FROM `menu` WHERE `id` =' . $_GET['product_id'];
  $result = mysqli_query($conn, $sql);
  $item = $result->fetch_assoc();
  $foodname = $item['foodname'];
  $price = $item['price'];
  $img = $item['preview'];
  $sql2 =  "INSERT INTO `cart` (`foodname`, `price`, `img`) VALUES ('" . $foodname . "', '" . $price . "', '" . $img . "' );";
  $result2 = mysqli_query($conn, $sql2);
  header("location: /");
}
?>

