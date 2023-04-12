<?php
// session start
session_start();
if(!isset($_SESSION['username'])){
    header('Location: ../user/sign-in.php');
}
// dynamic URL
function siteUrl(){
    $uri = explode('/',$_SERVER['REQUEST_URI']);
    $protocol = explode('/',$_SERVER['SERVER_PROTOCOL']);
    return strtolower($protocol['0'].'://'.$_SERVER['SERVER_NAME'].'/'.$uri['1'].'/');
}
// form action
$error = [];
if(isset($_POST['submit'])){
    $title = trim(htmlentities($_POST['title']));
    $description = trim(htmlentities($_POST['description']));
    $btn_text = trim(htmlentities($_POST['btn_text']));
    $btn_link= trim(htmlentities($_POST['btn_link']));

    // check empty field
    if(empty($title)){
        $_SESSION['banner_title_error'] = $error['banner_title_error'] = "Inter title";
    }
    if(empty($description)){
        $_SESSION['banner_description_error'] = $error['banner_description_error'] = "Type description";
    }
    if(empty($btn_text)){
        $_SESSION['banner_btn_text_error'] = $error['banner_btn_text_error'] = "Please type button text here";
    }
    if(empty($btn_link)){
        $_SESSION['banner_btn_link_error'] = $error['banner_btn_link_error'] = "Please type button link here";
    }

    if(empty($error)){
        // include database
        include('../db.php');
        // Insert query
        $query = "INSERT INTO `banner`(`title`, `description`, `btn_text`, `btn_link`) 
        VALUES ('$title','$description','$btn_text','$btn_link')";
        $rejult = mysqli_query($conn, $query);
        if($rejult){
            $_SESSION['banner_insrt_success'] = "Successfully insert your banner information";
            // redirect banner page
            header('Location: banner.php');
        }
    }else{
        // redirect insert-banner page
        header('Location: insert-banner.php');
    }
}