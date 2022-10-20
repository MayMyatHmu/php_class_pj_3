<?php
include("../function.php");
// $data = [
//  $user_id = $_POST['user_id'],
//  $post_id = $_POST['post_id'],
//  $comment = $_POST['comment'],
// ];
// echo "<pre>";
// print_r($data);
// echo "</pre>";

//$comment_data = comment_create($data);
// echo "<pre>";
// print_r($comment_data);
// echo "</pre>";
// if($comment_data){
//  header("Location: ../user_post_detail.php?post_id=$post_id");
// }else{
//  echo "Error";
// }

// add data to the database
include("../config/db_con.php");
if(isset($_POST['comment_create'])) 
 {
  $post_id = $_POST['post_id'];
  $user_id = $_POST['user_id'];
  $comment = strip_tags($_POST['comment']);
  $created_at = date("Y-m-d H:i:s");

  // echo "<pre>";
  // print_r($_POST);
  // echo "</pre>";
  // die();
  $link->query("INSERT INTO comments (post_id, user_id, comment, created_at) VALUES ('$post_id', '$user_id', '$comment', '$created_at')");
  header("location: ../user_post_detail.php?id=$post_id");
 }

?>