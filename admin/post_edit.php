<?php 
include("layouts/head.php"); 

$id = $_GET['id'];
$post_edit_data = post_edit($id);
// echo "<pre>";
// print_r($post_edit_data);
// echo "</pre>";
?>

<body class="">
 <div class="wrapper">
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
          <h4 class="card-title">Post Edit <span><a href="post_index.php" class="btn btn-primary">Back To Post Index</a></span></h4>
         </div>
         <div class="card-body">
          <div class="toolbar">
           <!--        Here you can write extra buttons/actions for the toolbar              -->
          </div>
          <div class="material-datatables">
          <form id="RegisterValidation" action="../actions/update_post.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $id = $_GET['id'] ?>">
          <div class="card ">
         <div class="card-header card-header-rose card-header-icon">
          <div class="card-icon">
           <i class="material-icons">mail_outline</i>
          </div>
          <h4 class="card-title">Post Form</h4>
         </div>
         <div class="card-body ">
          <div class="form-group">
           <label for="Category" class="bmd-label-floating"> Post Title</label>
           <input type="text" name="title" class="form-control" required="true" value="<?= $post_edit_data['title'] ?>">
          </div>
          <div class="form-group">
            <select name="category_id" class="selectpicker col-md-12" data-size="7" data-style="btn btn-primary btn-round" title="Single Select">
             <option disabled selected>Select Category</option>
             <?php
             //include("../fucntions.php");
            $select_category = get_all_categories();
            foreach($select_category as $category) :
             if($category['id'] == $post_edit_data['category_id']) :
            ?>
                <option value="<?= $category['id'] ?>" selected><?= $category['category_name'] ?>
                </option>
                <?php else : ?>
                <option value="<?= $category['id'] ?>"><?= $category['category_name'] ?></option>

                <?php endif; endforeach; ?>
           </select>
          </div>
          <div class="form-group">
           <textarea id="description" name="description" class="form-control "><?= $post_edit_data['description'] ?></textarea>
          </div>
          <div class="form-group">
           <div class="fileinput fileinput-new text-center" data-provides="fileinput">
          <div class="fileinput-new thumbnail">
            <img src="../actions/post_img/<?= $post_edit_data['photo']; ?>" alt="..." selected>
          </div>
          <div class="fileinput-preview fileinput-exists thumbnail"></div>
          <div>
            <span class="btn btn-rose btn-round btn-file">
              <span class="fileinput-new">Select image</span>
              <span class="fileinput-exists">Change</span>
              <input type="file" name="photo" />
            </span>
            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
          </div>
        </div>
          </div>
          <input type="hidden" name="user_id" value="<?= $user_id; ?>">
         </div>
         <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" name="create_post" value="Update Post" class="btn btn-primary">
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

 <script>
 $(function() {
  CKEDITOR.replace('description');
  $(".textarea");
 });
 </script>