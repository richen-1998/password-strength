<?php
include './connection.php';
if(isset($_POST['register'])){
    $secret = '6Led68wgAAAAAE-Z8wC-Qg2YTTBNmjniKsLJN9Ee';
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);
    if($responseData->success){
        
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];

    // Validate password strength
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
        echo '<script>alert("Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.")</script>';
    }else{
        if($password == $c_password ){
            $final_password = md5($password);
            $query = "INSERT INTO users SET
                name = '$name',
                email = '$email',
                password = '$final_password',
                created_at = now()
            ";    
            $run_query = mysqli_query($connection,$query);
            if($run_query){
                echo '<script>alert("user inserted")</script>';
            }else{
                echo  '<script>alert("user not interested")</script>';
            }
        }
    }

}else {
    echo '<script>alert("CAPTCHA not verify")</script>';
}
}

?>