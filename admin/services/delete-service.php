<?php
// session start
session_start();
if(!isset($_SESSION['username'])){
    header('Location: sign-in.php');
}
// include database
include_once('../db.php');
// delete query
$id = $_GET['ID'];
$query = "DELETE FROM `services` WHERE ID = $id";
$rejult = mysqli_query($conn, $query);
if($rejult){
    header('Location: service.php');
}