<?php
include("../functions.php");

//delete category
if(isset($_GET['id'])){
 $id = $_GET['id'];
 $delete_category = delete_category($id);
 if($delete_category){
  header("location: ../admin/category_index.php?del_success=true");
 }else{
  echo "Category Not Deleted";
 }
}


?>