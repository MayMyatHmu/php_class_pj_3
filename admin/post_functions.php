<?php 
//include("../config/db_con.php");
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