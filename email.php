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
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Reset Password</span>

                <form action="./forpassword.php" method = "get">                                        
                    <div class="input-field">
                        <input type="text" class="email" placeholder="Enter your email" name="email" id="email" required>  
                        <i class="uil uil-envelope icon"></i>
                    </div>                    

                    <div class="input-field button">
                        <input type="submit" value="Enter" name ="submit">
                    </div>
                </form>                
            </div>           
        </div>
    </div>

    <script src="script.js"></script>

</body>
</html>
