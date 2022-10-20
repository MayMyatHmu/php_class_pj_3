<?php
include("../functions.php");
$photo = $_FILES['photo']['name'];
$photo_tmp = $_FILES['photo']['tmp_name'];

$data = [
 'title' => $_POST['title'],
 'category_id' => $_POST['category_id'],
 'description' => $_POST['description'],
 'photo' => $photo,
 'user_id' => $_POST['user_id'],
];
//echo "<pre>";
//print_r($data);
//echo "</pre>";

if (post_create($data)) {
    move_uploaded_file($photo_tmp, "post_img/$photo");
    header("Location: ../admin/post_index.php?success=true");
   } else {
    echo "Cannot create post";
   }
?>