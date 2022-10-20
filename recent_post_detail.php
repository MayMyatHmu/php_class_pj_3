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

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">

   <nav>
    <div class="container">
     <ol>
      <li><a href="index.html">Home</a></li>
      <li>Blog Details</li>
     </ol>
    </div>
   </nav>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Blog Details Section ======= -->
  <section id="blog" class="blog">
   <div class="container" data-aos="fade-up">

    <div class="row g-5">

     <div class="col-lg-8">

      <article class="blog-details">
       <?php 
         include("functions.php");
         $id = $_GET['id'];
         $user_post_detail = post_detail($id);
         ?>

       <div class="post-img">
        <img src="actions/post_img/<?= $user_post_detail['photo']; ?>" alt="" class="img-fluid">
       </div>

       <h2 class="title"><?= $user_post_detail['title'] ?></h2>

       <div class="meta-top">
        <ul>
         <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html"><?= $user_post_detail['user_name'] ?></a>
         </li>
         <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time
            datetime="2020-01-01"><?= $user_post_detail['created_at'] ?></time></a></li>

            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time
            datetime="2020-01-01"><?= time_Ago($user_post_detail['created_at']) ?></time></a></li>
         <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12
           Comments</a></li>
        </ul>
       </div><!-- End meta top -->

       <div class="content">
        <p>
       <?= $user_post_detail['description'] ?>
        </p>

        
        
        <p>
         Rerum ea est
        </p>
        <p>
         Alias quia non aliquid.
        </p>

       </div><!-- End post content -->

       <div class="meta-bottom">
        <i class="bi bi-folder"></i>
        <ul class="cats">
         <li><a href="#">Business</a></li>
        </ul>

        <i class="bi bi-tags"></i>
        <ul class="tags">
         <li><a href="#">Creative</a></li>
         <li><a href="#">Tips</a></li>
         <li><a href="#">Marketing</a></li>
        </ul>
       </div><!-- End meta bottom -->

      </article><!-- End blog post -->

      <div class="post-author d-flex align-items-center">
       <img src="assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">
       <div>
        <h4>Jane Smith</h4>
        <div class="social-links">
         <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
         <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
         <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
        </div>
        <p>
         Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat
         voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
        </p>
       </div>
      </div><!-- End post author -->

      <div class="comments">
      <h4 class="comments-count">8 Comments</h4>
       <div id="comment-1" class="comment">
        <div class="d-flex">
         <div class="comment-img"><img src="assets/img/blog/comments-1.jpg" alt=""></div>
         <div>
          <h5><a href="">Georgia Reader</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
          <time datetime="2020-01-01">01 Jan,2022</time>
          <p>
           Et rerum totam nisi.
          </p>
         </div>
        </div>
       </div><!-- End comment #1 -->
       <div id="comment-2" class="comment">
        <div class="d-flex">
         <div class="comment-img"><img src="assets/img/blog/comments-2.jpg" alt=""></div>
         <div>
          <h5><a href="">Aron Alvarado</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
          <time datetime="2020-01-01">01 Jan,2022</time>
          <p>
           Ipsam tempora sequi
          </p>
         </div>
        </div>

        <div id="comment-reply-1" class="comment comment-reply">
         <div class="d-flex">
          <div class="comment-img"><img src="assets/img/blog/comments-3.jpg" alt=""></div>
          <div>
           <h5><a href="">Lynda Small</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
           <time datetime="2020-01-01">01 Jan,2022</time>
           <p>
            Enim
           </p>
          </div>
         </div>

         <div id="comment-reply-2" class="comment comment-reply">
          <div class="d-flex">
           <div class="comment-img"><img src="assets/img/blog/comments-4.jpg" alt=""></div>
           <div>
            <h5><a href="">Sianna Ramsay</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
            <time datetime="2020-01-01">01 Jan,2022</time>
            <p>
             Et dignissimos
            </p>
           </div>
          </div>

         </div><!-- End comment reply #2-->

        </div><!-- End comment reply #1-->

       </div><!-- End comment #2-->

       <div id="comment-3" class="comment">
        <div class="d-flex">
         <div class="comment-img"><img src="assets/img/blog/comments-5.jpg" alt=""></div>
         <div>
          <h5><a href="">Nolan Davidson</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
          <time datetime="2020-01-01">
            <?php 
          //date with month name
          $date = date_create($row['created_at']);
             echo date_format($date,"d,M,Y");
          ?>
          </time>
          <p>
           Distinctio nesciunt
          </p>
         </div>
        </div>

       </div><!-- End comment #3 -->

       <div id="comment-4" class="comment">
        <div class="d-flex">
         <div class="comment-img"><img src="assets/img/blog/comments-6.jpg" alt=""></div>
         <div>
          <h5><a href="">Kay Duggan</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
          <time datetime="2020-01-01">01 Jan,2022</time>
          <p>
           Dolorem atque
          </p>
         </div>
        </div>

       </div><!-- End comment #4 -->

       <div class="reply-form">

        <h4>Leave a Reply</h4>
        <p>Your email address </p>
        <form action="">
         <div class="row">
          <div class="col-md-6 form-group">
           <input name="name" type="text" class="form-control" placeholder="Your Name*">
          </div>
          <div class="col-md-6 form-group">
           <input name="email" type="text" class="form-control" placeholder="Your Email*">
          </div>
         </div>
         <div class="row">
          <div class="col form-group">
           <input name="website" type="text" class="form-control" placeholder="Your Website">
          </div>
         </div>
         <div class="row">
          <div class="col form-group">
           <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
          </div>
         </div>
         <button type="submit" class="btn btn-primary">Post Comment</button>
         </form>

       </div>

      </div><!-- End blog comments -->

     </div>

     <div class="col-lg-4">

      <div class="sidebar">
      <div class="sidebar-item search-form">
        <h3 class="sidebar-title">Search</h3>
        <form action="" class="mt-3">
         <input type="text">
         <button type="submit"><i class="bi bi-search"></i></button>
        </form>
       </div><!-- End sidebar search formn-->
       <div class="sidebar-item categories">
        <h3 class="sidebar-title">Categories</h3>
        <ul class="mt-3">
          <?php 
          //include("functions.php");
          $categories = get_all_categories();
          foreach($categories as $key=>$category):
          
          ?>
         <li><a href="#"><?=$category['category_name']; ?></a></li>
         <!-- <li><a href="#">Lifestyle <span>(12)</span></a></li>
         <li><a href="#">Travel <span>(5)</span></a></li>
         <li><a href="#">Design <span>(22)</span></a></li>
         <li><a href="#">Creative <span>(8)</span></a></li>
         <li><a href="#">Educaion <span>(14)</span></a></li> -->
         <?php endforeach;?>
        </ul>
       </div><!-- End sidebar categories-->

       

       </div><!-- End sidebar recent posts-->

       <div class="sidebar-item tags">
        <h3 class="sidebar-title">Tags</h3>
        <ul class="mt-3">
         <li><a href="#">App</a></li>
         <li><a href="#">IT</a></li>
         <li><a href="#">Business</a></li>
         <li><a href="#">Mac</a></li>
         <li><a href="#">Design</a></li>
         <li><a href="#">Office</a></li>
         <li><a href="#">Creative</a></li>
         <li><a href="#">Studio</a></li>  
         <li><a href="#">Smart</a></li>
         <li><a href="#">Tips</a></li>
         <li><a href="#">Marketing</a></li>
        </ul>
       </div><!-- End sidebar tags-->

      </div><!-- End Blog Sidebar -->

     </div>
    </div>

   </div>
  </section><!-- End Blog Details Section -->

 </main><!-- End #main -->

 <!-- ======= Footer ======= -->
 <?php include("includes/footer.php"); ?>