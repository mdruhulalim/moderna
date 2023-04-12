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
    $icon_class = trim(htmlentities($_POST['icon_class']));
    $title = trim(htmlentities($_POST['title']));
    $description = trim(htmlentities($_POST['description']));
    $border_color = trim(htmlentities($_POST['border_color']));

    // check empty field
    if(empty($title)){
        $_SESSION['service_title_error'] = $error['service_title_error'] = "Inter title";
    }
    if(empty($description)){
        $_SESSION['service_description_error'] = $error['service_description_error'] = "Type description";
    }

    if(empty($error)){
        // include database
        include('../db.php');
        // Insert query
        $query = "INSERT INTO `services`(`icon_class`, `title`, `description`, `border_color`) 
        VALUES ('$icon_class','$title','$description','$border_color')";
        $rejult = mysqli_query($conn, $query);
        if($rejult){
            $_SESSION['service_insrt_success'] = "Successfully insert your service information";
            // redirect banner page
            header('Location: service.php');
        }
    }else{
        // redirect insert-banner page
        header('Location: insert-service.php');
    }
}