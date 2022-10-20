<?php include("layouts/head.php"); ?>

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
      <?php if(isset($_GET['delete_success']) && $_GET['delete_success'] == true){ ?>
      <div class="alert alert-danger">
       <strong>Success!</strong>Post has been Deleted.
      </div>

      <?php } ?>

      <?php if(isset($_GET['success']) && $_GET['success'] == true){ ?>
      <div class="alert alert-primary">
       <strong>Success!</strong>Post has been Created.
      </div>

      <?php } ?>
      <div class="row">
       <div class="col-md-12">
        <div class="card">
         <div class="card-header card-header-primary card-header-icon">
          <div class="card-icon">
           <i class="material-icons">assignment</i>
          </div>
          <h4 class="card-title">Post List <span class="btn btn-outline-primary" data-toggle="modal"
            data-target="#exampleModal">Create New Post</span></h4>
         </div>
         <div class="card-body">
          <div class="toolbar">
           <!--        Here you can write extra buttons/actions for the toolbar              -->
          </div>
          <div class="material-datatables">
           <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%"
            style="width:100%">
            <thead>
              <tr>
                <th>ID</th>
                <th>Post Title</th>
                <th>Post Content</th>
                <th>Post Category</th>
                <th>Post Image</th>
                <th class="disabled-sorting text-right">Actions</th>
              </tr>
            </thead>
            <tbody>
            <tr>
              <?php 
              $posts = get_all_posts(); 
              if($posts) :
              foreach($posts as $post) :
              ?>
              <td><?= $post['id']; ?></td>
              <td><?= $post['title']; ?></td>
              <td><?= substr($post['description'], 0, 50); ?></td>
              <td><?= $post['category_name']; ?></td>
              <td><img src="../actions/post_img/<?= $post['photo']; ?>" width="50" height="50"></td>
              <td>
               <a href="post_edit.php?id=<?= $post['id']; ?>" class="btn btn-outline-primary">Edit</a>
               <a href="post_detail.php?id=<?= $post['id']; ?>" class="btn btn-outline-info">Details</a>
               <a href="../actions/post_delete.php?id=<?= $post['id']; ?>" class="btn btn-outline-danger">Delete</a>
              </td>
             </tr>
             <?php endforeach; ?>
             <?php else : ?>
             <tr>
              <td colspan="6">No Post Found</td>
             </tr>
             <?php endif; ?>
            </tbody>
           </table>
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
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
     <div class="modal-content">
      <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Creat Post</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
       </button>
      </div>
      <div class="modal-body">
       <form id="RegisterValidation" action="../actions/create_post.php" method="post" enctype="multipart/form-data">
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
           <input type="text" name="title" class="form-control" required="true">
          </div>
          <div class="form-group">
            <select name="category_id" class="selectpicker col-md-12" data-size="7" data-style="btn btn-primary btn-round" title="Single Select">
             <option disabled selected>Select Category</option>
             <?php
            //  include("../functions.php");
             $select_category = get_all_categories();
             foreach($select_category as $category) :
              ?>
             <option value="<?php echo $category['id'];?>"><?php echo $category['category_name']; ?></option>
             <?php endforeach; ?>
             
           </select>
          </div>
          <div class="form-group">
           <textarea id="description" name="description" class="form-control "></textarea>
          </div>
          <div class="form-group">
           <div class="fileinput fileinput-new text-center" data-provides="fileinput">
          <div class="fileinput-new thumbnail">
            <img src="assets/img/image_placeholder.jpg" alt="...">
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
          <input type="submit" name="create_post" value="New Create Post" class="btn btn-primary">
         </div>
        </div>
       </form>
      </div>

     </div>
    </div>
   </div>
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