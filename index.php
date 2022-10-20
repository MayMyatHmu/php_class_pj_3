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
  <section id="portfolio" class="portfolio sections-bg">
   <div class="container" data-aos="fade-up">

    <div class="section-header">

    </div>

    <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
     data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

     <div>
      <!-- <ul class="portfolio-flters">
       <li data-filter="*" class="filter-active">All</li>
       <li data-filter=".filter-app">App</li>
       <li data-filter=".filter-product">Product</li>
       <li data-filter=".filter-branding">Branding</li>
       <li data-filter=".filter-books">Books</li>
      </ul> -->
      <!-- End Portfolio Filters -->
     </div>

     <div class="row gy-4 portfolio-container">

      <?php 

   include("config/db_con.php");
  
    $query = $link->query("SELECT posts.*, categories.category_name, users.user_name FROM posts INNER JOIN categories ON posts.category_id = categories.id INNER JOIN users ON posts.user_id = users.id");
    // number of posts
    $num_posts = $query->num_rows;
    $num_per_pages = 6;
    $num_pages = ceil($num_posts/$num_per_pages);
    if(isset($_GET['page'])){
      $page = $_GET['page'];    
    }else{  
      $page = 1;
    }
    $offset = ($page-1)*$num_per_pages;
    $query = $link->query("SELECT posts.*, categories.category_name, users.user_name FROM posts INNER JOIN categories ON posts.category_id = categories.id INNER JOIN users ON posts.user_id = users.id ORDER BY posts.id DESC LIMIT $offset, $num_per_pages");
   ?>
      <?php if($query->num_rows > 0) : 
          while($row = $query->fetch_assoc()) : ?>
   
      <div class="col-xl-4 col-md-6 portfolio-item filter-app">
       <div class="portfolio-wrap">
        <a href="actions/post_img/<?= $row['photo']?>" data-gallery="portfolio-gallery-app" class="glightbox"><img
          src="actions/post_img/<?= $row['photo']?>" class="img-fluid" alt=""></a>
        <div class="portfolio-info">
         <h4><a href="user_post_detail.php?id=<?= $row['id'] ?>" title="More Details"><?= $row['title'] ?></a></h4>
         <p><?= substr($row['description'], 0, 50) ?></p>
         <a href="user_post_detail.php?id=<?= $row['id'] ?>" class="btn btn-primary">See More</a>
        </div>
       </div>
      </div><!-- End Portfolio Item -->
      <?php endwhile; ?>
      <?php endif; ?>



     </div><!-- End Portfolio Container -->

    </div>

   </div>
  </section>

  <div class="container">
   <div class="row">
    <!-- pagination -->
    <div class="col-md-12">
     <nav aria-label="Page navigation example">
      <ul class="pagination
          justify-content-center">
       <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
         <span aria-hidden="true">&laquo;</span>
         <span class="sr-only">Previous</span>
        </a>
       </li>
       <?php for($i=1; $i<=$num_pages; $i++) : ?>
       <li class="page-item"><a class="page-link" href="index.php?page=<?= $i ?>"><?= $i ?></a></li>
       <?php endfor; ?>
       <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
         <span aria-hidden="true">&raquo;</span>
         <span class="sr-only">Next</span>
        </a>
       </li>
      </ul>
     </nav>
    </div>
   </div>
  </div>
  <!-- End Portfolio Section -->

  <!-- ======= Our Team Section ======= -->
  <?php include("includes/team_section.php"); ?>
  <!-- End Our Team Section -->

  <!-- ======= Pricing Section ======= -->
  <!-- End Pricing Section -->

  <!-- ======= Frequently Asked Questions Section ======= -->
  <?php include("includes/ask_section.php") ?>
  <!-- End Frequently Asked Questions Section -->

  <!-- ======= Recent Blog Posts Section ======= -->
  <?php include("includes/recent_post_section.php"); ?>
  <!-- End Recent Blog Posts Section -->

  <!-- ======= Contact Section ======= -->
  <?php include("includes/contact_section.php"); ?>
  <!-- End Contact Section -->

 </main><!-- End #main -->

 <!-- ======= Footer ======= -->
 <?php include("includes/footer.php"); ?>