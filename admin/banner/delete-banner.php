<?php
// include database
session_start();
if(!isset($_SESSION['username'])){
    header('Location: sign-in.php');
}
include_once('../database-connect.php');
// delete query
$id = $_GET['ID'];
print_r($id);
$query = "DELETE FROM `banners` WHERE ID = $id";
$rejult = mysqli_query($conn, $query);
if($rejult){
    header('Location: banner.php');
}