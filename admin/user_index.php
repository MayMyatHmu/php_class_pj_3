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
      <?php if(isset($_GET['delete']) && $_GET['delete'] == true){ ?>
       <div class="alert alert-success">
        <strong>Success!</strong> User has been Deleted.
       </div>
       <?php } ?>
      <div class="row">
       <div class="col-md-12">
        <div class="card">
         <div class="card-header card-header-primary card-header-icon">
          <div class="card-icon">
           <i class="material-icons">assignment</i>
          </div>
          <h4 class="card-title">DataTables.net</h4>
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
              <th>User Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Role Name</th>
              <th class="disabled-sorting text-right">Actions</th>
             </tr>
            </thead>
            <tfoot>
             <tr>
              <th>ID</th>
              <th>User Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Role Name</th>
              <th class="text-right">Actions</th>
             </tr>
            </tfoot>
            <tbody>
             <tr>
              <?php 
              // display admin data
              $users = get_all_users();
              // echo "<pre>";
              // print_r($admin_users);
              // echo "</pre>";
              if($users) :
              foreach($users as $user) :
               
              ?>
              <td><?= $user['id'] ?></td>
              <td><?= $user['user_name'] ?></td>
              <td><?= $user['email'] ?></td>
              <td><?= $user['phone'] ?></td>
              <td><?= $user['address'] ?></td>
              <td><?= $user['name'] ?></td>
              <td class="text-right">
               <a href="admin_edit.php?id=<?= $user['id'] ?>" class="btn btn-link btn-warning btn-just-icon edit"><i
                 class="material-icons">dvr</i></a>
               <?php 
               if(isset($_SESSION['role_value'])) : 
               ?>
               <?php if($_SESSION['role_value'] == '1') : ?>
               <a href="../actions/admin_delete.php?id=<?= $user['id'] ?>" class="btn btn-link btn-danger btn-just-icon remove"><i
                 class="material-icons">close</i></a>
               <?php endif; ?>
               <?php endif; ?>
              </td>
             </tr>
             <?php  endforeach; 
            else: ?>
             <tr>
              <td colspan="7" class="text-center">No Data Found</td>
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
   <?php include("layouts/footer.php"); ?>
  </div>
 </div>
 <div class="fixed-plugin">
  <?php include("layouts/right_sidebar.php"); ?>
 </div>
 <!--   Core JS Files   -->
 <?php include("layouts/script.php"); ?>