<?php
include("../functions.php");

// update category
if(isset($_POST['update'])) { 
    $id = $_POST['id'];
    $category_name = $_POST['category_name'];
    $update_category = category_update($id, $category_name);
    echo "<pre>";
    print_r($update_category);
    echo "</pre>";
    die();
    if($update_category) { 
        header("location: ../admin/category_index.php?update_success=true");
    } else { 
        echo "Category Not Updated";
    }
}

?>