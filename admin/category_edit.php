<?php include("layouts/head.php"); ?>
<?php
$id = $_GET['id'];
$category = category_edit($id);

// update category
if(isset($_POST['update'])){
 $id = $_GET['id'];
 $category_name = $_POST['category_name'];
 $sql = "UPDATE categories SET category_name = '$category_name' WHERE id = '$id'";
 if (mysqli_query($link, $sql)) {
     header("location:category_index.php?update_success=true");
 } else {
     echo "Category Not Updated";
 }
}
?>
<body class="">
 <div class="wrapper ">
  <?php include("layouts/sidebar.php"); ?>
  <div class="main-panel">
   <!-- Navbar -->
   <?php include("layouts/top_navbar.php"); ?>
   <!-- End Navbar -->
   <div class="content">
    <div class="content">
     <div class="container-fluid">
   
      <div class="row">
       <div class="col-md-12">
        <div class="card">
         <div class="card-header card-header-primary card-header-icon">
          <div class="card-icon">
           <i class="material-icons">assignment</i>
          </div>
          <h4 class="card-title">Category Edit <span class="btn btn-outline-primary" data-toggle="modal"
            data-target="#exampleModal">Update Category</span></h4>
         </div>
         <div class="card-body">
          <div class="toolbar">
           <!--        Here you can write extra buttons/actions for the toolbar              -->
          </div>
          <div class="material-datatables">
         <form id="RegisterValidation" action="#" method="post">
         
        <div class="card ">
         <div class="card-header card-header-rose card-header-icon">
          <div class="card-icon">
           <i class="material-icons">mail_outline</i>
          </div>
          <h4 class="card-title">Category Form</h4>
         </div>
         <div class="card-body ">
          <div class="form-group">
           <label for="Category" class="bmd-label-floating"> Category Name</label>
           <input type="text" name="category_name" value="<?=$category['category_name'] ?>" class="form-control" required="true">
          </div>
         </div>
         <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" name="update" value="UpdateCategory" class="btn btn-primary">
         </div>
        </div>
       </form>
          </div>
         </div>
         <!-- end content-->
        </div>
        <!--  end card  -->
       </div>
      </div>
      <div class="row">
       <?php //include("layouts/top_card_two.php") ?>
      </div>
      <div class="row">
       <?php //include("layouts/top_card_three.php"); ?>
      </div>
      <h3>Manage Listings</h3>
      <br>
      <div class="row">
       <?php //include("layouts/manage_list.php") ?>
      </div>
     </div>
    </div>
   </div>


   <!-- Modal -->
   <!-- Modal -->
    
   <?php include("layouts/footer.php"); ?>
   </div>
   </div>
 <div class="fixed-plugin">
  <?php include("layouts/right_sidebar.php"); ?>
 </div>
 <!--   Core JS Files   -->
 <?php include("layouts/script.php"); ?>