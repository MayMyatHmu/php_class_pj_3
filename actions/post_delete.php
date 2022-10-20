<?php
include("../functions.php");
if(isset($_GET['id'])){
 $id = $_GET['id'];
 $delete=delete_post($id);
 if($id){
header("Location: ../admin/post_index.php?delete_success=true");
}else{
 echo "Error";
}
}
