<?php 
// $id = $_POST['id'];
// $profile_img = $_FILES['file']['name'];
// $profile_img_name = $profile_img['file']['name'];
// $profile_img_tmp_name = $profile_img['file']['tmp_name'];
// echo $profile_img_name;
// echo $profile_img_tmp_name;
// echo $id;
include("../functions.php");

if(isset($_POST['profile_image_update']))
{
    $id = $_POST['id'];
    $photo = $_FILES['file']['name'];
    $photo_tmp = $_FILES['file']['tmp_name'];
    move_uploaded_file($photo_tmp, "photos/$photo");
    admin_profile_update($id, $photo);
    header("Location: ../admin/admin_profile.php?profile_image_update=true");

}else{
 echo "Cannot update profile image";
}