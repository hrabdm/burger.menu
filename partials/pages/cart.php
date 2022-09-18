
<?php 
$sql = "SELECT * FROM cart";
if($result = $conn->query($sql)):
  $sum = 0; 
  $total = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
  <!--  All snippets are MIT license http://bootdey.com/license -->
  <title>bs4 cart - Bootdey.com</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <div class="container px-3 my-5 clearfix">
    <a href="/?p=menu">Назад</a>
    <!-- Shopping cart table -->
    <div class="card">
      <div class="card-header">
        <h2>Shopping Cart</h2>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered m-0">
            <thead>
              <tr>
                <!-- Set columns width -->
                <th class="text-center py-3 px-4" style="min-width: 400px;">Product Name &amp; Details</th>
                <th class="text-right py-3 px-4" style="width: 100px;">Price</th>
                <th class="text-center py-3 px-4" style="width: 120px;">Quantity</th>
                <th class="text-right py-3 px-4" style="width: 100px;">Total</th>
                <th class="text-center align-middle py-3 px-0" style="width: 40px;"><a href="#" class="shop-tooltip float-none text-light" title="" data-original-title="Clear cart"><i class="ino ion-md-trash"></i></a></th>
              </tr>
            </thead>
            <tbody>



            <?php
              foreach($result as $row):
                $sum += $row['price'];
                $total = $row['price'] * $row['quantity'];
               ?>
              <tr>
                <td class="p-4">
                  <div class="media align-items-center">
                    <img src="<?php echo $row['img']; ?>" class="d-block ui-w-40 ui-bordered mr-4" alt="">
                    <div class="media-body">
                      <a href="#" class="d-block text-dark"><?php echo $row['foodname']; ?></a>
                      
                    </div>
                  </div>
                </td>
                <td class="text-right font-weight-semibold align-middle p-4"><?php echo $row['price']; ?>$</td>
                <td class="align-middle p-4">
                <input type="text" class="totlalPrice form-control text-center" value="1">
              </td>
                <td class="text-right font-weight-semibold align-middle p-4"><?php echo $total; ?>$</td>
                <td class="text-center align-middle px-0"><a href="/modules/del_product.php?id=<?php echo $row['id'];?>" class="shop-tooltip close float-none text-danger" title="" data-original-title="Remove">×</a></td>
              </tr>
              <?php 
                endforeach;
                endif;
              ?>


            </tbody>
          </table>
        </div>
       <script>
        
       </script>
        <!-- / Shopping cart table -->

        <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
          <div class="mt-4">
            <label class="text-muted font-weight-normal">Promocode</label>
            <input type="text" placeholder="ABC" class="form-control">
          </div>
          <div class="d-flex">
            <div class="text-right mt-4 mr-5">
              <label class="text-muted font-weight-normal m-0">Discount</label>
              <div class="text-large"><strong>0</strong></div>
            </div>
            <div class="text-right mt-4">
              <label class="text-muted font-weight-normal m-0">Total price</label>
              <div class="text-large"><strong><?php echo $sum ?>$</strong></div>
            </div>
          </div>
        </div>

        <div class="float-right">
          <a href="/?p=menu" class="btn btn-lg btn-default md-btn-flat mt-2 mr-3">Back to shopping</a>
          <button type="button" class="btn btn-lg btn-primary mt-2">Checkout</button>
        </div>

      </div>
    </div>
  </div>

  <style type="text/css">
    body {
      margin-top: 20px;
      background: #eee;
    }

    .ui-w-40 {
      width: 40px !important;
      height: auto;
    }

    .card {
      box-shadow: 0 1px 15px 1px rgba(52, 40, 104, .08);
    }

    .ui-product-color {
      display: inline-block;
      overflow: hidden;
      margin: .144em;
      width: .875rem;
      height: .875rem;
      border-radius: 10rem;
      -webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.15) inset;
      box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.15) inset;
      vertical-align: middle;
    }
  </style>

  <script type="text/javascript">

  </script>
</body>

</html>