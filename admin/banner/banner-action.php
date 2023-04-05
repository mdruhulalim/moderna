<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location: sign-in.php');
}
// dynamic URL
function siteUrl(){
    $uri = explode('/',$_SERVER['REQUEST_URI']);
    $protocol = explode('/',$_SERVER['SERVER_PROTOCOL']);
    return strtolower($protocol['0'].'://'.$_SERVER['SERVER_NAME'].'/'.$uri['1'].'/');
}
// form action
if(isset($_POST['submit'])){
    $title = trim(htmlentities($_POST['title']));
    $description = trim(htmlentities($_POST['description']));
    $btn_text = trim(htmlentities($_POST['btn_text']));
    $btn_link= trim(htmlentities($_POST['btn_link']));
    $photo = $_FILES['photo'];
    $photo_name = $photo['name'];

    if(empty($title)){
        $_SESSION['banner_title_error'] = "Inter title";
    }
    if(empty($photo_name)){
        $_SESSION['banner_photo_error'] = "Select a photo";
    }

    if(!empty($title) && !empty($photo_name)){
        include_once('../database-connect.php');
        // Generate a unique name for the file to avoid filename collisions
        $photoName = uniqid() . "_" . $photo['name'];
        // Move the uploaded file to the banner-image folder
        move_uploaded_file($photo['tmp_name'], siteUrl(). 'upload/banner/' . $photoName);

        // Insert query
        $query = "INSERT INTO `banners`(`title`, `description`, `btn_text`, `btn_link`, `photo`) 
        VALUES ('$title','$description','$btn_text','$btn_link','$photoName')";
        $rejult = mysqli_query($conn, $query);
        header('Location: banner.php');
    }else{
        header('Location: insert-banner.php');
    }
}