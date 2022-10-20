<section id="portfolio" class="portfolio sections-bg">
 <div class="container" data-aos="fade-up">

  <div class="section-header">
   <h2>Portfolio</h2>
   <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia
    reprehenderit sunt deleniti</p>
  </div>

  <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
   data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

   <div>
    <ul class="portfolio-flters">
     <li data-filter="*" class="filter-active">All</li>
     <li data-filter=".filter-app">App</li>
     <li data-filter=".filter-product">Product</li>
     <li data-filter=".filter-branding">Branding</li>
     <li data-filter=".filter-books">Books</li>
    </ul><!-- End Portfolio Filters -->
    <?php 
   include("functions.php");
   $post_data = get_all_posts();
  if($post_data) :
  foreach($post_data as $post) :
   ?>
   </div>



   <div class="row gy-4 portfolio-container">
   

    <div class="col-xl-4 col-md-6 portfolio-item filter-app">
     <div class="portfolio-wrap">
      <a href="actions/post_img/<?= $post['photo']?>" data-gallery="portfolio-gallery-app" class="glightbox"><img
        src="actions/post_img/<?= $post['photo']?>" class="img-fluid" alt=""></a>
      <div class="portfolio-info">
       <h4><a href="user_post_detail.php?=id<?= $post['id'] ?>" title="More Details"><?= $post['title'] ?></a></h4>
       <p><?= substr($post['description'],0,50) ?></p>
      </div>
     </div>
     <?php endforeach; endif; ?>

    </div><!-- End Portfolio Item -->

   </div><!-- End Portfolio Container -->

  </div>

 </div>
</section>