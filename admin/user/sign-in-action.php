<?php
// session start
session_start();
$error = [];
if(isset($_POST['submit'])){
    $username = trim(htmlentities($_POST['username']));
    $password = $_POST['password'];
    // hash password
    $hash_password = md5($password);
    
    // check empty field
    if(empty($username)){
        $_SESSION['error_username'] = $error['error_username'] = "Inter your username";
    }
    if(empty($password)){
        $_SESSION['error_password'] = $error['error_password'] = "Type your password";
    }
    
    if(empty($error)){
        // include database
        include('../db.php');
        // select query
        $query = "SELECT * FROM `admin_user` WHERE username = '$username' AND password = '$hash_password'";
        $result = mysqli_query($conn, $query);
        // if exist any registred user
        if(mysqli_num_rows($result)>0){
            $_SESSION['username'] = $username;
            // redirect home page
            header('Location: ../index.php');
        }else{
            // redirect sign-in page
            header('Location: sign-in.php');
        }
    }else{
        // redirect sign-in page
        header('Location: sign-in.php');
    }
}