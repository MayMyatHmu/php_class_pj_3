<?php 
include("config/db_con.php");
// check auth
function check(){
  if (isset($_SESSION['user_name'])) {
    return $_SESSION['user_name'];

  } else {
    header('Location: user_login_form.php');
  }
}
// user create function 
function user_create($user_name, $email, $password, $phone, $address, $role_id){
    global $link;
    $sql = "INSERT INTO users (user_name, email, password, phone, address, role_id) VALUES ('$user_name', '$email', '$password', '$phone', '$address', '$role_id')";
    if (mysqli_query($link, $sql)) {
        return true;
    } else {
        return false;
    }
} 


// user login function == step 1
// function user_login($email, $password){
//     global $link;
//     $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
//     $result = mysqli_query($link, $sql);
//     if (mysqli_num_rows($result) > 0) {
//         $row = mysqli_fetch_assoc($result);
//         return $row;
//     } else {
//         return false;
//     }
// }


// user login function == step 2
// function user_login($email, $password){
//     global $link;
//     //$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
//     $sql = "SELECT users.*, roles.name, roles.value FROM users INNER JOIN roles ON users.role_id = roles.id WHERE email = '$email' AND password = '$password'";
//     $result = mysqli_query($link, $sql);
//     if (mysqli_num_rows($result) > 0) {
//         $row = mysqli_fetch_assoc($result);
//         // session 
//         session_start();
//         $_SESSION['user_id'] = $row['id'];
//         $_SESSION['user_name'] = $row['user_name'];
//         $_SESSION['email'] = $row['email'];
//         $_SESSION['phone'] = $row['phone'];
//         $_SESSION['address'] = $row['address'];
//         $_SESSION['role_id'] = $row['role_id'];
//         return $row;
//     } else {
//         return false;
//     }
// }

// user login function == step 3
function user_login($email, $password){
    global $link;
    $sql = "SELECT users.*, roles.name, roles.value FROM users INNER JOIN roles ON users.role_id = roles.id WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($link, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // session 
        session_start();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['phone'] = $row['phone'];
        $_SESSION['address'] = $row['address'];
        $_SESSION['role_id'] = $row['role_id'];
        $_SESSION['role_name'] = $row['name'];
        $_SESSION['role_value'] = $row['value'];
        return $row;
    } else {
        return false;
    }
}


// admin profile update only function
function admin_profile_update($id, $profile_img){
    global $link;
    $sql = "UPDATE users SET profile_img = '$profile_img' WHERE id = '$id'";
    if (mysqli_query($link, $sql)) {
        return true;
    } else {
        return false;
    }
}

// get profile image function
function get_profile_img($id){
    global $link;
    $sql = "SELECT profile_img FROM users WHERE id = '$id'";
    $result = mysqli_query($link, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else {
        return false;
    }
}

// admin password update function
function admin_password_update($id, $password){
    global $link;
    $sql = "UPDATE users SET password = '$password' WHERE id = '$id'";
    if (mysqli_query($link, $sql)) {
        return true;
    } else {
        return false;
    }
}


// admin name update function
function admin_name_update($id, $user_name){
     global $link;
    $sql = "UPDATE users SET user_name = '$user_name' WHERE id = '$id'";
    if (mysqli_query($link, $sql)) {
        return true;
    } else {
        return false;
    }
}

// get all admins data from database
function get_all_admins(){
    global $link;
    $sql = "SELECT users.*, roles.name, roles.value FROM users INNER JOIN roles ON users.role_id = roles.id WHERE users.role_id = 1";
    $result = mysqli_query($link, $sql);
    if (mysqli_num_rows($result) > 0) {
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    } else {
        return false;
    }
}


// get all User data from database

function get_all_users(){
    global $link;
    $sql = "SELECT users.*, roles.name, roles.value FROM users INNER JOIN roles ON users.role_id = roles.id WHERE users.role_id = 2";
    $result = mysqli_query($link, $sql);
    if (mysqli_num_rows($result) > 0) {
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    } else {
        return false;
    }
}
// delete admin user function
function delete_admin($id){
    global $link;
    $sql = "DELETE FROM users WHERE id = '$id'";
    if(mysqli_query($link, $sql)){
        return true;
    }else{
        return false;
    }
}

// user logout function
function user_logout(){
    session_start();
    session_destroy();
    header("location:../user_login_form.php");
}
//create category 
function create_category($data)
{
    global $link;
    $category_name = $data['category_name'];
    
    $sql = "INSERT INTO categories (category_name) VALUES ('$category_name')";
    if (mysqli_query($link, $sql)) {
        return true;
    } else {
        return false;
    }
}
// get all categories
function get_all_categories(){
    global $link;
    $sql = "SELECT * FROM categories";
    $result = mysqli_query($link, $sql);
    if (mysqli_num_rows($result) > 0) {
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    } else {
        return false;
    }
}
//delete gategory
function delete_category($id){
    global $link;
    $sql = "DELETE FROM categories WHERE id ='$id'";
    if(mysqli_query($link,$sql)){
        return true;
    }else{
        return false;
    }
}
// category edit
function category_edit($id){
    global $link;
    $sql = "SELECT * FROm categories WHERE id = '$id'";
    $result = mysqli_query($link,$sql);
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
        return $row;
    }else{
        return false;
    }
}
// update category
function category_update($id, $category_name){
     global $link;
    $sql = "UPDATE categories SET category_name = '$category_name' WHERE id = '$id'";
    if (mysqli_query($link, $sql)) {
        return true;
    } else {
        return false;
    }
}
/// insert POST  data with image file
function post_create($data)
{
    global $link;
    $title = $data['title'];
    $category_id = $data['category_id'];
    $description = $data['description'];
    $post_img = $data['photo'];
    $user_id = $data['user_id'];
    $sql = "INSERT INTO posts (title, category_id , description, photo, user_id) VALUES ('$title', '$category_id', '$description',  '$post_img', '$user_id')";
    if (mysqli_query($link, $sql)) {
        return true;
    } else {
        return false;
    }
}

// display post data 
    function get_all_posts(){
        global $link;
        $sql = "SELECT posts.*, categories.category_name, users.user_name FROM posts INNER JOIN categories ON posts.category_id = categories.id INNER JOIN users ON posts.user_id = users.id";
        $result = mysqli_query($link, $sql);
        if (mysqli_num_rows($result) > 0) {
            $rows = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $rows[] = $row;
            }
            return $rows;
        } else {
            return false;
        }
    }
    function post_detail($id){
        global $link;
        $sql = "SELECT posts.*, categories.category_name, users.user_name FROM posts INNER JOIN categories ON posts.category_id = categories.id INNER JOIN users ON posts.user_id = users.id WHERE posts.id = '$id'";
        $result = mysqli_query($link, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            return $row;
        } else {
            return false;
        }
    }

    //post edit
    function post_edit($id){
        global $link;
        $sql = "SELECT posts.*, categories.category_name, users.user_name FROM posts INNER JOIN categories ON posts.category_id = categories.id INNER JOIN users ON posts.user_id = users.id WHERE posts.id = '$id'";
        $result = mysqli_query($link, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            return $row;
        } else {
            return false;
        }
    }


   // update post
function post_update($id, $data) { 
    global $link;
    $title = $data['title'];
    $category_id = $data['category_id'];
    $description = $data['description'];
    $post_img = $data['photo'];
    $user_id = $data['user_id'];
    $sql = "UPDATE posts SET title = '$title', category_id = '$category_id', description = '$description', photo = '$post_img', user_id = '$user_id' WHERE id = '$id'";
    if (mysqli_query($link, $sql)) { 
        return true;
    } else { 
        return false;
    }
}

//delete post
function delete_post($id){
    global $link;
    $sql = "DELETE FROM posts WHERE id = '$id'";
    if(mysqli_query($link,$sql)){
        return true;
    }else{
        return false;
    }
}

// time ago function
function time_Ago($time_ago)
{
    $time_ago = strtotime($time_ago);
    $cur_time   = time();
    $time_elapsed   = $cur_time - $time_ago;
    $seconds    = $time_elapsed ;
    $minutes    = round($time_elapsed / 60 );
    $hours      = round($time_elapsed / 3600);
    $days       = round($time_elapsed / 86400 );
    $weeks      = round($time_elapsed / 604800);
    $months     = round($time_elapsed / 2600640 );
    $years      = round($time_elapsed / 31207680 );
    // Seconds
    if($seconds <= 60){
        return "just now";
    }
    //Minutes
    else if($minutes <=60){
        if($minutes==1){
            return "one minute ago";
        }
        else{
            return "$minutes minutes ago";
        }
    }
    //Hours
    else if($hours <=24){
        if($hours==1){
            return "an hour ago";
        }else{
            return "$hours hrs ago";
        }
    }
    //Days
    else if($days <= 7){
        if($days==1){
            return "yesterday";
        }else{
            return "$days days ago";
        }
    }
    //Weeks
    else if($weeks <= 4.3){
        if($weeks==1){
            return "a week ago";
        }else{
            return "$weeks weeks ago";
        }
    }
    //Months
    else if($months <=12){
        if($months==1){
            return "a month ago";
        }else{
            return "$months months ago";
        }
    }
    //Years
    else{
        if($years==1){
            return "one year ago";
        }else{
            return "$years years ago";
        }
    }
}
//coment create
function comment_create($data){
    global $link;
    // $user_id = $data['user_id'];
    // $post_id = $data['post_id'];
    // $comment = $data['comment'];
    $user_id = $data['user_id'];
    $post_id = $data['post_id'];
    $comment = $data['comment'];
    $sql = "INSERT INTO comments (user_id,post_id, comment) VALUES('$user_id','$post_id','$comment')";
    if(mysqli_query($link,$sql)){
        return true;
    }else{
        return false;
    }

}

// get all comment

function get_all_comments() { 
    global $link;
    $sql = "SELECT comments.*, users.user_name, users.profile_img, posts.title FROM comments INNER JOIN users ON comments.user_id = users.id INNER JOIN posts ON comments.post_id = posts.id";
    $result = mysqli_query($link, $sql);
    if (mysqli_num_rows($result) > 0) { 
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) { 
            $rows[] = $row;
        }
        return $rows;
    } else { 
        return false;
    }
}

//get comments by id
function comments_by_id($id){
    global $link;
    $sql = "SELECT comments.*, users.user_name, users.profile_img FROM comments INNER JOIN users ON comments.user_id = users.id WHERE comments.user_id = '$id'";
    $result = mysqli_query($link, $sql);
    if (mysqli_num_rows($result) > 0) {
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    } else {
        return false;
    }
}

function getRepliesByCommentId($id)
  {
    global $link;
    $result = mysqli_query($link, "SELECT * FROM replies WHERE comment_id=$id");
    $replies = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $replies;
  }