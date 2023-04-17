<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Iconscout CSS-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
      
    <title>Login & Registration</title>
</head>
<body>
    <?php
    // require files
    include './login.php';
    include './register.php';
    include './reset_password.php';
    ?>
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>

                <form action="" method = "POST">
                    <div class="input-field">
                        <input type="text" placeholder="Enter your email" id = "email" name="email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Enter your password" name="password" id="email" required>
                        <i class="uil uil-lock icon"></i>
                     
                    </div>

                    <div class="checkbox-text">                        
                        <a href="./email.php" class="text">Reset Password</a>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Login Now" name ="submit">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="register_page.php" class="text signup-link">Signup now</a>
                    </span>
                </div>
            </div>           
        </div>
    </div>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script src="script.js"></script>

</body>
</html>
