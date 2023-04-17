<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Iconscout CSS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

</head>
<body> 
    <?php
        if(isset($_POST['logout'])){
            header('location:index.php');
        }
    ?>  
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Welcome to the HomePage</span>
                <form method= "POST">
                    <div class="input-field button">
                    <input type="submit" value="Logout" name ="logout">
                    </div>
                </form>
            </div>           
        </div>
    </div>

    <script src="script.js"></script>

</body>
</html>
