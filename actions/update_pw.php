<?php
include("../functions.php");

// $data = [
//     'id' => $_POST['id'],
//     'password' => md5($_POST['password']),
// ];
// echo "<pre>";
// print_r($data);
// echo "</pre>";

if(isset($_POST['pw_update'])){ 
    $id = $_POST['id'];
    $password = md5($_POST['password']);
    admin_password_update($id, $password);
    header("Location: ../admin/admin_profile.php?success=true");
}else { 
    echo "Cannot update password";
}
?>