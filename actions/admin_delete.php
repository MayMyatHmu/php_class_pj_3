<?php 
include("../config/db_con.php");
include("../functions.php");
// delete function call
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $delete = delete_admin($id);
    if($delete){
        header('Location: ../admin/user_index.php?delete=true');
    } else {
        echo "Error";
    }
}