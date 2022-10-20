<?php 
session_start();
include("functions.php");
$auth = check();
include("includes/head.php"); ?>

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
         <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time
            datetime="2020-01-01"><?= $user_post_detail['created_at'] ?></time></a></li>

            <li class="d-flex align-items-center"><i class="bi bi-clock" style="font-size: 30px;"></i> <a href="#"><time
            datetime="2020-01-01"><?= time_Ago($user_post_detail['created_at']) ?></time></a></li>
         <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="#">12
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
       <div class="card mt-3">
        <div class="card-header">
          <h1>Leave Your Comments</h1>
        </div>
        <div class="card-body">
          <form action="actions/comment_action.php" method="POST">
           <div class="form-group">
            <input type="hidden" name="post_id" value="<?= $id ?>">
            <input type="hidden" name="user_id" value="<?= $_SESSION['user_id'] ?>">
            <textarea id="comments" name="comment" cols="30" rows="10" class="form-control"></textarea>
           </div>
           <div class="form-group mt-3">
            <input type="submit" name="comment_create" class="btn btn-primary" value="Submit">
           </div>
          </form>
        </div>
       </div>
       </div><!-- End meta bottom -->

      </article><!-- End blog post -->

    
      <div class="comments">
        <?php
          $comments = get_all_comments();
        ?>
        <h4 class="comments-count"> Total Comment :<?= count($comments)?></h4>
       <div id="comment-1" class="comment">
        <?php
       
         if($comments) :
          foreach($comments as $comment) :
        ?>
        <div class="d-flex">
         <div class="comment-img"><img src="actions/photos/<?= $comment['profile_img'] ?>" alt=""></div>
         <div>
          <h5><a href=""><?= $comment['user_name'] ?></a> <a href="#" class="reply" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-reply-fill"></i> Reply</a></h5>
          <time datetime="2020-01-01">
          <?php 
            // date with month name
            $date = date_create($comment['created_at']);
            echo date_format($date, "d M, Y");
            
            ?>
            </time>
          <p>
           <?= $comment['comment']; ?>
          </p>

         </div>
        </div>
        <?php endforeach; endif;?>
       </div><!-- End comment #1 -->
      
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
           <textarea name="comment" id="comments" class="form-control" placeholder="Your Comment*"></textarea>
          </div>
         </div>
         <div class="mt-3">
          <input type="submit"name="comment_reply" class="btn btn-primary" value="Post Comment">
         </div>
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

       <div class="sidebar-item recent-posts">
        <h3 class="sidebar-title">Recent Posts</h3>

        <div class="mt-3">
           <?php 

  // include("config/db_con.php");
  
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
   <?php
   if($query->num_rows > 0):
    while($row = $query->fetch_assoc()):
   
   ?>
         <div class="post-item mt-3">
          <img src="actions/post_img/<?= $row['photo']?>" alt="" width="50px" height="50px">
          <div>
           <h4><a href="recent_post_detail.php?id=<?= $row['id'] ?>" class="text-end"><?= substr($row['title'],0,20); ?></a></h4>
           <time datetime="2020-01-01">
            <?php
              $date = date_create($row['created_at']);
             echo date_format($date,"d,M,Y");
          ?>
           </time>
          </div>
         </div><!-- End recent post item-->
         <?php endwhile;?>
         <?php endif;?>

         
         </div><!-- End recent post item-->

        </div>

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


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="actions/reply_create.php" method="POST">
       <input type="hidden" name="user_id" value="<?= $_SESSION['user_id'] ?>">
       <input type="hidden" name="comment_id" value="<?= $id ?>">

       <div class="mb-3">
        <label for="message-text" class="col-form-label">Reply:</label>
        <textarea name="reply" class="form-control" id="message-text"></textarea>
       </div>
       <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <input type="submit" name="create_reply" class="btn btn-primary" value="Send Reply">
     </div>
      </form>
      </div>
      
    </div>
  </div>
</div>

 </main><!-- End #main -->

 <!-- ======= Footer ======= -->
 <?php include("includes/footer.php"); ?>

 <script>
 $(function() {
  CKEDITOR.replace('comments');
  $(".textarea");
 });
 </script>