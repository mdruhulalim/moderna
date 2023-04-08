<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location: services.php');
    exit;
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
    $border_color = trim(htmlentities($_POST['border_color']));
    $icon_class= trim(htmlentities($_POST['icon_class']));

    if(empty($title)){
        $_SESSION['service_title_error'] = "Inter title";
    }
    if(empty($description)){
        $_SESSION['service_description_error'] = "Inter description";
    }

    if(!empty($title) && !empty($description)){
        include_once('../database-connect.php');

        // Insert query
        $query = "INSERT INTO `service`(`title`, `description`, `border_color`, `icon_class`) 
        VALUES ('$title','$description','$border_color','$icon_class')";
        $rejult = mysqli_query($conn, $query);
        header('Location: services.php');
    }else{
        header('Location: insert-service.php');
    }
}