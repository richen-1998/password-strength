<?php
include './connection.php';
if(isset($_POST['submit'])){    
    $name = $_POST['email'];
    $password = md5($_POST['password']);

    $select_query = "SELECT * FROM users WHERE email = '$name' and password = '$password'";        
    $run_query = mysqli_query($connection,$select_query);        
    $count = mysqli_num_rows($run_query);

    if($count == 1){
        header('location:homepage.php');
    }else{
        echo '<script>alert("check your credentials")</script>';
    }
}

?>
