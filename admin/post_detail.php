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
      <?php if(isset($_GET['del_success']) && $_GET['del_success'] == true){ ?>
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
          <h4 class="card-title">Post Detail <span><a href="post_index.php" class="btn btn-primary">Back To Post Home</a></span></h4>
         </div>
         <div class="card-body">
          <div class="toolbar">
           <!--        Here you can write extra buttons/actions for the toolbar              -->
          </div>
          <div class="material-datatables">
           <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%"
            style="width:100%">
            <?php
            $id = $_GET['id'];
            $post_detail = post_detail($id);
            // echo "<pre>";
            // print_r($post_detail);
            // echo "</pre>";
            ?>
            <tr>
                <th>ID</th>
                <td><?= $post_detail['id'] ?></td>
            </tr>
            <tr>
                <th>Post Title</th>
                <td><?= $post_detail['title'] ?></td>
            </tr>
            <tr>
                <th>Post Category</th>
                <td><?= $post_detail['category_name'] ?></td>
            </tr>
            <tr>
                <th>Post Content</th>
                <td><?= $post_detail['description'] ?></td>
            </tr>
            <tr>
                <th>Post Image</th>
                <td>
                    <img src="../actions/post_img/<?= $post_detail['photo']; ?>" width="200px" height="200p" alt="">
                </td>
            </tr>
            <tr>
                <th>Post Uploaded By</th>
                <td><?= $post_detail['user_name'] ?></td>
            </tr>
            <tr>
                <th>Created At</th>
                <td><?= $post_detail['created_at'] ?></td>
            </tr>
            <tr>
                <th>Updated At</th>
                <td><?= $post_detail['updated_at'] ?></td>
            </tr>
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