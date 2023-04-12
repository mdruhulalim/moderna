<?php
// session start
session_start();
// dynaminc URL
function siteUrl(){
    $uri = explode('/',$_SERVER['REQUEST_URI']);
    $protocol = explode('/',$_SERVER['SERVER_PROTOCOL']);
    echo strtolower($protocol['0'].'://'.$_SERVER['SERVER_NAME'].'/'.$uri['1'].'/');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Dashboard Template · Bootstrap v4.6</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
    <link href="<?=siteUrl()?>admin/css/bootstrap.min.css" rel="stylesheet">


    <meta name="msapplication-config" content="/docs/4.6/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">

    <link href="<?=siteUrl()?>admin/css/dashboard.css" rel="stylesheet">
</head>
<body>