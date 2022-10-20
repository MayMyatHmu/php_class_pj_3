<?php 
include("../config/db_con.php");
// $data = [
//  $user_id = $_POST['user_id'],
//  $comment_id = $_POST['comment_id'],
//  $reply = $_POST['reply']
// ];

// echo "<pre>";
// print_r($data);
// echo "</pre>";

if(isset($_POST['create_reply'])) 
 {
  $user_id = $_POST['user_id'];
  $comment_id = $_POST['comment_id'];
  $reply = $_POST['reply'];
  $created_at = date("Y-m-d H:i:s");
  // echo "<pre>";
  // print_r($_POST);
  // echo "</pre>";
  // die();
  $link->query("INSERT INTO replies (user_id, comment_id, reply, created_at) VALUES ('$user_id', '$comment_id', '$reply', '$created_at')");
  header("location: ../user_post_detail.php?id=$comment_id");
 }