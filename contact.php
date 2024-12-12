

<!DOCTYPE html>
<html>
<head>
    <title> Contact Us </title>
    <link rel="stylesheet" href="assets/contactstyle.css">
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@1,2&display=swap" rel="stylesheet">
</head>

<body>
<?php include_once 'header.php';?>
    <div class="main-container">
        
        <div class="login-box">
            <div class="top-bar">
                <div class="left-buttons">
                    <button class="circle1"></button>
                    <button class="circle2"></button>
                    <button class="circle3"></button>
                </div>
            </div>

            <div class="formm">
                <br>
                <h1> Contact Us! </h1>
                <p id="FB"> Your feedback matters to us! We'd love to get in touch and learn more about how we can best serve you. </p> <br>
                <form>
                    <input type="text" placeholder="&nbsp&nbsp&nbsp Full Name" class="tabs" required> <br><br>
                    <input type="email" placeholder="&nbsp&nbsp&nbsp Email Address" class="tabs" required> <br><br>
                    <input type="tel" id="phone" name="phone" placeholder="&nbsp&nbsp&nbsp 0123-456-7890" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" class="tabs" required> <br><br>
                    <textarea rows="4" cols="53" name="comment" form="usrform" placeholder="&nbsp&nbsp&nbsp Message" class="mestabs"></textarea>
                    <button type="submit" class="sub"> <h4 class = "subtext"> SUBMIT </h4> </button>
                </form>
            </div>

            <div class="social-login">
                <img src = "assets/imgs/cook.png" class = "cook">
                <h1> Our Socials </h1>
                <div class="social-icons">
                    <a href="#"> <img src = "assets/imgs/facebook.svg"> </a>
                    <a href="#"> <img src = "assets/imgs/mail.svg"> </a>
                    <a href="#"> <img src = "assets/imgs/messenger.svg"> </a>
                </div>
            </div>

        </div>
        <br><br><br>
    </div>
    
</body>
</html>