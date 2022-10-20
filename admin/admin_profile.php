<?php 
// session_start();
// include("../functions.php");
// $auth = check();

// // user_login session 
// $user_id = $_SESSION['user_id'];
// $user_name = $_SESSION['user_name'];
// $email = $_SESSION['email'];
// $phone = $_SESSION['phone'];
// $address = $_SESSION['address'];
// $role_id = $_SESSION['role_id'];
// $role_name = $_SESSION['role_name'];
// $role_value = $_SESSION['role_value']; 
?>

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
     <?php if(isset($_GET['success']) && $_GET['success'] == true) { ?>
              <div class="alert alert-success">
                <strong>Success!</strong> Password has been updated.
              </div>
            <?php }elseif(isset($_GET['profile_image_update']) == true){?> 
            <div class="alert alert-rose">
                <strong>Success!</strong> Profile has been updated.
              </div>
              <?php }elseif(isset($_GET['name_success'])) { ?>
      <div class="alert alert-rose">
       <strong>Success!</strong> Name has been updated.
      </div>
      <?php } ?>
     <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-icon card-header-rose">
                  <div class="card-icon">
                    <i class="material-icons">perm_identity</i>
                  </div>
                  <h4 class="card-title">User Detail
                    <small class="category">Complete your profile</small>
                  </h4>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" class="form-control" value="<?= $user_name; ?>" disabled>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" class="form-control" value="<?= $email; ?>" disabled>
                        </div>
                      </div>
                  
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Adress</label>
                          <input type="text" class="form-control" value="<?= $address; ?>" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>

           

            <!-- password update -->
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-icon card-header-rose">
                  <div class="card-icon">
                    <i class="material-icons">perm_identity</i>
                  </div>
                  <h4 class="card-title">Update Your Password
                    <small class="category">Complete your profile</small>
                  </h4>
                </div>
                <div class="card-body">
                  <form action="../actions/update_pw.php" method="POST">
                    <input type="hidden" name="id" value="<?= $user_id ?>">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password" class="form-control" name="password">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                      </div>
                    </div>
                    <input type="submit" name="pw_update" class="btn btn-rose pull-right" value="Update Password">
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
              <!-- name update -->
              <div class="card">
                <div class="card-header card-header-icon card-header-rose">
                  <div class="card-icon">
                    <i class="material-icons">perm_identity</i>
                  </div>
                  <h4 class="card-title">Update Your UserName
                    <small class="category">Complete your profile</small>
                  </h4>
                </div>
                <div class="card-body">
                  <form action="../actions/update_name.php" method="POST">
                    <input type="hidden" name="id" value="<?= $user_id ?>">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">UserName</label>
                          <input type="text" class="form-control" name="user_name">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                      </div>
                    </div>
                    <input type="submit" name="name_update" class="btn btn-rose pull-right" value="Update UserName">
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <!-- password update form end -->
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <?php
                  // display profile image
                  $id = $user_id;
                  $profile_img = get_profile_img($id);
                  ?>
                  <a href="#pablo">
                    <img class="img" src="../actions/photos/<?= $profile_img['profile_img']; ?>" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                  <h4 class="card-title"><?= $user_name ?></h4>
                  <form action="../actions/admin_update_profile.php" method="POST" enctype="multipart/form-data">
           <input type="hidden" name="id" value="<?= $user_id; ?>" >
           <div class="col-md-4 col-sm-4">
            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
              <div class="fileinput-new thumbnail">
              <img src="../../assets/img/image_placeholder.jpg" alt="...">
             </div>
             <div class="fileinput-preview fileinput-exists thumbnail"></div>
             <div>
              <span class="btn btn-rose btn-round btn-file">
               <span class="fileinput-new">Select image</span>
               <span class="fileinput-exists">Change</span>
               <input type="file" name="file" />
              </span>
              <input type="submit" name="profile_image_update" value="Update Profile Image" class="btn btn-primary">
             </div>
            </div>
           </div>
          </form>
                </div>
              </div>
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