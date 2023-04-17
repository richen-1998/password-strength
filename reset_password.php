<?php    
    include './connection.php';

    if(isset($_GET['email'])){
        $email = $_GET['email'];
        
        if(isset($_POST['forget'])){ 
            $old_password = md5($_POST['old_password']);
            $new_password = md5($_POST['new_password']);
            $confirm_password = md5($_POST['confirm_new_password']);

            $query = "SELECT * FROM users where email = '$email'";
            $result = mysqli_query($connection,$query);
            $row = mysqli_fetch_assoc($result);
            $ret_password = $row['password'];
            

            //check if password provided by user is same as database 

            if($ret_password == $old_password){
                if($new_password == $confirm_password){
                    // check password repetition
                    if($new_password != $old_password){                
                        $select = "SELECT * FROM users where email = '$email'";
                        $run_query = mysqli_query($connection,$select);
                        $result = mysqli_fetch_assoc($run_query);
                        $id = $result['id'];
                        $row = mysqli_num_rows($run_query);                    
                            if($row == 1){
                                $query = "UPDATE users SET 
                                password = '$new_password'
                                WHERE
                                id = '$id'
                                ";
                                $result = mysqli_query($connection,$query);
                                if($result){
                                    echo "password updated";
                                    header('location:./index.php');
                                }else{
                                    echo   '<script>alert("password not updated")</script>';
                                }
                            }else{
                                echo '<script>alert("User not found")</script>';
                            }
                    }else{
                        echo  '<script>alert("Password is not allowed")</script>';
                    }
                }
                else{
                    echo  '<script>alert("new password and confirm password doesnot match")</script>'; 
                }
            }else{
                echo '<script>alert("Old password doesnot match")</script>';
            }
            // check confirm password
            
        } 
    }

?>