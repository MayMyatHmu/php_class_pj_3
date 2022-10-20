<?php include("includes/head.php"); ?>

<body>

 <!-- ======= Header ======= -->
 <?php include("includes/top_navbar.php") ?>
 <!-- End Top Bar -->
 <?php include("includes/header.php") ?>

 <!-- End Header -->
 <!-- End Header -->

 <!-- ======= Hero Section ======= -->
 <?php include("includes/hero_section.php"); ?>
 <!-- End Hero Section -->

 <main id="main">
  <div class="container">
   <div class="row">
    <div class="col-lg-8">
     <div class="card">
      <div class="card-header">
       <h4>User Login</h4>
      </div>
      <div class="card-body">
       <form action="actions/user_login.php" method="POST">

        <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Email address</label>
         <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Password</label>
         <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="mb-3">
         <input type="submit" name="user_login" class="btn btn-primary" value="Login">
        </div>

       </form>

      </div>
     </div>
    </div>
   </div>
  </div>

  <!-- ======= About Us Section ======= -->
  <?php //include("includes/about_section.php"); ?>
  <!-- End About Us Section -->

  <!-- ======= Clients Section ======= -->
  <?php //include("includes/client_section.php"); ?>
  <!-- End Clients Section -->

  <!-- ======= Stats Counter Section ======= -->
  <?php //include("includes/status_section.php"); ?>
  <!-- End Stats Counter Section -->

  <!-- ======= Call To Action Section ======= -->
  <?php //include("includes/call_section.php"); ?>
  <!-- End Call To Action Section -->

  <!-- ======= Our Services Section ======= -->
  <?php //include("includes/service_section.php"); ?>
  <!-- End Our Services Section -->

  <!-- ======= Testimonials Section ======= -->
  <?php //include("includes/testimonial_section.php"); ?>
  <!-- End Testimonials Section -->

  <!-- ======= Portfolio Section ======= -->
  <?php //include("includes/portfolio_section.php"); ?>
  <!-- End Portfolio Section -->

  <!-- ======= Our Team Section ======= -->
  <?php //include("includes/team_section.php"); ?>
  <!-- End Our Team Section -->

  <!-- ======= Pricing Section ======= -->
  <!-- End Pricing Section -->

  <!-- ======= Frequently Asked Questions Section ======= -->
  <?php //include("includes/ask_section.php") ?>
  <!-- End Frequently Asked Questions Section -->

  <!-- ======= Recent Blog Posts Section ======= -->
  <?php //include("includes/recent_post_section.php"); ?>
  <!-- End Recent Blog Posts Section -->

  <!-- ======= Contact Section ======= -->
  <?php //include("includes/contact_section.php"); ?>
  <!-- End Contact Section -->

 </main><!-- End #main -->

 <!-- ======= Footer ======= -->
 <?php include("includes/footer.php"); ?>