<head>
<link href="https://api.fontshare.com/v2/css?f[]=satoshi@1,2&display=swap" rel="stylesheet">
</head>

<header class="header3">

<?php
include('config.php');
?>

   <div class="flex">

      <a href="#" class="logo">foodies</a>

      <nav class="navbar">
         <a href="admin.php">add products</a>
         <a href="products.php">view products</a>
      </nav>

      <?php
         $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
         $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>