<?php 
// $link = mysqli_connect("localhost", "root", "", "two_project_db");

// // Check connection
// if($link === false){
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }else{
//     echo "Connected successfully";
// }

define( 'DB_NAME', 'two_project_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// // Check connection
// if($link === false){
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }else{
//     echo "Connected successfully";
// }