<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="assets/headerstyle.css" />
    <link
      href="https://api.fontshare.com/v2/css?f[]=satoshi@400,700,900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://rsms.me/">
<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  </head>
  <body>
    <!--- header --->
  
    <header>
      <a href="index.php" class="logo">
        <img src="assets/imgs/napslogo.svg" />
      </a>

      <ul class="navlist">
        <li><a href="about.php">ADD PRODUCTS</a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="products.php">MENU</a></li>
        <li><a href="#">FAQs</a></li>
        <li><a href="contact.php">CONTACT</a></li>
      </ul>

      
      <div class="right-content">
        <?php
        if(isset($_SESSION["user_email"])){

          echo '<a href="cart.php" ><svg xmlns="http://www.w3.org/2000/svg" id="cart" class="headericons"   viewBox="0 0 24 24" fill="rgba(255,145,77,1)"><path d="M4.00436 6.41686L0.761719 3.17422L2.17593 1.76001L5.41857 5.00265H20.6603C21.2126 5.00265 21.6603 5.45037 21.6603 6.00265C21.6603 6.09997 21.6461 6.19678 21.6182 6.29L19.2182 14.29C19.0913 14.713 18.7019 15.0027 18.2603 15.0027H6.00436V17.0027H17.0044V19.0027H5.00436C4.45207 19.0027 4.00436 18.5549 4.00436 18.0027V6.41686ZM5.50436 23.0027C4.67593 23.0027 4.00436 22.3311 4.00436 21.5027C4.00436 20.6742 4.67593 20.0027 5.50436 20.0027C6.33279 20.0027 7.00436 20.6742 7.00436 21.5027C7.00436 22.3311 6.33279 23.0027 5.50436 23.0027ZM17.5044 23.0027C16.6759 23.0027 16.0044 22.3311 16.0044 21.5027C16.0044 20.6742 16.6759 20.0027 17.5044 20.0027C18.3328 20.0027 19.0044 20.6742 19.0044 21.5027C19.0044 22.3311 18.3328 23.0027 17.5044 23.0027Z"></path></svg></a>';

       echo '<a href="logout.php" ><svg xmlns="http://www.w3.org/2000/svg"  class="headericons" viewBox="0 0 24 24" fill="rgba(255,145,77,1)"><path d="M4 18H6V20H18V4H6V6H4V3C4 2.44772 4.44772 2 5 2H19C19.5523 2 20 2.44772 20 3V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V18ZM6 11H13V13H6V16L1 12L6 8V11Z"></path></svg></a>';
       echo '<div class="bx bx-menu" id="menu-icon"></div>';
      } else {
        echo '<svg xmlns="http://www.w3.org/2000/svg" id="cart" class="headericons" viewBox="0 0 24 24" fill="rgba(255,145,77,1)"><path d="M4.00436 6.41686L0.761719 3.17422L2.17593 1.76001L5.41857 5.00265H20.6603C21.2126 5.00265 21.6603 5.45037 21.6603 6.00265C21.6603 6.09997 21.6461 6.19678 21.6182 6.29L19.2182 14.29C19.0913 14.713 18.7019 15.0027 18.2603 15.0027H6.00436V17.0027H17.0044V19.0027H5.00436C4.45207 19.0027 4.00436 18.5549 4.00436 18.0027V6.41686ZM5.50436 23.0027C4.67593 23.0027 4.00436 22.3311 4.00436 21.5027C4.00436 20.6742 4.67593 20.0027 5.50436 20.0027C6.33279 20.0027 7.00436 20.6742 7.00436 21.5027C7.00436 22.3311 6.33279 23.0027 5.50436 23.0027ZM17.5044 23.0027C16.6759 23.0027 16.0044 22.3311 16.0044 21.5027C16.0044 20.6742 16.6759 20.0027 17.5044 20.0027C18.3328 20.0027 19.0044 20.6742 19.0044 21.5027C19.0044 22.3311 18.3328 23.0027 17.5044 23.0027Z"></path></svg>';
        
        echo '<a href="login.php" ><svg xmlns="http://www.w3.org/2000/svg" class="headericons"viewBox="0 0 24 24" fill="rgba(255,145,77,1)"><path d="M4 15H6V20H18V4H6V9H4V3C4 2.44772 4.44772 2 5 2H19C19.5523 2 20 2.44772 20 3V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V15ZM10 11V8L15 12L10 16V13H2V11H10Z"></path></svg></a>';
        echo '<div class="bx bx-menu" id="menu-icon"></div>';
      }
      ?>
      
        </div>
    </header>
    

    <script src="assets/script.js"></script>
    <script>
document.addEventListener('scroll', () => {
  const header = document.querySelector('header');
  
  if (window.scrollY > 0) {
    header.classList.add('scrolled'); // Add the class when scrolling down
  } else {
    header.classList.remove('scrolled'); // Remove the class when back to the top
  }
});
</script>


  </body>
</html>
 

