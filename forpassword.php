<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Iconscout CSS-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--CSS-->
    <link rel="stylesheet" href="style.css">
         
</head>
<body>
    <?php
        include './reset_password.php';
    ?>
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Reset Password</span>
                                  
                </form>            
                <form action="" method = "POST">                    
                    <div class="input-field">
                        <input type="password" class="old_password" placeholder="Enter your old password" name="old_password" id="email" required>
                        <i class="uil uil-lock icon"></i>
                     
                    </div>
                    <div class="input-field">
                        <input type="password" class="new_password" placeholder="Enter your new password" name="new_password" id="email" required>
                        <i class="uil uil-lock icon"></i>
                  
                    </div>
                    <div class="input-field">
                        <input type="password" class="confirm_new_password" placeholder="Confirm your password" name="confirm_new_password" id="email" required>
                        <i class="uil uil-lock icon"></i>
               
                    </div>                    

                    <div class="input-field button">
                        <input type="submit" value="Enter" name ="forget">
                    </div>
                </form>                
            </div>           
        </div>
    </div>
    <script src="script.js"></script>

</body>
</html>
