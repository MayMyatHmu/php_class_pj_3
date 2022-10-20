<?php
include("../functions.php");

// $data = [
//     'id' => $_POST['id'],
//     'user-name' => $_POST['user_name'],
// ];
// echo "<pre>";
// print_r($data);
// echo "</pre>";
// die();

if(isset($_POST['name_update'])){ 
    $id = $_POST['id'];
    $user_name = $_POST['user_name'];
    admin_name_update($id, $user_name);
    header("Location: ../admin/admin_profile.php?name_success=true");
}else { 
    echo "Cannot update User Name";
}
?>