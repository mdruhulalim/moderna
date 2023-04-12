<?php
// session start
session_start();
// submit sign up form data in Database
$error = [];
if(isset($_POST['submit'])){
    $username = trim(htmlentities($_POST['username']));
    $email = trim(htmlentities($_POST['email']));
    $password = $_POST['password'];
    $passwordB = $_POST['passwordB'];
    // hash password
    $hash_password = md5($passwordB);
    $photo = $_FILES['photo']['tmp_name'];
    $photo_name = $_FILES['photo']['name'];

    // check empty field
    if(empty($username)){
        $_SESSION['error_username'] = $error['error_username'] = 'Inter your user name';
    }
    if(empty($email)){
        $_SESSION['error_email'] = $error['error_email'] = 'Inter your valid email';
    }
    if(empty($password)){
        $_SESSION['error_password'] = $error['error_password'] = 'Type a strong password';
    }
    if($password != $passwordB){
        $_SESSION['error_passwordB'] = $error['error_passwordB'] = "Don't match your password";
    }
    if(empty($photo)){
        $_SESSION['error_photo'] = $error['error_photo'] = 'Select your picture';
    }

    if(empty($error)){
        // include database
        include('../db.php');

        $query = "SELECT * FROM `admin_user` WHERE username = '$username' OR email = '$email'";
        $result = mysqli_query($conn, $query);
        // if exist any registred user
        if(mysqli_num_rows($result)>0){
            $_SESSION['user_already_exist'] = 'This user already exist';
            // redirect sign-up page
            header('Location: sign-up.php');
        }else{
            // get photo ext
            $fileExt=explode('.',$photo_name);
            // Generate a unique name for the file to avoid filename collisions
            $photoName = uniqid() . "_" . $username.'.'.end($fileExt);
            // Move the uploaded file to the banner-image folder
            move_uploaded_file($photo, $_SERVER['DOCUMENT_ROOT']. '/mordarna-II/admin/user/photo/' . $photoName);
            // insert query
            $query = "INSERT INTO `admin_user`(`username`, `email`, `password`, `photo`) 
            VALUES ('$username','$email','$hash_password','$photoName')";
            $rejult = mysqli_query($conn, $query);
            // show success massage
            if($rejult){
                $_SESSION['user_insert_success'] = "Successfully insert your information";
            }

            // redirect sign-up page
            header('Location: sign-up.php');
        }
    }else{
        header('Location: sign-up.php');
    }
}