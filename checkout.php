<?php
include('config.php');
?>

<?php
if (isset($_POST['order_btn'])) {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $method = $_POST['method'];
    $flat = $_POST['flat'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pin_code = $_POST['pin_code'];

    $cart_query = mysqli_query($conn, "SELECT * FROM `cart`");
    $price_total = 0;

    if (mysqli_num_rows($cart_query) > 0) {
        while ($product_item = mysqli_fetch_assoc($cart_query)) {
            // Calculate product price numerically
            $product_price = $product_item['price'] * $product_item['quantity'];
            $price_total += $product_price; // Accumulate the total

            $product_name[] = $product_item['name'] . ' (' . $product_item['quantity'] . ')';
        }
    }

    $total_product = implode(', ', $product_name);
    $detail_query = mysqli_query($conn, "INSERT INTO `order`(name, number, email, method, flat, street, city, state, pin_code, total_products, total_price) VALUES ('$name','$number','$email','$method','$flat','$street','$city','$state','$pin_code','$total_product','$price_total')") or die('query failed');

    if ($cart_query && $detail_query) {
        echo "
        <div class='order-message-container'>
            <div class='message-container'>
                <h3>Thank you for shopping!</h3>
                <div class='order-detail'>
                    <span>$total_product</span>
                    <span class='total'> Total: ₱" . number_format($price_total, 2) . "</span>
                </div>
                <div class='customer-details'>
                    <p>Your Full Name: <span>$name</span></p>
                    <p>Your Number: <span>$number</span></p>
                    <p>Your Email: <span>$email</span></p>
                    <p>Your Address: <span>$flat, $street, $city, $state, $pin_code</span></p>
                    <p>Your Mode of Payment: <span>$method</span></p>
                    <p>(*Pay when product arrives*)</p>
                </div>
                <a href='products.php' class='btn'>Continue Shopping</a>
            </div>
        </div>
        ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'header.php'; ?>

<div class="container">

<section class="checkout-form">

   <h1 class="heading">complete your order</h1>

   <form action="" method="post">

   <div class="display-order">
   <?php
      $select_cart = mysqli_query($conn, "SELECT * FROM `cart`") or die(mysqli_error($conn));
      $total = 0;
      $grand_total = 0;

      if (mysqli_num_rows($select_cart) > 0) {
         while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
            // Use numeric values for calculations
            $total_price = $fetch_cart['price'] * $fetch_cart['quantity'];
            $grand_total += $total_price;
   ?>
   <!-- Display formatted price -->
   <span><?= $fetch_cart['name']; ?> (<?= $fetch_cart['quantity']; ?>)</span>
   <?php
         }
      } else {
         echo "<div class='display-order'><span>Your cart is empty!</span></div>";
      }
   ?>
   <!-- Format grand total for display -->
   <span class="grand-total"> Grand Total: ₱<?= number_format($grand_total, 2); ?> </span>
   </div>


      <div class="flex">
         <div class="inputBox">
            <span>Your Full Name</span>
            <input type="text" placeholder="Enter your name" name="name" required>
         </div>
         <div class="inputBox">
            <span>your number</span>
            <input type="number" placeholder="Enter your number" name="number" required>
         </div>
         <div class="inputBox">
            <span>your email</span>
            <input type="email" placeholder="Enter your email" name="email" required>
         </div>
         <div class="inputBox">
            <span>payment method</span>
            <select name="method">
               <option value="Cash on delivery" selected>Cash on Delivery</option>
            </select>
         </div>
         <div class="inputBox">
            <span>Address Line 1</span>
            <input type="text" placeholder="Street" name="flat" required>
         </div>
         <div class="inputBox">
            <span>address line 2</span>
            <input type="text" placeholder="Floor/Unit/Room" name="street" required>
         </div>
         <div class="inputBox">
            <span>city</span>
            <input type="text" placeholder="e.g. Antipolo" name="city" required>
         </div>
         <div class="inputBox">
            <span>province</span>
            <input type="text" placeholder="e.g. Rizal" name="state" required>
         </div>
         <div class="inputBox">
            <span>pin code</span>
            <input type="text" placeholder="e.g. 1870" name="pin_code" required>
         </div>
      </div>
      <input type="submit" value="order now" name="order_btn" class="btn">
   </form>

</section>

</div>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>