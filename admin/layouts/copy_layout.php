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
      <div class="row">
       <?php include("layouts/top_card_one.php") ?>
      </div>
      <div class="row">
       <?php include("layouts/top_card_two.php") ?>
      </div>
      <div class="row">
       <?php include("layouts/top_card_three.php"); ?>
      </div>
      <h3>Manage Listings</h3>
      <br>
      <div class="row">
       <?php include("layouts/manage_list.php") ?>
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