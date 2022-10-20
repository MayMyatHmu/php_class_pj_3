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
       <strong>Success!</strong> Category has been Deleted.
      </div>

      <?php } ?>

      <?php if(isset($_GET['success']) && $_GET['success'] == true){ ?>
      <div class="alert alert-primary">
       <strong>Success!</strong> Category has been Created.
      </div>

      <?php } ?>
      <div class="row">
       <div class="col-md-12">
        <div class="card">
         <div class="card-header card-header-primary card-header-icon">
          <div class="card-icon">
           <i class="material-icons">assignment</i>
          </div>
          <h4 class="card-title">Category List <span class="btn btn-outline-primary" data-toggle="modal"
            data-target="#exampleModal">Create New Category</span></h4>
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
              <th>Category Name</th>
              <th>Created At</th>
              <th>Updated At</th>
              <th class="disabled-sorting text-right">Actions</th>
             </tr>
            </thead>
            <tbody>
             <tr>
              <?php 
                $categories = get_all_categories();
                if($categories) :
                foreach($categories as $category) :
                ?>
              <td><?= $category['id']; ?></td>
              <td><?= $category['category_name']; ?></td>
              <td><?php echo date('F j, Y', strtotime($category['created_at'])); ?></td>
              <td><?= date('F j, Y', strtotime($category['created_at']));?></td>
              <td class="text-right">
               <a href="category_edit.php?id=<?= $category['id']; ?>"
                class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">dvr</i></a>
               <a href="../actions/category_delete.php?id=<?= $category['id']; ?>"
                class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
             </tr>
             <?php endforeach; 
             else: 
              echo "<tr><td colspan='5'>No Category Found</td></tr>";
              endif; 
             ?>
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
       <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
       </button>
      </div>
      <div class="modal-body">
       <form id="RegisterValidation" action="../actions/create_category.php" method="post">
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
           <input type="text" name="category_name" class="form-control" required="true">
          </div>
         </div>
         <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" name="create_name" value="New Create Category" class="btn btn-primary">
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