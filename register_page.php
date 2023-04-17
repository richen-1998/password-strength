<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="style.css">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

         
    <title>Login & Registration Form</title>
</head>
<body>
    <?php
    // require files
    include './login.php';
    include './register.php';
    ?>
    <div class="container">
        <div class="forms signup-container">
            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">Registration</span>

                <form action="" method= "POST">
                    <div class="input-field">
                        <input type="text" placeholder="Enter your name" name ="name" required>
                        <i class="uil uil-user"></i>
                    </div>
                 
                    <div class="input-field">
                        <input type="text" placeholder="Enter your email" name= "email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" name="password" placeholder="Create a password" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" name="c_password" placeholder="Confirm a password" required>
                        <i class="uil uil-lock icon"></i>
                      
                    </div>                    
                    <br>
                    <div class="g-recaptcha" data-sitekey="6Led68wgAAAAAMPf8PwwK4VnphxtW9Uskyoxe6jD"></div>
                    <div class="input-field button">
                        <input type="submit" value="Register" name="register">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Already registered?
                        <a href="./index.php" class="text login-link">Login now</a>
                    </span>
                </div>
            </div>
        </div>
    </div>


    <script src="script.js"></script>

</body>
</html>
