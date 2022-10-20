<?php 
session_start();
include("../functions.php");
$auth = check();

// user_login session 
$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name'];
$email = $_SESSION['email'];
$phone = $_SESSION['phone'];
$address = $_SESSION['address'];
$role_id = $_SESSION['role_id'];
$role_name = $_SESSION['role_name'];
$role_value = $_SESSION['role_value'];
?>
<!--
=========================================================
Material Dashboard PRO - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard-pro
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8" />
 <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
 <link rel="icon" type="image/png" href="../assets/img/favicon.png">
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
 <title>
  Material Dashboard PRO by Creative Tim
 </title>
 <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
 <!--     Fonts and icons     -->
 <link rel="stylesheet" type="text/css"
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
 <!-- CSS Files -->
 <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
 <!-- CSS Just for demo purpose, don't include it in your project -->
 <link href="assets/demo/demo.css" rel="stylesheet" />
</head>