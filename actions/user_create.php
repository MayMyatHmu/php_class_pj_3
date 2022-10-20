<?php 
// $data = [
//  'user_name' => $_POST['user_name'],
//  'email' => $_POST['email'],
//  'password' => $_POST['password'],
//  'phone' => $_POST['phone'],
//  'address' => $_POST['address'],
// ];

// echo "<pre>";
// print_r($data);
// echo "</pre>";
include("../functions.php");
if (isset($_POST['user_create'])) {
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $role_id = 1;
    $user_create = user_create($user_name, $email, $password, $phone, $address, $role_id);
    // echo "<pre>";
    // print_r($user_create);
    // echo "</pre>";
    // die();
    if ($user_create) {
        header("location:../user_login_form.php");
    } else {
        header("location:../user_reg_form.php");
    }
}