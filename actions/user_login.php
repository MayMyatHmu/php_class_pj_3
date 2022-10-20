<?php 
session_start();
// $data = [
//  "email" => $_POST['email'],
//  "password" => md5($_POST['password']),
// ];

// echo "<pre>";
// print_r($data);
// echo "</pre>";
include("../functions.php");

if(isset($_POST['user_login'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $user_login = user_login($email, $password);
    // echo "<pre>";
    // print_r($user_login);
    // echo "</pre>";
    // die();
    // if($user_login){
    //     header("location:../admin/admin_profile.php");
    // }else{
    //     header("location:../user_login_form.php");
    // }
    if ($user_login) { 
        if ($user_login['value'] == 1) { 
            header("location: ../admin/admin_profile.php");
        }elseif($user_login['value'] == 2) { 
            header("location: ../admin/user_profile.php");
        }else { 
            header("location: ../user_login_form.php");
        }
    }
}