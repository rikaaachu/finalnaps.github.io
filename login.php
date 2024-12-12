<?php

session_start();


// Check if the user is already logged in, redirect to index
if (isset($_SESSION['user_email'] )) {
    header("Location: ../finalnaps/index.php");
    exit();
}

?>

<?php
 
@include 'config.php';

if (isset($_POST['submitregister'])) {
    $fname = mysqli_real_escape_string($conn, $_POST['names']);
    $lname = mysqli_real_escape_string($conn, $_POST['surnames']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);

    // Check if the email already exists
    $select = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $error[] = 'User already exists with this email!';
    } else {
        // Insert the new user
        $insert = "INSERT INTO users(names, surnames, email, password) VALUES('$fname', '$lname', '$email', '$password')";
        if (mysqli_query($conn, $insert)) {
            header('location: login.php');
            exit();
        } else {
            $error[] = 'Failed to register user. Please try again.';
        }
    }
};


if(isset($_POST['submitlogin'])) {
   
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);

    $select = "SELECT * FROM users WHERE email = '$email' && password = '$password'";

    $result = mysqli_query($conn, $select); 

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);

        if($row['userType'] == 'admin') {
            $_SESSION['admin_email'] =  $row['email'];
            header('location: admin.php');
        }

        else if($row['userType'] == 'user') {
            $_SESSION['user_email'] =  $row['email'];
            header('location: index.php');
        }
    } else {
         $error[] = 'Incorrect email or Password';
    }
};

?>







<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <link rel="stylesheet" href="assets/loginstyle.css">
    <title>Responsive Login and Registration Form</title>
</head>
<?php include_once 'header.php'; ?>
<body>
    <svg class="login__blob" viewBox="0 0 566 840" xmlns="http://www.w3.org/2000/svg">
        <mask id="mask0" mask-type="alpha">
            <path d="M342.407 73.6315C388.53 56.4007 394.378 17.3643 391.538 
            0H566V840H0C14.5385 834.991 100.266 804.436 77.2046 707.263C49.6393 
            591.11 115.306 518.927 176.468 488.873C363.385 397.026 156.98 302.824 
            167.945 179.32C173.46 117.209 284.755 95.1699 342.407 73.6315Z"/>
        </mask>
        <g mask="url(#mask0)">
            <path d="M342.407 73.6315C388.53 56.4007 394.378 17.3643 391.538 
            0H566V840H0C14.5385 834.991 100.266 804.436 77.2046 707.263C49.6393 
            591.11 115.306 518.927 176.468 488.873C363.385 397.026 156.98 302.824 
            167.945 179.32C173.46 117.209 284.755 95.1699 342.407 73.6315Z"/>
            <image class="login__img" href="o2.jpg"/>
        </g>
    </svg>

    <div class="login container grid" id="loginAccessRegister">
        <!-- Login Form -->
        <div class="login__access">
            <h1 class="login__title">Log in to your account</h1>
            <div class="login__area">
                <form action=" " method="POST" class="login__form">
                <?php       
                if(isset($error)) {
                    foreach($error as $error) {
                        echo '<span class = "error-msg">' .$error. '</span>';
                    };
                };
                ?>
                
                    <div class="login__content grid">
                        <div class="login__box">
                            <input type="email" name="email" id="email" required placeholder=" " class="login__input">
                            <label for="email" class="login__label">Email</label>
                            <i class="ri-mail-fill login__icon"></i>
                        </div>
                        <div class="login__box">
                            <input type="password" name="password" id="password" required placeholder=" " class="login__input">
                            <label for="password" class="login__label">Password</label>
                            <i class="ri-eye-off-fill login__icon login__password" id="loginPassword"></i>
                        </div>
                    </div>
                    <a href="#" class="login__forgot">Forgot your password?</a>
                    <button type="submit" name="submitlogin" class="login__button">Login</button>
                </form>

                <div class="login__social">
                    <p class="login__social-title">Or login with</p>
                    <div class="login__social-links">
                        <a href="#" class="login__social-link">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgba(234,113,46,1)"><path d="M3.06364 7.50914C4.70909 4.24092 8.09084 2 12 2C14.6954 2 16.959 2.99095 18.6909 4.60455L15.8227 7.47274C14.7864 6.48185 13.4681 5.97727 12 5.97727C9.39542 5.97727 7.19084 7.73637 6.40455 10.1C6.2045 10.7 6.09086 11.3409 6.09086 12C6.09086 12.6591 6.2045 13.3 6.40455 13.9C7.19084 16.2636 9.39542 18.0227 12 18.0227C13.3454 18.0227 14.4909 17.6682 15.3864 17.0682C16.4454 16.3591 17.15 15.3 17.3818 14.05H12V10.1818H21.4181C21.5364 10.8363 21.6 11.5182 21.6 12.2273C21.6 15.2727 20.5091 17.8363 18.6181 19.5773C16.9636 21.1046 14.7 22 12 22C8.09084 22 4.70909 19.7591 3.06364 16.4909C2.38638 15.1409 2 13.6136 2 12C2 10.3864 2.38638 8.85911 3.06364 7.50914Z"></path></svg>                        </a>
                    </div>
                </div>

                <p class="login__switch">
                    Don't have an account? 
                    <button id="loginButtonRegister">Create Account</button>
                </p>
            </div>
        </div>

        <!-- Registration Form -->
        <div class="login__register">
            <h1 class="login_title">Create new account</h1>
            <div class="login__area">
                <form action="" method="POST" class="login__form">
                
             

                    <div class="login__content grid">
                        <div class="login__group grid">
                            <div class="login__box">
                                <input type="text" name="names" id="names" required placeholder=" " class="login__input">
                                <label for="names" class="login__label">First Name</label>
                                <i class="ri-id-card-fill login__icon"></i>
                            </div>
                            <div class="login__box">
                                <input type="text" name="surnames" id="surnames" required placeholder=" " class="login__input">
                                <label for="surnames" class="login__label">Last Name</label>
                                <i class="ri-id-card-fill login__icon"></i>
                            </div>
                        </div>
                        <div class="login__box">
                            <input type="email" name="email" id="email" required placeholder=" " class="login__input">
                            <label for="emailCreate" class="login__label">Email</label>
                            <i class="ri-mail-fill login__icon"></i>
                        </div>
                        <div class="login__box">
                            <input type="password" name="password" id="password" required placeholder=" " class="login__input">
                            <label for="passwordCreate" class="login__label">Password</label>
                            <i class="ri-eye-off-fill login__icon login__password" id="loginPasswordCreate"></i>
                        </div>
                    </div>
                    <button type="submit" class="login__button" name="submitregister"   >Create account</button>
                </form>
                <p class="login__switch">
                    Already have an account?
                    <button id="loginButtonAccess">Log In</button>
                </p>
            </div>
        </div>
    </div>

  
    <script src="loginscript.js"></script>
</body>
</html>
