<?php 
include("../functions.php");
$data = [
    'category_name' => $_POST['category_name']
];

// echo "<pre>";
// print_r($data);
// echo "</pre>";

if(isset($_POST['create_name'])){
    $create_category = create_category($data);
    if($create_category){
        header("location:../admin/category_index.php?success=true");
    }else{
        echo "Category Not Created";
    }
}